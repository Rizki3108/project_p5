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
                                    <div id="bg1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <div id="text1">
                                                        <div>
                                                            <h1 class="kami">Tentang Kami</h1>
                                                        </div>
                                                        <div>
                                                            <p class="p">SMK Assalaam merupakan sekolah kejuruan dengan
                                                                kompetensi keahlian teknik
                                                                kendaraan ringan (roda empat) plus sepeda motor dalam
                                                                proses pendidikan pelatihan.
                                                                Peka terhadap perubahan perkembangan teknologi baru dan
                                                                tuntutan kebutuhan pasar kerja, agar
                                                                lulusannya siap menghadapi perubahan.
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <p class="p">SMK Assalaam dengan penuh kesadaran berani
                                                                melakukan perubahan dengan berbagai
                                                                inovasi dan improvisasi,
                                                                mencari terobosan untuk meraih keberhasilan bagi peserta
                                                                didiknya.
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <p class="p">Tekad tersebut sebagai wujud nyata dari SMK
                                                                Assalaam didukung oleh sarana
                                                                praktek
                                                                yang lengkap UP TO DATE,
                                                                waktu praktek memadai dan praktek berstandar industri dengan
                                                                pelayanan prima.
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
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Awal Home -->
    <div class="section">
        <div class="container-xxl flex-grow-1 container-p-y">
            {{-- ROW 1 --}}
            <div class="col mt-5 justify-content-center">
                <h1>Berita & Artikel Tentang SMK Assalaam Bandung</h1>
            </div>
            {{-- /ROW 1 --}}

            {{-- ROW 2 --}}
            <div class="row">
                @foreach ($artikel as $data)
                    <div class="col-4 mt-5">
                        <div class="card-body">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('images/artikel/' . $data->sampul) }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data->judul }}</h5>
                                    <a href="{{ route('beranda.show', $data->id) }}" class="btn btn-primary">Lihat
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- /ROW 2 --}}
            </div>
        </div>
    </div>

    <div id="bg2">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div id="text2">
                    <p class="think">
                    <h4>Sekolah berkualitas dengan program pembelajaran yang berkualitas,
                        sumber daya pengajar yang berkualitas, dan sarana prasarana yang
                        lengkap dan mutakhir
                    </h4>
                    </p>
                </div>
                <div class="bg1">
                    <img src="{{ asset('admin/img/literasi.png.png') }}" class="text-center" id="crew" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Home -->
@endsection
