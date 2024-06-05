    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25"><a href="index.html">SMK Assalaam Bandung</a></div>
                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block m-0 p-1">
                                <li><a href="#home-section" class="nav-link">Beranda</a></li>
                                <li><a href="#courses-section" class="nav-link">Artikel</a></li>
                                <li><a href="#programs-section" class="nav-link">Jurusan</a></li>
                                <li><a href="#teachers-section" class="nav-link">Guru</a></li>
                                <li><a href="{{route('eskul')}}" class="nav-link">Ekstrakulikuler</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            @auth
                            <ul
                                class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                <li class="cta"><a href="{{route('home')}}" class="nav-link"><span>Dashboard</span></a></li>
                            </ul>
                            @endauth
                        </nav>
                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>
        </header>
        
    </div>