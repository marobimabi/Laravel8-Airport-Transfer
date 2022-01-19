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
    $count=\App\Http\Controllers\HomeController::countreviews($data->transfer->id);
    $average=\App\Http\Controllers\HomeController::averagereviews($data->transfer->id);
    $average=round($average,1);
@endphp
@extends('layouts.home')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Car Detail</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('homepage')}}">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->transfer->title) }}</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Detail Start -->
    <div class="container-fluid ">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase mb-5">{{$data->transfer->title}} </h1>
            <div class="row align-items-center pb-2">
                <div class="col-lg-6 mb-4">
                    <img class="img-fluid" src="{{Storage::url($data->transfer->images)}}" alt="">
                </div>
                <div class="col-lg-6 mb-4">

                <!-- a class="btn btn-block btn-primary py-3" href="{{route('user_rezervation')}}" style="background-color:#39b54a; color: #FFFFFF">Reserve Now</a -->
                    @php
                        $avgrev = \App\Http\Controllers\HomeController::averagereviews($data->transfer->id);
                        $contreview = \App\Http\Controllers\HomeController::countreviews($data->transfer->id);

                    @endphp

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
                    <h4 class="mb-2">${{$data->transfer->base_price}}/Km</h4>
                    <h6 class="mb-2"> Total Km : {{$result}}</h6>

                    <div class="d-flex pt-1">
                        <!-- Car Booking Start -->
                        @php
                            $total_price = $result * $data->transfer->base_price;
                        @endphp
                        <form action="{{route('user_rezervation_update',['id'=>$data->id])}}"    method="post" enctype="multipart/form-data" >
                            @csrf

                                <h6 class="mb-2">Price: ${{$total_price}}</h6>


                            <div class="row">

                                <div class="col-4 form-group">
                                    <div >
                                        <input readonly type="text" name="price" value="{{$total_price}}" style="width: 150px" />
                                    </div>
                                </div>
                                <div class="col-6 form-group">
                                    <div >
                                        <input type="submit" value="Save" class="col-6  btn-primary " style="width: 150px">
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

