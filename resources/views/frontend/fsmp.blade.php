@extends('frontend.index')
@section('judul','Halaman SMP Negeri')

@section('isi')
<div class="container-fluid mt-2 mb-5">
      <div class="products">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <form class="" action="/carifsmp" method="GET" style="margin-right:70px;">
              <div class="input-group mb-3">
                <div class="input-group-prepend col-10">
                  <button class="btn btn-primary" type="submit" style="float:right">Cari</button>
                </div>
                <input type="text" name="keyword" type="search" class="form-control  col-3" placeholder="Cari Product"
                aria-label="" aria-describedby="basic-addon1">
              </div>
            </form>
                @foreach ($fsmp as $fp)
                  <figure class="snip1527">
                    <div class="image"><img src="/image/{{$fp->image}}" alt="pr-sample23" /></div>
                    <figcaption>
                      <div class="date"><span class="day">{{$fp->Akreditasi}}</span></div>
                      <h3>{{$fp->NamaSekolah}}</h3>
                      <p>{{$fp->Npsn}}</p>
                      <p>{{$fp->Alamat}}</p>
                      <p>{{$fp->Email}}</p>
                  </figcaption> <a href="#"></a>
                  </figure>
      @endforeach
      </div>
    </div>
  </div>

</div>
<div style="margin-top:500px; margin-left:50px;">
   {{$fsmp->links()}}
 </div>
@endsection
