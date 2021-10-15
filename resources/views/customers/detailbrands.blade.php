@extends('layouts.master_customer')

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row block-9">
            @foreach ($brands as $brand)
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                    <img class="mb-4" src="{{ asset('storage/' . $brand->image) }}" alt="" style="padding-left: 20%">
                    </div>
                    <br>
                    <p class="mb-4" align="center" style="padding-left: 20%">Price</p>
                    <h2 align="center" style="padding-left: 20%">{{$brand->biaya}}</h2>
                   
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
