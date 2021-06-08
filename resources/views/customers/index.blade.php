@extends('layouts.master_customer')

@section('content')
<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="{{ asset('img/hero-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero__text">
                    <div class="hero__text__title">
                        <span>FIND YOUR DREAM CAR</span>
                        <h2>At Grain Showroom</h2>
                    </div>
                    <div class="hero__text__price">
                        <div class="car-model">Start From</div>
                        <h2>Rp 100 million</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Car Section Begin -->
<section class="car spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="car__sidebar">
                    <div class="car__search">
                        <h5>Car Search</h5>
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="car__filter">
                        <h5>Car Filter</h5>
                        <form action="#">
                            <select>
                                <option data-display="Brand">Select Brand</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->nama }}</option>
                                @endforeach
                            </select>
                            <select>
                                <option value="">Kondisi</option>
                                <option value="1">Baru</option>
                                <option value="2">Bekas</option>
                            </select>
                            <select>
                                <option value="">Transmisi</option>
                                <option value="Manual">Manual</option>
                                <option value="Otomatis">Otomatis</option>
                            </select>
                            <select>
                                <option value="">Kapasitas</option>
                                @for ($i = 1; $i < 10; $i++)
                                    <option value="{{ $i }}">{{ $i }} orang</option>
                                @endfor
                            </select>
                            <div class="filter-price">
                                <p>Price:</p>
                                <div class="price-range-wrap">
                                    <div class="filter-price-range"></div>
                                    <div class="range-slider">
                                        <div class="price-input">
                                            <input type="text" id="filterAmount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="car__filter__btn">
                                <button type="submit" class="site-btn">Reset FIlter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="car__filter__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="car__filter__option__item">
                                <h6>Show On Page</h6>
                                <select>
                                    <option value="">9 Car</option>
                                    <option value="">15 Car</option>
                                    <option value="">20 Car</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="car__filter__option__item car__filter__option__item--right">
                                <h6>Sort By</h6>
                                <select>
                                    <option value="">Price: Highest Fist</option>
                                    <option value="">Price: Lowest Fist</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($cars as $car)
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="{{ asset('storage/' . $car->image) }}" alt="" style="width: 262px" height="151px">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">{{ $car->tahun }}</div>
                                        <h5 style="height: 70px !important"><a href="{{ route('detail', $car->id) }}">{{ $car->nama }}</a></h5>
                                        <ul>
                                            <li><span>{{ $car->isi_silinder }}</span> cc</li>
                                            <li>Auto</li>
                                            <li><span>{{ $car->kapasitas }}</span> orang</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <a href=""><span class="car-option">Beli</span></a>
                                        <h6>Rp {{ number_format($car->harga, 0, ',', '.') }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination__option">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><span class="arrow_carrot-2right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car Section End -->
@endsection