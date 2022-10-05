@extends('backend.home')
@section('judul','Halaman SMP Negeri')

@section('isi')

<a href="/tambah_smp"class="btn btn-success my-2">Tambah Data Sekolah</a>

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
    @foreach ($smp as $sp)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sp->Npsn}}</td>
      <td>{{$sp->NamaSekolah}}</td>
      <td>{{$sp->Alamat}}</td>
      <td>{{$sp->Akreditasi}}</td>
      <td>{{$sp->Email}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/smp/{{ $sp->id }}" method="post">
                   @method('delete')
                   @csrf
                   <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                   <a href="/edit_smp/{{$sp->id}}" class="btn btn-warning">Edit</a>
                   <a href="/lihat_smp/{{$sp->id}}" class="btn btn-success">Lihat</a>
                 </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
  {{$smp->links()}}
</div>
@endsection
