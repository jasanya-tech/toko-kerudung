@extends('layout.main')

@section('container')
    <div class="content text-black">
        <div class="container h-100">
            <div class="row row-cols-1 row-cols-sm-2 m-0 p-0 h-100 align-items-center">
                <div class="col">
                    <div class="col-left w-60">
                        <h1 class="mb-4 fw-semibold">Pilih Hijab Sesuai Kebutuhan</h1>
                        <h4>Tersedia Berbagai Macam Hijab Menarik Yang Bisa Anda Dapatkan Disini</h4>
                        <a href="produk.html" class="btn btn-primary btn-buy mt-4 w-60">Beli Sekarang</a>
                    </div>
                </div>
                <div class="col col-left">
                    <img src="{{ asset('') }}images/hijab.png" />
                </div>
            </div>
        </div>
    </div>
    <div class="why-us">
        <div class="container h-100">
            <div class="container">
                <div class="row row-cols-2 justify-content-center">
                    <div class="col col-md-8 p-3">
                        <h3><b>PRODUK TERLARIS</b></h3>
                    </div>
                    <div class="teks-show col col-6 col-md-4 p-3 align-content-end">
                        <a href="produk.html">Show All <img src="{{ asset('') }}icon/arrow.png"> </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col item-product align-content-end text-center">
                        <img src="{{ asset('') }}images/pashmina_kaos.jpg">
                    </div>
                    <div class="col item-product text-center">
                        <img src="{{ asset('') }}images/pashmina_plisket.jpg">
                    </div>
                    <div class="col item-product text-center">
                        <img src="{{ asset('') }}images/bergo_sport.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
