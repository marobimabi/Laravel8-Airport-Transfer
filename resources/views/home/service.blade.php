@extends('layouts.home')

@section('title','Services' .$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">SERVİCE</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('homepage')}}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Service</h6>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-10 text-center">
        {{ $setting->service }}
    </div>
</div>
<!-- Page Header Start -->
@endsection
