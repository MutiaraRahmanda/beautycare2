@extends('layouts.master_customer')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-3 bread">Contact us</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-4 contact-info ftco-animate bg-light p-4">
          <div class="row">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Informasi Kontak</h2>
            </div>
            <div class="col-md-12 mb-3">
              <p><span>Alamat:</span> Jl. Sukarno Hatta No 32, Malang</p>
            </div>
            <div class="col-md-12 mb-3">
              <p><span>Telephone:</span> <a href="tel://1234567920">081375685166</a></p>
            </div>
            <div class="col-md-12 mb-3">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">darmansaragih087@gmail.com</a></p>
            </div>
            <div class="col-md-12 mb-3">
              <p><span>Website:</span> <a href="">yoursite.com</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 ftco-animate">
          <form action="#" class="contact-form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nama Anda">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email Anda">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
