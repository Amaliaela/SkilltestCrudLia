@extends('backend.home')
@section('judul','Halaman Home')

@section('isi')

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-teal">
  <h1>Welcome Data Sekolah</h1>
</div>

<img src="{{asset('images/images.jpg')}}" alt="Car" style="width:100%">

<div class="w3-container">
  <p>Detail data sekolah palembang dari sekolah dasar sampai sekolah menengah akhir</p>
</div>

</body>
</html>
@endsection
