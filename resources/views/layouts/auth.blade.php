<!--
Note:

ini layouts untuk halaman authentication (register dan login)
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
    <title>
        Budi Luhur Library
    </title>
    @include('includes.admin.styles')
    <link rel="stylesheet" href="{{ url('./css/preloader.css') }}">
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                @include('includes.navbar')
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        @yield('content')
    </main>
    @include('includes.admin.scripts')
</body>

</html>
