@extends('backend.home')
@section('judul','Detail Data Sekolah')

@section('isi')

<div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Halaman Detail Data Sekolah/h1>

    <div class="card">
    <div class="card-body">
      <div class="" style="">
        <img src="/image/{{ $smps->image}}" alt="" width="250" height="200">
      </div>
    <h5 class="card-title">Npsn : {{ $smps->Npsn }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">Nama Sekolah : {{ $smps->NamaSekolah }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Alamat : {{ $smps->Alamat }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Akreditasi : {{ $smps->Akreditasi }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Email : {{ $smps->Email }}</h6>
    <p class="card-text">Posted : {!! date('d M y', strtotime($smps->created_at)) !!}</p>

    <a href="/smps" class="btn btn-warning">kembali</a>
  </div>
</div>

    </div>
    </div>
    </div>

@endsection
