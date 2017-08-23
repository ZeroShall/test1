<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="SHOP0317E"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ config('app.name', 'PHP0317E') }} @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/responsive.css') }}" rel="stylesheet">


    <script src="{{ asset('source/js/html5shiv.js')}}"></script>
    <script src="{{ asset('source/js/respond.min.js')}}"></script>

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
@include('layouts.header')
@yield('slider')

<section>
    <div class="container" style="margin-top: 20px;">
        @if(Session::has('error'))
            <div class="alert alert-danger">
                <p>{{ Session::get('error') }}</p>
            </div>
        @elseif(Session::has('success'))
            <div class="alert alert-success">
                <p>{{ Session::get('success') }}</p>
            </div>
        @endif
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    @yield('danhmuc')
                </div>
            </div>

            @yield('content')

        </div>
    </div>
</section>
@include('layouts.footer')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('source/js/jquery.js') }}"></script>
<script src="{{ asset('source/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('source/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('source/js/price-range.js') }}"></script>
<script src="{{ asset('source/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('source/js/main.js') }}"></script>

</body>
</html>



