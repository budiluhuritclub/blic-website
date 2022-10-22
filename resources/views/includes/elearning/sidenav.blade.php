<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="z-index: 100">
    <div class="app-brand demo">
        <a href="{{ route('dashboard-elearning') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('/public/images/JARINGAN1.png') }}" alt="" width="40px">
            </span>
            <span class="app-brand-text menu-text fw-bolder ms-2">Budiluhur IT Club</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('elearning/dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard-elearning') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Modul</span>
        </li>

        <!-- Modul -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Modul</div>
            </a>
        </li>

        <!-- Roadmaps -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
                <i class="menu-icon tf-icons bx bx-stats"></i>
                <div data-i18n="Basic">Roadmaps</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">E-Class</span>
        </li>

        <!-- Training -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-book-alt"></i>
                <div data-i18n="Basic">Training</div>
            </a>
        </li>

        <!-- Learning -->
        <li class="menu-item">
            <a href="javascript;;" class="menu-link">
                <i class="menu-icon tf-icons bx bx-library"></i>
                <div data-i18n="Basic">Learning</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Showcase</span>
        </li>

        <!-- Project -->
        <li class="menu-item {{ request()->is('elearning/project*') ? 'active' : '' }}">
            <a href="{{ route('project.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Basic">Project</div>
            </a>
        </li>

        <!-- Sertifikat -->
        <li class="menu-item">
            <a href="javascript;;" class="menu-link">
                <i class="menu-icon tf-icons bx bx-award"></i>
                <div data-i18n="Basic">Sertificate</div>
            </a>
        </li>
    </ul>
</aside>
