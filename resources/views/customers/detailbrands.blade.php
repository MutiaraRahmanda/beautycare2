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

<!-- Footer Section Begin -->
<footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">BeautyCare</h2>
            <p class="ftco-heading-3">Selamat datang di website Klinik BeautyCare, kami adalah klinik perawatan kulit wajah dan badan yang didirikan oleh Modav. Di Klinik BeautyCare kami menyadari bahwa setiap individu memiliki jenis dan masalah kulit yang berbeda-beda.</p>
            <ul class="ftco-footer-social list-unstyled float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Popular</h2>
            <ul class="list-unstyled">
              <li class="ftco-heading-3">Acne Clear Treatment</a></li>
              <li class="ftco-heading-3">Bright Glow Skin Booster</a></li>
              <li class="ftco-heading-3">Korean Glow Laser</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Quick</h2>
            <ul class="list-unstyled">
              <li class="ftco-heading-3"><a href="">Home</a></li>
              <li class="ftco-heading-3"><a href="">Treatments</a></li>
              <li class="ftco-heading-3"><a href="">Doctor</a></li>
              <li class="ftco-heading-3"><a href="">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><a href="https://www.google.com/maps/place/No+Jl.+Soekarno+Hatta+No.32,+Jatimulyo,+Kec.+Lowokwaru,+Kota+Malang,+Jawa+Timur+65141/@-7.944854,112.6172683,17z/data=!3m1!4b1!4m5!3m4!1s0x2e78827585d057ad:0x2a203682bd43f108!8m2!3d-7.944854!4d112.619457"><span class="icon icon-map-marker"></span><span class="text">Jl. Sukarno Hatta No 32, Malang
                </span></li>
                <li><a href="https://web.whatsapp.com"><span class="icon icon-phone"></span><span class="text">081375685166
                </span></a></li>
                <li><a href="https://myaccount.google.com/?utm_source=sign_in_no_continue"><span class="icon icon-envelope"></span><span class="text">modav@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p class="mb-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());

            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Modav</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
<!-- Footer Section End -->
@endsection
