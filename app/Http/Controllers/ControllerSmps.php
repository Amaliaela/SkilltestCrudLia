<?php

namespace App\Http\Controllers;

use App\Model_Smps;
use Illuminate\Http\Request;

class ControllerSmps extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $smps = Model_Smps::paginate(4);
      return view('smps.smps',['smps' => $smps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('smps.tambah_smps');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
    'Npsn' => 'required',
    'NamaSekolah' => 'required',
    'Alamat' => 'required',
    'Akreditasi' => 'required',
    'Email' => 'required',
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
]);

$input = $request->all();

if ($image = $request->file('image')) {
    $destinationPath = 'image/';
    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    $image->move($destinationPath, $profileImage);
    $input['image'] = "$profileImage";
}

Model_Smps::create($input);

return redirect('/smps');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Smps $smps)
    {
        return view('smps.lihat_smps', compact('smps'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Smps $smps)
    {
        return view('smps.edit_smps', compact('smps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Model_Smps $smps)
    {
      Model_Smps::where('id', $smps->id)
->update([
    'Npsn' => $request->Npsn,
    'NamaSekolah' => $request->NamaSekolah,
    'Alamat' => $request->Alamat,
    'Akreditasi' => $request->Akreditasi,
    'Email' => $request->Email,
    'image' => $request->image,
]);

$input = $request->all();

if ($image = $request->file('image')) {
   $destinationPath = 'image/';
   $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
   $image->move($destinationPath, $profileImage);
   $input['image'] = "$profileImage";
}else{
   unset($input['image']);
}

$smps->update($input);

return redirect('/smps');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Smps $smps)
    {
      Model_Smps::destroy($smps->id);
      return redirect('/smps');
    }
}
