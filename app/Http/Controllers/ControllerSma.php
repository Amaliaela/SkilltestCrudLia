<?php

namespace App\Http\Controllers;

use App\Model_Sma;
use Illuminate\Http\Request;

class ControllerSma extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sma = Model_Sma::paginate(4);
      return view('sma.sma',['sma' => $sma]);
    }

    public function fsma()
    {
      $fsma = Model_Sma::paginate(4);
      return view('frontend.fsma',['fsma' => $fsma]);
    }

    public function carifsma(Request $request)
    {
      $keyword = $request->get('keyword');
          $fsma = Model_Sma::paginate(10);

         if ($keyword) {
         $fsma = Model_Sma::where("NamaSekolah","LIKE","%$keyword%")->get();
      }

          return view ('frontend.carifsma', compact('fsma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sma.tambah_sma');
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

Model_Sma::create($input);

return redirect('/sma');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Sma $sma)
    {
          return view('sma.lihat_sma', compact('sma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Sma $sma)
    {
          return view('sma.edit_sma', compact('sma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Model_Sma $sma)
    {
      Model_Sma::where('id', $sma->id)
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

$sma->update($input);

return redirect('/sma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Sma $sma)
    {
      Model_Sma::destroy($sma->id);
      return redirect('/sma');
    }
}
