<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{ asset('source/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('source/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('source/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{ asset('source/css/price-range.css')}}" rel="stylesheet">
    <link href="{{ asset('source/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('source/css/main.css')}}" rel="stylesheet">
    <link href="{{ asset('source/css/responsive.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ asset('source/js/html5shiv.js')}}"></script>
    <script src="{{ asset('source/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

@include('layouts.header')
@yield('slider')
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


<script src="{{ asset('source/js/jquery.js')}}"></script>
<script src="{{ asset('source/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('source/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{ asset('source/js/price-range.js')}}"></script>
<script src="{{ asset('source/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{ asset('source/js/main.js')}}"></script>
</body>
</html>