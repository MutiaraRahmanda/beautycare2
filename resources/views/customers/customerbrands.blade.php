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


<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach ($brands as $brand)
                <div class="col-lg-3 d-flex">
                    <div class="coach align-items-stretch">
                        <div class="card-body">
                                <img src="{{ asset('storage/' . $brand->image) }}" alt="" style="width: 262px" height="151px">
                                <br><br>
                                <h4 class="mb-4" align="center">{{$brand->nama}}</h4>
                                <hr />
                                <p class="mb-5">{{$brand->deskripsi}}</p>
                                <br>
                                <p><a href="detailbrands/{{$brand->id}}" class="btn btn-white px-4 py-3"><img src="assets/images/shopping-cart.png" style="width:8%"> Detail</span></a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection
