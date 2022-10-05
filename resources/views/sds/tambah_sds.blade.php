@extends('backend.home')
@section('judul','Tambah Data Sekolah')

@section('isi')

<h1 class="mt-3">Tambah Data Sekolah</h1>

    <form method="post" action='/tambahsds' enctype="multipart/form-data">
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Npsn</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="Npsn" placeholder="masukan Npsn" name="Npsn" require>
          </div>
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Nama Sekolah</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="NamaSekolah" placeholder="masukan Nama Sekolah" name="NamaSekolah" require>
          </div>
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Alamat</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="Alamat" placeholder="masukan Alamat" name="Alamat" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Akreditasi</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="Akreditasi" placeholder="Masukan Akreditasi" name="Akreditasi" require>
          </div>
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Email</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="Email" placeholder="masukan Email" name="Email" require>
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

@endsection
