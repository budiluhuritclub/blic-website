<!--
Note:

ini layouts untuk halaman admin, manage semua content untuk user
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/public/template/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ url('/public/template/assets/img/favicon.png') }}">
    <title>
        @yield('title')
    </title>
    @include('includes.admin.styles')
    @include('includes.styles')

</head>

<body class="g-sidenav-show bg-gray-100">
    <main class="main-content position-relative border-radius-lg ">
        <div class="container-fluid py-4">

            <!-- start the content from here  -->
            @yield('content')
            <!-- end the content here -->
        </div>
    </main>
</body>

</html>
