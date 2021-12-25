<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('title')" name="keywords">
    <meta content="@yield('title')" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets')}}/home/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets')}}/home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/home/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets')}}/home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets')}}/home/css/style.css" rel="stylesheet">
    @yield('css')
    @yield('headjs')
</head>

<body>
@include('home._topMenu')
@include('home._slider')

@yield('content')

@include('home._footer')
@yield('footerjs')

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets')}}/home/lib/easing/easing.min.js"></script>
<script src="{{ asset('assets')}}/home/lib/waypoints/waypoints.min.js"></script>
<script src="{{ asset('assets')}}/home/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{ asset('assets')}}/home/lib/tempusdominus/js/moment.min.js"></script>
<script src="{{ asset('assets')}}/home/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="{{ asset('assets')}}/home/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets')}}/home/js/main.js"></script>
</body>

</html>
