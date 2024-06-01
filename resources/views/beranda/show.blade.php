@extends('layouts.user')
@section('content')
    <!-- Awal Home -->
    <div class="section">
        <div class="container">
            {{-- ROW 1 --}}
            <div class="row mt-5 justify-content-center">
                <h2>Detail Artikel</h2>
            </div>
            {{-- /ROW 1 --}}
            {{-- ROW 2 --}}
            <div class="row">
                <div class="col-4 mt-5">
                    <div class="card bg-secondary text-light" style="width: 18rem;">
                        <img src="{{ asset('images/artikel/' . $artikel->sampul) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $artikel->judul }}</h5>
                            <p class="text-light">{{ $artikel->isi }}</p>
                            {{-- <p class="card-text">Jumlah : {{ $data->jumlah }}</p>
                                <p class="card-text">Tanggal Produk : {{ $data->tanggal_produksi }}</p>
                                <p class="card-text">Merek : {{ $data -> merek -> nama_merek }}</p> --}}
                            <a href="{{ route('beranda') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
                {{-- /ROW 2 --}}
            </div>
        </div>
        <br>
        <!-- Akhir Home -->
@endsection