@extends('frontend.index')
@section('judul','Halaman Cari SD')

@section('isi')
<div class="container-fluid mt-2 mb-5">
    <div class="products">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center"> <span class="font-weight-bold text-uppercase">Data SD</span>
                    <div>

                    </div>
                </div>
                <div class="row g-3">
                  @foreach ($fsd as $fs)
                    <figure class="snip1527">
                      <div class="image"><img src="/image/{{$fs->image}}" alt="pr-sample23" /></div>
                      <figcaption>
                        <div class="date"><span class="day">{{$fs->Akreditasi}}</span></div>
                        <h3>{{$fs->NamaSekolah}}</h3>
                        <p>{{$fs->Npsn}}</p>
                        <p>{{$fs->Alamat}}</p>
                        <p>{{$fs->Email}}</p>
                    </figcaption> <a href="#"></a>
                    </figure>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
