@extends('backend.home')
@section('judul','Halaman SMP Swasta')

@section('isi')

<a href="/tambah_smps"class="btn btn-success my-2">Tambah Data Sekolah</a>

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
    @foreach ($smps as $ps)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$ps->Npsn}}</td>
      <td>{{$ps->NamaSekolah}}</td>
      <td>{{$ps->Alamat}}</td>
      <td>{{$ps->Akreditasi}}</td>
      <td>{{$ps->Email}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/smps/{{ $ps->id }}" method="post">
                   @method('delete')
                   @csrf
                   <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                   <a href="/edit_smps/{{$ps->id}}" class="btn btn-warning">Edit</a>
                   <a href="/lihat_smps/{{$ps->id}}" class="btn btn-success">Lihat</a>
                 </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
  {{$smps->links()}}
</div>
@endsection
