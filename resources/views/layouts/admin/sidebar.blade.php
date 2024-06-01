<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <span class="app-brand-text demo menu-text fw-bold ms-2">Admin</span>
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item active open">
            <a href="{{ route('home') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboard</div>
            </a>

        

        <li class="menu-item  open">
            <a href="{{ route('welcome') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Home</div>
            </a>

        <li class="menu-item  open">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Dashboards">Layouts</div>
            </a>


            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('mapel.index') }}" class="menu-link">
                        <div data-i18n="Mapel">Mata Pelajaran</div>
                        {{-- <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div> --}}
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('guru.index') }}" class="menu-link">
                        <div data-i18n="Mapel">Guru</div>
                        {{-- <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div> --}}
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('jabatan.index') }}" class="menu-link">
                        <div data-i18n="Mapel">Jabatan</div>
                        {{-- <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div> --}}
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('struktural.index') }}" class="menu-link">
                        <div data-i18n="Mapel">Struktural</div>
                        {{-- <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div> --}}
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('artikel.index') }}" class="menu-link">
                        <div data-i18n="Mapel">Artikel</div>
                        {{-- <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div> --}}
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('jurusan.index') }}" class="menu-link">
                        <div data-i18n="Mapel">Jurusan</div>
                        {{-- <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div> --}}
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('eskul.index') }}" class="menu-link">
                        <div data-i18n="Mapel">Ekstrakulikuler</div>
                        {{-- <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div> --}}
                    </a>
                </li>
                {{-- <li class="menu-item active">
                    <a href="index.html" class="menu-link">
                        <div data-i18n="Analytics">Analytics</div>
                    </a>
                </li> --}}
                {{-- <li class="menu-item">
                    <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html"
                        target="_blank" class="menu-link">
                        <div data-i18n="eCommerce">eCommerce</div>
                        <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                    </a>
                </li> --}}
                {{-- <li class="menu-item">
                    <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-logistics-dashboard.html"
                        target="_blank" class="menu-link">
                        <div data-i18n="Logistics">Logistics</div>
                        <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                    </a>
                </li> --}}
                {{-- <li class="menu-item">
                    <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-academy-dashboard.html"
                        target="_blank" class="menu-link">
                        <div data-i18n="Academy">Academy</div>
                        <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                    </a>
                </li> --}}
            </ul>
        </li>

        <!-- Components -->
        {{-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li> --}}
        <!-- Forms & Tables -->
        {{-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li> --}}
    </ul>
</aside>
