<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets')}}/images/favicon.ico" type="image/ico" />

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('assets')}}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets')}}/css/custom.min.css" rel="stylesheet">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #cfd2d6;
            color: white;
            text-align: center;
        }
    </style>
    @yield('css')
    @yield('javascript')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{route('admin_home')}}" class="site_title"><i class="fa fa-paw"></i> <span>Marobi</span></a>
                </div>

                <div class="clearfix"></div>
                @include('admin._sideMenu')

            </div>
        </div>
        @include('admin._topMenu')
        @yield('content')
        @include('admin._footer')
        @yield('footer')
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('assets')}}/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets')}}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('assets')}}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{ asset('assets')}}/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="{{ asset('assets')}}/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="{{ asset('assets')}}/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('assets')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="{{ asset('assets')}}/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="{{ asset('assets')}}/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="{{ asset('assets')}}/vendors/Flot/jquery.flot.js"></script>
<script src="{{ asset('assets')}}/vendors/Flot/jquery.flot.pie.js"></script>
<script src="{{ asset('assets')}}/vendors/Flot/jquery.flot.time.js"></script>
<script src="{{ asset('assets')}}/vendors/Flot/jquery.flot.stack.js"></script>
<script src="{{ asset('assets')}}/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="{{ asset('assets')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="{{ asset('assets')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="{{ asset('assets')}}/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="{{ asset('assets')}}/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="{{ asset('assets')}}/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="{{ asset('assets')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="{{ asset('assets')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('assets')}}/vendors/moment/min/moment.min.js"></script>
<script src="{{ asset('assets')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('assets')}}/js/custom.min.js"></script>

</body>
</html>

