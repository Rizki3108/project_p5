@extends('layouts.user')
@section('content')
    <!-- Awal Jumbotron -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Struktural /</span> Daftar</h4>
                        <div class="app-academy">
                            <div class="card p-0 mb-4">
                                <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                                    <div class="container">
                                        <div id="back">
                                            <div class="row text">
                                                <div class="col">
                                                    <div id="text1">
                                                        <br>
                                                        <h1 class="kami">Visi & Misi</h1>
                                                        <br>
                                                        <p class="p">Visi : Menjadikan SMK Assalaam sebagai sekolah
                                                            IDAMAN</p>
                                                        <p class="p">Misi :</p>
                                                        <p class="p">
                                                            <li class="p">Intelek dalam melaksanakan proses
                                                                pembelajaran</li>
                                                            <li class="p">Disiplin dalam segala aspek kehidupan</li>
                                                            <li class="p">Amanah dalam melaksanakan tugas</li>
                                                            <li class="p">Maju dan menang untuk kepentingan bersama
                                                            </li>
                                                            <li class="p">Aktif dalam merespon perkembangan</li>
                                                            <li class="p">Norma islam sebagai landasan dalam
                                                                beraktifitas</li>
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
    <!-- Akhir Jumbotron -->

    <!-- Awal Home -->

    {{-- /ROW 1 --}}
    {{-- ROW 2 --}}
    <div class="section">
        <div class="container">
            {{-- ROW 1 --}}
            <div class="row mt-5 justify-content-center">
                <h2>Struktural</h2>
            </div>
            {{-- /ROW 1 --}}
            {{-- ROW 2 --}}
            <div class="row">
                @foreach ($struktural as $data)
                    <div class="guru-card">
                        <div class="col-md-2"><img src="{{ asset('images/struktural/' . $data->sampul) }}" width="80%">
                        </div>
                        <div class="guru-info">
                            <h4 class="card-title guru-name">{{ $data->guru->nama_guru }}
                            </h4>
                            <p class="card-text guru-name">
                                {{ $data->jabatan->jabatan }}</p>
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
