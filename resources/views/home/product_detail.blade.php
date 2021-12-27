@extends('layouts.home')



@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">Car Detail</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('homepage')}}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title) }}</h6>
    </div>
</div>
<!-- Page Header Start -->

<!-- Detail Start -->
<div class="container-fluid pt-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase mb-5">{{$data->title}}</h1>
        <div class="row align-items-center pb-2">
            <div class="col-lg-6 mb-4">
                <img class="img-fluid" src="{{Storage::url($data->images)}}" alt="">
            </div>
            <div class="col-lg-6 mb-4">
                <h4 class="mb-2">${{$data->base_price}}/Km</h4>
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
                <p>{{$data->detail}}</p>
                <div class="d-flex pt-1">
                    <h6>Share on:</h6>
                    <div class="d-inline-flex">
                        @if($setting->twitter!=null) <a  class="px-2" href="{{$setting->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>@endif
                        @if($setting->facebook!=null) <a class="px-2" href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>@endif
                        @if($setting->ınstagram!=null)<a class="px-2" href="{{$setting->ınstagram}}" target="_blank"><i class="fab fa-instagram"></i></a>@endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-n3 mt-lg-0 pb-4">
            <div class="col-md-3 col-6 mb-2">
                <i class="fa fa-car text-primary mr-2"></i>
                <span>{{$data->capacity}} Seats</span>
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

<!-- Related Car Start -->
<div class="container-fluid pb-5">
    <div class="container pb-5">
        <h2 class="mb-4">Related Cars</h2>
        <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
            @foreach($related as $rs)
            <div class="rent-item">
                <img class="img-fluid mb-4" src="{{Storage::url($rs->images)}}" alt="">
                <h4 class="text-uppercase mb-4">{{$rs->title}}</h4>
                <div class="d-flex justify-content-center mb-4">
                    <div class="px-2">
                        <i class="fa fa-car text-primary mr-1"></i>
                        <span>{{$rs->capacity}} Seat</span>
                    </div>
                    <div class="px-2 border-left border-right">
                        <i class="fa fa-cogs text-primary mr-1"></i>
                        <span>AUTO</span>
                    </div>
                    <div class="px-2">
                        <i class="fa fa-road text-primary mr-1"></i>
                        <span>25K</span>
                    </div>
                </div>
                <a class="btn btn-primary px-3" href="">${{$rs->base_price}}/Km</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Related Car End -->
@endsection
