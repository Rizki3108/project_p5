@extends('layouts.user')
@section('content')
    <!-- Awal Jumbotron -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Guru /</span> Daftar</h4>
                        <div class="app-academy">
                            <div class="card p-0 mb-4">
                                <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                                    <div class="container">
                                        <div class="row">
                                            <h2>Daftar Guru SMK Assalaam Bandung</h2>
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

    <!-- Awal Home -->
    <div class="section" id="bg-color">
        <div class="container">
            {{-- ROW 1 --}}
            {{-- /ROW 1 --}}
            {{-- ROW 2 --}}
            <div class="row">
                @foreach ($guru as $data)
                    <div class="col-4 mt-5 ">
                        <div class="card" id="eskul">
                            <img src="{{ asset('images/guru/' . $data->sampul) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->nama_guru }}</h5>
                                <p class="card-text">{{ $data->email }}</p>
                                <p class="card-text">{{ $data->mapel->mapel }}</p>
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
