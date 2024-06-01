@extends('layouts.user')
@section('content')
    <!-- Awal Jumbotron -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Ekstrakulikuler /</span> Daftar</h4>
                        <div class="app-academy">
                            <div class="card p-0 mb-4">
                                <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                                    <div class="section">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div>
                                                        <h6>EKSTRAKULIKULER SMK ASSALAM BANDUNG</h6>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <h2>Lihat daftar ekstrakulikuler yang ada disini.</h2>
                                                </div>
                                                <p>
                                                    Kegiatan ekstrakurikuler menjembatani kebutuhan perkembangan peserta
                                                    didik yang berbeda seperti
                                                    perbedaan sense akan nilai moral dan sikap, kemampuan dan
                                                    kreativitas.
                                                    Melalui partipasinya dalam kegiatan ekstrakurikuler peserta didik
                                                    dapat belajar dan
                                                    mengembangkan kemampuan berkomunikasi, bekerja sama dengan orang
                                                    lain, serta menemukan dan
                                                    mengembangkan potensinya.
                                                    Kegiatan ekstrakurikuler juga memberikan manfaat sosial yang besar.
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

    <div class="col">
        <img class="futsal"
            src="{{ asset('admin/img/png-clipart-football-player-graphy-others-photography-sports-equipment-removebg-preview.png') }}"
            alt="">
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Awal Home -->
    <div class="section" id="bg-color">
        <div class="container">
            {{-- ROW 1 --}}
            {{-- /ROW 1 --}}
            {{-- ROW 2 --}}
            <div class="row">
                @foreach ($eskul as $data)
                    <div class="col-4 mt-5 ">
                        <div class="card" id="eskul">
                            <img src="{{ asset('images/eskul/' . $data->sampul) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->nama_eskul }}</h5>
                                <p class="card-text">{{ $data->isi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- /ROW 2 --}}
            </div>
        </div>
        <br>
        <!-- Akhir Home -->
    @endsection
