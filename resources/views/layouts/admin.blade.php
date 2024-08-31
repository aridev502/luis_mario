<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/styles/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/styles/style.css')}}">

    <script src="{{asset('plugins/fontawesome/key.js')}}"></script>

    <style>
        .image {
            animation-duration: 10s;
            animation-name: slidein;
        }

        @keyframes slidein {
            from {
                margin-left: 0%;

            }

            to {
                margin-left: 100%;

            }
        }
    </style>

    @yield('styles')
</head>

<body>
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo"><img src="{{asset('logos/main.png')}}" class="image" style="width: 50%;" alt=""></div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div>

    @include('partial.admin.header')

    @include('partial.admin.navbar')

    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">


            @yield('content')


            @include('partial.admin.footeer')
        </div>
    </div>
    <!-- js -->
    <script src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('theme/scripts/core.js')}}"></script>
    <script src="{{asset('theme/scripts/script.min.js')}}"></script>
    <script src="{{asset('theme/scripts/process.js')}}"></script>
    <script src="{{asset('theme/scripts/layout-settings.js')}}"></script>
    <script src="{{asset('theme/scripts/dashboard2.js')}}"></script>

    @yield('scripts')
</body>

</html>