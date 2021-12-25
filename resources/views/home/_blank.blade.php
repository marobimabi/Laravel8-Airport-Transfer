@extends('layouts.home')

@section('title',$data->title .'Product List')
@section('description'){{$data->description}}@endsection
@section('keywords',$data->keywords)

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">About</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('home')}}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">User Profile</h6>
    </div>
</div>
<!-- Page Header Start -->
@endsection
