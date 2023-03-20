<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" id="css-main" href="/assets/css/codebase.min.css" />
    <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/chat.css">

    <style>
        .dar {
            display: none;
        }

        .dash-card-link {
            width: 200px;
            border-radius: 6%;
        }

        .dash-card {
            width: 350px;
            height: 250px;
            border-radius: 5%;
            background-color: #fff !important;
            color: black;
            box-shadow: 3px 1px 4px 3px #cccbca;
        }

        .dash-card-p {
            height: 100px;
            text-align: center;
        }

        .dash-card p {
            font-size: large;
        }
    </style>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <!-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif -->

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

    <!-- Codebase Core JS -->

    <script>
        document.getElementById("region").addEventListener('change', doSomething);

        function doSomething() {
            var reg = document.getElementById('region').value;
            var elems = document.getElementsByClassName('dar');
            if (reg == 1) {
                for (var i = 0; i < elems.length; i += 1) {
                    elems[i].style.display = 'block';
                }
                var regions = ['mwz', 'ara', 'mor', 'dom'];
                for (var i in regions)
                    document.getElementById(regions[i]).style.display = 'none';
            }

            if (reg == 2) {
                document.getElementById('mwz').style.display = 'block';

                for (var i = 0; i < elems.length; i += 1) {
                    elems[i].style.display = 'none';
                }

                var regions = ['ara', 'mor', 'dom'];
                for (var i in regions)
                    document.getElementById(regions[i]).style.display = 'none';
            }

            if (reg == 3) {
                document.getElementById('ara').style.display = 'block';

                for (var i = 0; i < elems.length; i += 1) {
                    elems[i].style.display = 'none';
                }

                var regions = ['mwz', 'mor', 'dom'];
                for (var i in regions)
                    document.getElementById(regions[i]).style.display = 'none';
            }

            if (reg == 4) {
                document.getElementById('mor').style.display = 'block';

                for (var i = 0; i < elems.length; i += 1) {
                    elems[i].style.display = 'none';
                }

                var regions = ['ara', 'mwz', 'dom'];
                for (var i in regions)
                    document.getElementById(regions[i]).style.display = 'none';
            }

            if (reg == 5) {
                document.getElementById('dom').style.display = 'block';

                for (var i = 0; i < elems.length; i += 1) {
                    elems[i].style.display = 'none';
                }

                var regions = ['ara', 'mor', 'mwz'];
                for (var i in regions)
                    document.getElementById(regions[i]).style.display = 'none';
            }

        }
    </script>

    <script src="{{ url('assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/core/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ url('assets/js/core/jquery.scrollLock.min.js') }}"></script>
    <script src="{{ url('assets/js/core/jquery.appear.min.js') }}"></script>
    <script src="{{ url('assets/js/core/jquery.countTo.min.js') }}"></script>
    <script src="{{ url('assets/js/core/js.cookie.min.js') }}"></script>
    <script src="{{ url('assets/js/codebase.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ url('assets/js/plugins/chartjs/Chart.bundle.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ url('assets/js/pages/be_pages_dashboard.js') }}"></script>

</body>

</html>