@extends('layouts.master_customer')

@section('content')
<!-- Hero Section Begin -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-3 bread">Doctor</h1>
        </div>
      </div>
    </div>
</section>

<!-- Hero Section End -->

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
            <h3 class="subheading">Doctor</h3>
            <h2 class="mb-1">Meet Our Treatments Specialists</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($cars as $car)
                <div class="col-lg-3 d-flex">
                    <div class="coach align-items-stretch">
                        <div class="card-body">
                            <img src="{{ asset('storage/' . $car->image) }}" alt="" style="width: 262px" height="151px">
                            <span class="subheading">{{$car->specialist}}</span>
                            <h3>{{$car->nama}}</h3>
                            <br>
                            <p><a href="detailcar/{{$car->id}}" class="btn btn-white px-4 py-3">Detail</span></a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection
