@extends('layout.main')

@section('container')
    <div class="content">
        <div class="container container-grid">
            <div class="row row-cols-2">
                @foreach ($products as $product)
                    <div class="col card-item">
                        <div class="card" style="width: 15rem;">
                            <img src="/images/{{ $product->image }}" class="card-img-top" alt="Hijab Shop">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ GlobalHelper::formatRupiah($product->price) }}</p>
                                <a class="btn btn-primary" target="_blank"
                                    href="https://wa.me/6288217661534?text=Hallo%20saya%20ingin%20pesan%20kerudung%20{{ $product->name }}%20dengan%20harga%20{{ GlobalHelper::formatRupiah($product->price) }}">Beli
                                    Sekarang</a>
                                <a href="#" class="btn btn-keranjang">Tambahkan Keranjang</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
