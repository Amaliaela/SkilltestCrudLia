@extends('backend.home')
@section('judul','Edit Data Sekolah')

@section('isi')

<h1 class="mt-3">Edit Data Sekolah</h1>

    <form method="post" action='/editsma/{{$sma->id}}' enctype="multipart/form-data">
            @method('patch')
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Npsn</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="Npsn" placeholder="masukan nomor Npsn" value="{{$sma->Npsn}}" name="Npsn" require>
          </div>
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Nama Sekolah</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="NamaSekolah" placeholder="masukan Nama Sekolah" value="{{$sma->NamaSekolah}}" name="NamaSekolah" require>
          </div>
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Alamat</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="Alamat" placeholder="masukan Alamat" value="{{$sma->Alamat}}" name="Alamat" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Akreditasi</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="Akreditasi" placeholder="Masukan Akreditasi" value="{{$sma->Akreditasi}}" name="Akreditasi">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Email</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="Email" placeholder="Masukan Nama Email" value="{{$sma->Email}}" name="Email">
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <div class="" style="margin-left:15px;">
            <img src="/image/{{ $sma->image}}" alt="" width="90" height="90">
            </div>
          <br>
          <button type="submit" class="btn btn-primary">Edit</button>
    </form>

@endsection
