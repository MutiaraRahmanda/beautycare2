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
        @foreach ($cars as $car)
            <div class="row block-9">
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                        <img src="{{ asset('storage/' . $car->image) }}" alt="" style="width: 262px" height="151px">
                    </div>
                    <br>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate">
                <h2 class="mb-4">dr. Balquist Farida, Sp.KK</h2>
                <div id="rectangle" align="center">Dokter Kulit dan Kelamin</div>
                <br><br>
                <b><h5>Jadwal Tersedia:</h5><b>
                <p>
                    <li>Senin  : 08.00 - 10.00</li>
                    <li>Selasa : 08.00 - 15.00</li>
                    <li>Rabu   : 09.00 - 12.00</li>
                    <li>Kamis  : 12.00 - 10.00</li>
                    <li>Jumat  : 08.00 - 15.00</li>
                </p>
                <br><br>
                <a href="{{ route('transactions.create', $car->id) }}" class="primary-btn">Konsultasi</a>
                </div>
            </div>
         </div>
         @endforeach
    </div>
</section>

@endsection
