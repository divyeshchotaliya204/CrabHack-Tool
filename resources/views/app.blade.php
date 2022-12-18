<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Ligalis | Legal Practice Management Software</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="og:image" content="https://wajah.ligalis.com/assets/img/ligalis_mockup1.png" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- ================== END core-css ================== -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('external-style')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-233494541-1"></script>
    {{-- <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-233494541-1');
    </script> --}}


    <style type="text/css">
        body {
            font-family: 'Lato', sans-serif;
        }

        #chart {
            max-width: 650px;
            margin: 35px auto;
        }

        #chartX {
            padding: 5px;
            max-width: 650px;
        }

        .hidden {
            display: none;
        }
    </style>
    @yield('style')

</head>

<body>
    <!-- BEGIN #app -->
    <div id="app" class="app">

        @include('_layouts.app.header')

        @include('_layouts.app.sidebar')

        @yield('content')

        <!-- BEGIN btn-scroll-top -->
        <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        <!-- END btn-scroll-top -->
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- ================== END core-js ================== -->
    @yield('external-script')
    @yield('script')
</body>

</html>
