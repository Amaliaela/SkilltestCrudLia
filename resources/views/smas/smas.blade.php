@extends('backend.home')
@section('judul','Halaman SMA Swasta')

@section('isi')

<a href="/tambah_smas"class="btn btn-success my-2">Tambah Data Sekolah</a>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Npsn</th>
      <th scope="col">Nama Sekolah</th>
      <th scope="col">Alamat</th>
      <th scope="col">Akreditasi</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($smas as $sm)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sm->Npsn}}</td>
      <td>{{$sm->NamaSekolah}}</td>
      <td>{{$sm->Alamat}}</td>
      <td>{{$sm->Akreditasi}}</td>
      <td>{{$sm->Email}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/smas/{{ $sm->id }}" method="post">
                   @method('delete')
                   @csrf
                   <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                   <a href="/edit_smas/{{$sm->id}}" class="btn btn-warning">Edit</a>
                   <a href="/lihat_smas/{{$sm->id}}" class="btn btn-success">Lihat</a>
                 </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
  {{$smas->links()}}
</div>
@endsection
