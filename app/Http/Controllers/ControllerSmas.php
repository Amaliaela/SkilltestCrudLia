<?php

namespace App\Http\Controllers;

use App\Model_Smas;
use Illuminate\Http\Request;

class ControllerSmas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $smas = Model_Smas::paginate(4);
      return view('smas.smas',['smas' => $smas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('smas.tambah_smas');
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

Model_Smas::create($input);

return redirect('/smas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Smas $smas)
    {
        return view('smas.lihat_smas', compact('smas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Smas $smas)
    {
        return view('smas.edit_smas', compact('smas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Model_Smas $smas)
    {
      Model_Smas::where('id', $smas->id)
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

$smas->update($input);

return redirect('/smas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Smas $smas)
    {
      Model_Smas::destroy($smas->id);
      return redirect('/smas');
    }
}
