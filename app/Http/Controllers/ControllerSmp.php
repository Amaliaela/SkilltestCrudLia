<?php

namespace App\Http\Controllers;

use App\Model_Smp;
use Illuminate\Http\Request;

class ControllerSmp extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $smp = Model_Smp::paginate(4);
      return view('smp.smp',['smp' => $smp]);
    }

    public function fsmp()
    {
      $fsmp = Model_Smp::paginate(4);
      return view('frontend.fsmp',['fsmp' => $fsmp]);
    }

    public function carifsmp(Request $request)
    {
      $keyword = $request->get('keyword');
          $fsmp = Model_Smp::paginate(10);

         if ($keyword) {
         $fsmp = Model_Smp::where("NamaSekolah","LIKE","%$keyword%")->get();
      }

          return view ('frontend.carifsmp', compact('fsmp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('smp.tambah_smp');
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

Model_Smp::create($input);

return redirect('/smp');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Smp $smp)
    {
          return view('smp.lihat_smp', compact('smp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Smp $smp)
    {
          return view('smp.edit_smp', compact('smp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Model_Smp $smp)
    {
      Model_Smp::where('id', $smp->id)
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

$smp->update($input);

return redirect('/smp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Smp $smp)
    {
      Model_Smp::destroy($smp->id);
      return redirect('/smp');
    }
}
