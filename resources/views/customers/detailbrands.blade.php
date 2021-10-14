@extends('layouts.master_customer')

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row block-9">
            @foreach ($brands as $brand)
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                    <img src="{{ asset('storage/' . $brand->image) }}" alt="" style="width: 262px" height="151px">
                    </div>
                    <br>
                    <p class="mb-4" align="center">Price</p>
                    <h2>{{$brand->harga}}</h2>
                    <hr />
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate">
                    <h2>{{$brand->nama}}</h2>
                    <p>{{$brand->deskripsi}}</p>
                    <a href="{{ route('transactions.create', $brand->id) }}" class="primary-btn">Reservasi</a>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection
