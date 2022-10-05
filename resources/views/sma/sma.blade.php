@extends('backend.home')
@section('judul','Halaman SMA Negeri')

@section('isi')

<a href="/tambah_sma"class="btn btn-success my-2">Tambah Data Sekolah</a>

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
    @foreach ($sma as $sa)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sa->Npsn}}</td>
      <td>{{$sa->NamaSekolah}}</td>
      <td>{{$sa->Alamat}}</td>
      <td>{{$sa->Akreditasi}}</td>
      <td>{{$sa->Email}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/sma/{{ $sa->id }}" method="post">
                   @method('delete')
                   @csrf
                   <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                   <a href="/edit_sma/{{$sa->id}}" class="btn btn-warning">Edit</a>
                   <a href="/lihat_sma/{{$sa->id}}" class="btn btn-success">Lihat</a>
                 </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
  {{$sma->links()}}
</div>
@endsection
