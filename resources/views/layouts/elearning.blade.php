<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="/public/admin-template/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/public/images/favicon.ico" />

    <!-- Page CSS -->
    @stack('start-style')
    @include('includes.elearning.styles')
    @stack('end-style')

    <!-- Helpers -->
    <script src="{{ asset('/public/admin-template/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/public/admin-template/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('includes.elearning.sidenav')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- alert -->
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Im sorry :)</h6>
                    <p class="mb-0">This page is under development. So you will probably seeing the unfinish or trash
                        content. </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>

                <!-- Navbar -->

                @include('includes.elearning.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    @yield('content')
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('includes.elearning.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle" style="z-index: 99"></div>
    </div>
    <!-- / Layout wrapper -->

    @stack('start-script')
    @include('includes.elearning.scripts')
    @stack('end-script')

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
