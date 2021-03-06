@extends('layouts.home')

@section('title','User Profile')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">USER PROFİLE</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('homepage')}}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">User Profile</h6>
    </div>
</div>
<!-- user profile -->

<div class="container-fluid pt-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-3 mb-5">

            @include('home.usermenu')
            </div>
            <div class="col-lg-9 mb-5">
      @include('profile.show')
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->
@endsection
