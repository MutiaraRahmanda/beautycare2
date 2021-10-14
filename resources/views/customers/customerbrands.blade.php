@extends('layouts.master_customer')

@section('content')
<!-- Hero Section Begin -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-3 bread">Treatments</h1>
        </div>
      </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-12 heading-section ftco-animate text-center">
            <h3 class="subheading">Semua</h3>
            <h2 class="mb-1">Treatments</h2>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<section class="ftco-section ftco-no-pt ftco-no-pb">
    @foreach ($brands as $brand)
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="offer-deal text-center px-2 px-lg-5" style="width:400px">
                    <div class="card-body">
                        <img src="{{ asset('images/' . $brand->image) }}" alt="Card Image" style="width: 262px" height="151px">
                        <br><br>
                        <h4 class="mb-4" align="center">{{$brand->nama}}</h4>
                        <hr />
                        <p class="mb-5">{{$brand->deskripsi}}</p>
                        <br>
                        {{-- <a href="{{ route('treatments.detail', $brand->id) }}"><img src="assets/images/shopping-cart.png" style="width:8%">Detail</a> --}}
                        {{-- <p><a href="electrocautery" class="btn btn-white px-4 py-3"><img src="assets/images/shopping-cart.png" style="width:8%"> Detail</span></a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>



@endsection
