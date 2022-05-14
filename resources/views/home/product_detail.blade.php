
<style>


    .reviews-submitted .ratting .a{

        color: black;
    }


    .reviews-submitted .ratting .b{

        color: orangered;
    }

    .product-detail .tab-content .reviews-submitted {
        position: relative;
        margin-bottom: 45px;
    }

    .product-detail .tab-content .reviews-submitted {
        position: relative;
        margin-bottom: 45px;
    }
</style>
@php
    $count=\App\Http\Controllers\HomeController::countreviews($data->id);
    $average=\App\Http\Controllers\HomeController::averagereviews($data->id);
    $average=round($average,1);
@endphp
@extends('layouts.home')
@section('title','My cars ')


@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header" style="background:linear-gradient(rgba(28, 30, 50, .9), rgba(28, 30, 50, .9)), url({{Storage::url($data->images)}});
    height: 400px;
    margin-bottom: 90px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: contain;

    ">
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
        <h1 class="display-4 text-uppercase mb-5">{{$data->title}} </h1>
        <div class="row align-items-center pb-2">
            <div class="col-lg-6 mb-4">
                <img class="img-fluid" src="{{Storage::url($data->images)}}" alt="">
            </div>
            <div class="col-lg-6 mb-4">

                    <!-- a class="btn btn-block btn-primary py-3" href="{{route('user_rezervation')}}" style="background-color:#39b54a; color: #FFFFFF">Reserve Now</a -->
                 @php
                 $avgrev = \App\Http\Controllers\HomeController::averagereviews($data->id);
                 $contreview = \App\Http\Controllers\HomeController::countreviews($data->id);

                 @endphp
                <h4 class="mb-2">${{$data->base_price}}/Km</h4>
                <div class="d-flex mb-3">
                    <h6 class="mr-2">Rating:</h6>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="@if($average>=1) fa fa-star text-warning mr-1 @elseif($average<1 &&$average>0) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                        <small class="@if($average>=2) fa fa-star text-warning mr-1 @elseif($average<2 &&$average>1) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                        <small class="@if($average>=3) fa fa-star text-warning mr-1 @elseif($average<3 &&$average>2) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                        <small class="@if($average>=4) fa fa-star text-warning mr-1 @elseif($average<4 &&$average>3) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                        <small class="@if($average>=5) fa fa-star text-warning mr-1 @elseif($average<5 &&$average>4) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                        <small>({{$contreview}})</small>
                    </div>
                </div>
                <p>{!! $data->detail !!}</p>
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
<div class="container-fluid pt-5">
    <div class="container pt-5 pb-3">
<div class="row product-detail-bottom">
    <div class="col-lg-12">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
            </li>

            <li class="nav-item" id="addreviews">
                <a class="nav-link" data-toggle="pill" href="#reviews">Reviews ({{$count}})</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="description" class="container tab-pane active">

                {{$data->description}}

            </div>

            <div id="reviews" class="container tab-pane fade">
                <div class="row">

                    <div class="col-md-6">
                        @foreach($reviews as $rs)
                            <div class="reviews-submitted">
                                <div class="reviewer">{{$rs->user->name}}- <span>{{$rs->created_at}}</span></div>
                                <div class="ratting">
                                    <i class="fa fa-star @if($rs->rate<1) a @else b @endif"></i>
                                    <i class="fa fa-star @if($rs->rate<2) a @else b @endif"></i>
                                    <i class="fa fa-star @if($rs->rate<3) a @else b @endif"></i>
                                    <i class="fa fa-star @if($rs->rate<4) a @else b @endif"></i>
                                    <i class="fa fa-star @if($rs->rate<5) a @else b @endif"></i>
                                </div>
                                <div class="reviewer"><span>{{$rs->subject}}</span> <br> </div>
                                <span>{{$rs->comment}}</span>

                            </div> <br>
                        @endforeach
                            <span>{{ $reviews->links("pagination::bootstrap-4") }}</span>
                    </div>

                    <div class="col-md-6">
                        <div class="reviews-submit">
                            <h4>Give your Review:</h4>
                            @livewire('review',['id'=>$data->id])

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<br>
<br>

<!-- Car Booking Start -->
<form action="{{route('user_rezervation_store',['id'=>$data->id])}}"    method="post" enctype="multipart/form-data" >
@csrf
<div class="container-fluid pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-4">Booking Detail</h2>
                    <div class="row">
                        <div class="col-6 form-group">
                            <select name="from_location_id"  class="custom-select px-4" style="height: 50px;">
                                <option>Pickup Location</option>
                                @foreach($location as  $rs)
                                <option  value="{{$rs->id}}">{{$rs->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <select name="to_location_id" class="custom-select px-4" style="height: 50px;">
                                <option >Drop Location</option>
                                @foreach($location as $rs)

                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group">
                            <div class="date" id="date3" data-target-input="nearest">
                                <input type="text" name="flightdate" class="form-control p-4 datetimepicker-input" placeholder="Flight Date"
                                       data-target="#date3" data-toggle="datetimepicker" />
                            </div>
                        </div>
                        <div class="col-6 form-group">
                            <div class="time" id="time3" data-target-input="nearest">
                                <input type="text" name="flightime" class="form-control p-4 datetimepicker-input" placeholder="Flight Time"
                                       data-target="#time3" data-toggle="datetimepicker" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <div class="date" id="date2" data-target-input="nearest">
                                <input type="text" name="airline" class="form-control p-4 datetimepicker-input" placeholder="Airline"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 form-group">
                            <div class="date" id="date2" data-target-input="nearest">
                                <input type="number" name="flightnumber" min="0" class="form-control p-4 datetimepicker-input" placeholder="Flight Number"
                                />
                            </div>
                        </div>


                        <div class="col-6 form-group">
                            <div class="time" id="time2" data-target-input="nearest">
                                <input type="text" name="pickuptime" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                                       data-target="#time2" data-toggle="datetimepicker" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control py-3 px-4" name="note" rows="3" placeholder="Special Request"></textarea>
                    </div>

                        <button class="btn btn-block btn-primary py-3">Achieve Your Rezervation </button>


            </div>
        </div>
    </div>
</div>
</form>
<!-- Car Booking End -->


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
</div>
<!-- Related Car End -->

@endsection
