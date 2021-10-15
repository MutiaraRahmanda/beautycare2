@extends('layouts.master_customer')

@section('content')
<!-- Breadcrumb End -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <br><br>
                    <h1>Form Reservasi</h1>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb Begin -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form action="{{ route('transactions.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="no_ktp">No. KTP</label>
                                <input type="text" name="no_ktp" id="no_ktp">
                            </div>
                            <div class="col-lg-6">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
                        </div>
                        <textarea placeholder="Alamat" name="alamat"></textarea>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="no_hp">No. Telp</label>
                                <input type="text" name="no_hp" id="no_hp">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="jenis_pembayaran">Jenis Pembayaran</label>
                                <select name="jenis_pembayaran" id="jenis_pembayaran">
                                    <option value="Tunai">Tunai</option>
                                    <option value="Transfer">Transfer</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="jenis_reservasi">Jenis Reservasi</label>
                                <select name="jenis_reservasi" id="jenis_reservasi">
                                    <option value="Treatments">Treatments</option>
                                    <option value="Konsultasi">Konsultasi</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="waktu">Waktu</label>
                                <input type="time" name="waktu" id="waktu">
                            </div>
                            <div class="col-lg-6">
                                <label for="tanggal_reservasi">Tanggal Reservasi</label>
                                <input type="date" name="tanggal_reservasi" id="tanggal_reservasi">
                            </div>
                        </div>
                        {{-- <input type="hidden" name="car_id" value="{{ $car->id }}">
                        <input type="hidden" name="brand_id" value="{{ $brand->id }}"> --}}
                        {{-- <a href="{{ route('transactions.invoice', $id) }}" class="primary-btn"> --}}
                        <a href="transactions.history"><button type="submit" class="site-btn">Pesan Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection
