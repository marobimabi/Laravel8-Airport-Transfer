@extends('layouts.home')



@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">Car Detail</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('homepage')}}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Car Detail</h6>
    </div>
</div>
<!-- Page Header Start -->

<!-- Detail Start -->
<div class="container-fluid pt-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase mb-5">Mercedes Benz R3</h1>
        <div class="row align-items-center pb-2">
            <div class="col-lg-6 mb-4">
                <img class="img-fluid" src="img/bg-banner.jpg" alt="">
            </div>
            <div class="col-lg-6 mb-4">
                <h4 class="mb-2">$99.00/Day</h4>
                <div class="d-flex mb-3">
                    <h6 class="mr-2">Rating:</h6>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star-half-alt text-primary mr-1"></small>
                        <small>(250)</small>
                    </div>
                </div>
                <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt</p>
                <div class="d-flex pt-1">
                    <h6>Share on:</h6>
                    <div class="d-inline-flex">
                        <a class="px-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="px-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="px-2" href=""><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-n3 mt-lg-0 pb-4">
            <div class="col-md-3 col-6 mb-2">
                <i class="fa fa-car text-primary mr-2"></i>
                <span>Model: 2020</span>
            </div>
            <div class="col-md-3 col-6 mb-2">
                <i class="fa fa-cogs text-primary mr-2"></i>
                <span>Automatic</span>
            </div>
            <div class="col-md-3 col-6 mb-2">
                <i class="fa fa-road text-primary mr-2"></i>
                <span>20km/liter</span>
            </div>
            <div class="col-md-3 col-6 mb-2">
                <i class="fa fa-eye text-primary mr-2"></i>
                <span>GPS Navigation</span>
            </div>
        </div>
    </div>
</div>
<!-- Detail End -->

@endsection
