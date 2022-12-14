<!--
Note:

ini layouts untuk onepage welcome
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/public/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('/public/images/favicon.png') }}">
    <title>
        @yield('title')
    </title>
    @include('includes.admin.styles')
    @include('includes.styles')
</head>

<body class="g-sidenav-show bg-gray-100" onload="preLoader()">

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <div class="min-height-300 bg-primary-dark position-absolute w-100"></div>
    <main class="main-content position-relative border-radius-lg ">
        <div class="container-fluid py-4">

            <!-- start the content from here  -->
            <main>
                @yield('content')
            </main>
            <!-- end the content here -->
        </div>
    </main>
    @include('includes.admin.scripts')
    <script>
        var preloader = document.getElementById("preloader");

        function preLoader() {
            preloader.style.display = 'none';
        };

        setInterval(function() {
            preLoader();
        }, 3000)
    </script>
</body>

</html>
