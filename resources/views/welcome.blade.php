<!DOCTYPE html>
<html lang="en">

<head>
    <title>OneSchool &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('user/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('user/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('user/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('user/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    {{-- navbar --}}
    @include('layouts.user.navbar')
    {{-- end navbar --}}

    <div class="intro-section" id="home-section">
        <div class="slide-1" style="background-image: url('user/images/literasi.png');"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="row-lg-6 mb-4">
                                <h1 data-aos="fade-up" data-aos-delay="100">Selamat datang di website SMK Assalaam
                                    Bandung</h1>
                                <p class="mb-4" data-aos="fade-up" data-aos-delay="200">SMK Assalaam merupakan sekolah kejuruan dengan kompetensi keahlian
                                    teknik kendaraan ringan (roda empat) plus sepeda motor dalam
                                    proses pendidikan pelatihan.
                                    Peka terhadap perubahan perkembangan teknologi baru dan tuntutan kebutuhan pasar
                                    kerja, agar lulusannya siap menghadapi perubahan.
                                </p>
                                <p class="mb-4">SMK Assalaam dengan penuh kesadaran berani melakukan perubahan
                                    dengan berbagai
                                    inovasi dan improvisasi,
                                    mencari terobosan untuk meraih keberhasilan bagi peserta didiknya.
                                </p>
                                <p class="mb-4">Tekad tersebut sebagai wujud nyata dari SMK Assalaam didukung oleh
                                    sarana praktek yang lengkap UP TO DATE,
                                    waktu praktek memadai dan praktek berstandar industri dengan pelayanan prima.
                                </p>

                                <p data-aos="fade-up" data-aos-delay="300"><a href="{{ route('struktural') }}"
                                        class="btn btn-primary py-3 px-5 btn-pill">Struktural</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section courses-title" id="courses-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                    <h2 class="section-title">Artikel</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
        @foreach ($artikel as $data)
            <div class="row">
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
                            </>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>


    <div class="site-section" id="programs-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                    <h2 class="section-title">Jurusan Kami</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque!
                        Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas
                        quibusdam ullam, illum sed veniam!</p>
                </div>
            </div>
            <div class="row mb-5 align-items-center">
                @foreach ($jurusan as $data)
                    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('images/jurusan/' . $data->sampul) }}" alt="Image" class="img-fluid"
                            style="width: 65%">
                    </div>
                    <div class="col-lg-6 ml-auto" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">{{ $data->nama_jurusan }}</h2>
                        <p class="mb-4">Merupakan jurusan yang berfokus dalam bidang otomotif mobil</p>

                        <div class="d-flex align-items-center custom-icon-wrap mb-3">
                            <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
                            <div>
                                <h2>Kepala Program</h2>
                                <h3 class="m-0">{{ $data->kaprog }}</h3>
                                {{-- <h3 class="m-0">{{ $data->nama_jurusan }}</h3> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="site-section" id="teachers-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
                    <h2 class="section-title">Guru Kami</h2>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut
                        neque! Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in
                        quas quibusdam ullam, illum sed veniam!</p>
                </div>
            </div>
            <div class="row">
                @foreach ($guru as $data)
                    <div class="col-4 mt-2 " data-aos="fade-up" data-aos-delay="100">
                        <div class="card" id="eskul">
                            <img src="{{ asset('images/guru/' . $data->sampul) }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->nama_guru }}</h5>
                                <p class="card-text">{{ $data->email }}</p>
                                <p class="card-text">{{ $data->mapel->mapel }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('user/images/hero_1.jpg');">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 text-center testimony">
                    <img src="{{ asset('user/images/Kepala-Sekolah-SMK.jpg') }}" alt="Image"
                        class="img-fluid w-25 mb-4 rounded-circle">
                    <h3 class="mb-4">H.M Luthfi Almanfaluthi, S.T., M.Pd</h3>
                    <blockquote>
                        <p>&ldquo; Bapak Kepala Sekolah SMK Assalaam Bandung &rdquo;</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    @include('layouts.user.footer')
    {{-- end footer --}}

    </div> <!-- .site-wrap -->

    <script src="{{ asset('user/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('user/js/popper.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('user/js/aos.js') }}"></script>
    <script src="{{ asset('user/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.sticky.js') }}"></script>


    <script src="{{ asset('user/js/main.js') }}"></script>

</body>

</html>
