@extends('layouts.master_customer')

@section('content')

<section class="ftco-section">
    <div class="container">
        @foreach ($dokters as $dokter)
            <div class="row block-9">
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                        <img src="{{ asset('storage/' . $dokter->image) }}" alt="" style="padding-left: 20%">
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
                <a href="{{ route('transactions.create', $dokter->id) }}" class="primary-btn">Konsultasi</a>
                </div>
            </div>
         </div>
         @endforeach
    </div>
</section>

@endsection
