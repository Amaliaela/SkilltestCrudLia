<?php

namespace App\Http\Controllers;

use App\Model_Sd;
use Illuminate\Http\Request;

class ControllerSd extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sd = Model_Sd::paginate(4);
      return view('sd.sd',['sd' => $sd]);
    }

    public function fsd()
    {
      $fsd = Model_Sd::paginate(4);
      return view('frontend.fsd',['fsd' => $fsd]);
    }

    public function carifsd(Request $request)
    {
      $keyword = $request->get('keyword');
          $fsd = Model_Sd::paginate(10);

         if ($keyword) {
         $fsd = Model_Sd::where("NamaSekolah","LIKE","%$keyword%")->get();
      }

          return view ('frontend.carifsd', compact('fsd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sd.tambah_sd');
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
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
]);

$input = $request->all();

if ($image = $request->file('image')) {
    $destinationPath = 'image/';
    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    $image->move($destinationPath, $profileImage);
    $input['image'] = "$profileImage";
}

Model_Sd::create($input);

return redirect('/sd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Sd $sd)
    {
        return view('sd.lihat_sd', compact('sd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Sd $sd)
    {
        return view('sd.edit_sd', compact('sd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Model_Sd $sd)
    {
      Model_Sd::where('id', $sd->id)
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

$sd->update($input);

return redirect('/sd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Sd $sd)
    {
      Model_Sd::destroy($sd->id);
      return redirect('/sd');
    }
}
