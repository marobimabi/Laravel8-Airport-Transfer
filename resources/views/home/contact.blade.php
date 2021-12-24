@extends('layouts.home')

@section('title','Contact' .$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">CONTACT</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('homepage')}}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Contact</h6>
    </div>
</div>
<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
          @include('home.message')
        <div class="row">
            <div class="col-lg-7 mb-2">
                <div class="contact-form bg-light mb-4" style="padding: 30px;">
                    <form action="{{route('sendmessage')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" name="name" placeholder="Your Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="email" class="form-control p-4" name="email" placeholder="Your Email" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control p-4" name="subject"  placeholder="Subject" required="required">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control py-3 px-4" name="message"  rows="5" placeholder="Message" required="required"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-2">
                <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                    {{$setting->contac}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
