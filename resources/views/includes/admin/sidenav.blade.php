<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ url('/public/images/JARINGAN1.png') }}" alt="" width="40px">
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
        <li class="menu-item active">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Data center</span>
        </li>

        <!-- Cards -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Materi</div>
            </a>
        </li>

        <!-- Roadmaps -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
                <i class="menu-icon tf-icons bx bx-stats"></i>
                <div data-i18n="Basic">Roadmaps</div>
            </a>
        </li>

        <!-- Members -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Basic">Members</div>
            </a>
        </li>

        <div class="divider">
            <div class="divider-text">Open recruitment</div>
        </div>

        <!-- Members -->
        <li class="menu-item">
            <a href="{{ route('applicant') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Basic">Applicant</div>
            </a>
        </li>

        <!-- Event -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Events</span></li>

        <!-- Devcamp -->
        <li class="menu-item">
            <a href="{{ route('devcamp.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-news"></i>
                <div data-i18n="Basic">Devcamp</div>
            </a>
        </li>

        <!-- Technofest -->
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-invader"></i>
                <div data-i18n="Basic">Technofest</div>
            </a>
        </li>

        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Account center</span></li>

        <!-- Accounts -->
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Basic">Accounts</div>
            </a>
        </li>
    </ul>
</aside>
