@extends('frontend.index')
@section('judul','Halaman Cari SMP')

@section('isi')
<div class="container-fluid mt-2 mb-5">
    <div class="products">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center"> <span class="font-weight-bold text-uppercase">Produk Apple</span>
                    <div>

                    </div>
                </div>
                <div class="row g-3">
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
</div>
@endsection
