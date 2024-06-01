@extends('layouts.user')
@section('content')
    <!-- Awal Jumbotron -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Jurusan /</span> Daftar</h4>
                        <div class="app-academy">
                            <div class="card p-0 mb-4">
                                <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                                    <div class="container">
                                        <div id="back">
                                            <div class="row">
                                                <div class="col">
                                                    <div id="text1">
                                                        <div>
                                                            <h1 class="kami">Jurusan-jurusan di SMK Assalaam Bandung</h1>
                                                        </div>
                                                        <p class="p">SMK Assalaam memiliki 3 Jurusan yaitu :</p>
                                                        <p class="p">
                                                            <li class="p">Teknik Kendaraan Ringan Otomotif (TKRO)</li>
                                                            <li class="p">Rekayasa Perangkat Lunak (RPL)</li>
                                                            <li class="p">Teknik Bisnis Sepeda Motor (TBSM)</li>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-image">
        <img src="{{ asset('admin/img/IMG_6091.png') }}" width="100%" alt="">
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Awal Home -->

    {{-- /ROW 1 --}}
    {{-- ROW 2 --}}
    <div class="section">
        <div class="container">
            <div class="row mt-5">
                <h2>Jurusan SMK Assalaam Bandung</h2>
            </div>
            <div class="row">
                @foreach ($jurusan as $data)
                    <div class="col-4 mt-5">
                        <div class="card" style="width: 14rem;">
                            <img src="{{ asset('images/jurusan/' . $data->sampul) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->nama_jurusan }}</h5>
                                <p class="card-text">Kaprog : {{ $data->kaprog }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- /ROW 2 --}}
            </div>
        </div>
    </div>
    <br>
    <!-- Akhir Home -->
@endsection
