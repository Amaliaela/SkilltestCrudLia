@extends('backend.home')
@section('judul','Detail Data Sekolah')

@section('isi')

<div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Halaman Detail Data Sekolah</h1>

    <div class="card">
    <div class="card-body">
      <div class="" style="">
        <img src="/image/{{ $sd->image}}" alt="" width="250" height="200">
      </div>
    <h5 class="card-title">Npsn : {{ $sd->Npsn }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">Nama Sekolah : {{ $sd->NamaSekolah }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Alamat : {{ $sd->Alamat }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Akreditasi : {{ $sd->Akreditasi }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Email : {{ $sd->Email }}</h6>
    <p class="card-text">Posted : {!! date('d M y', strtotime($sd->created_at)) !!}</p>

    <a href="/sd" class="btn btn-warning">kembali</a>
  </div>
</div>

    </div>
    </div>
    </div>

@endsection
