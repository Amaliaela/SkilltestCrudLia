<?php

namespace App\Http\Controllers;

use App\Model_Sds;
use Illuminate\Http\Request;

class ControllerSds extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sds = Model_Sds::paginate(4);
      return view('sds.sds',['sds' => $sds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sds.tambah_sds');
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

Model_Sds::create($input);

return redirect('/sds');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Sds $sds)
    {
        return view('sds.lihat_sds', compact('sds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Sds $sds)
    {
        return view('sds.edit_sds', compact('sds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Model_Sds $sds)
    {
      Model_Sds::where('id', $sds->id)
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

$sds->update($input);

return redirect('/sds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Sds $sds)
    {
      Model_Sds::destroy($sds->id);
      return redirect('/sds');
    }
}
