@php
        $setting= \App\Http\Controllers\HomeController::getsetting();
@endphp
<!-- Footer Start -->
<div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>{{$setting->address}}</p>
            <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>{{$setting->phone}}</p>
            <p><i class="fa fa-envelope text-white mr-3"></i>{{$setting->email}}</p>
            <h6 class="text-uppercase text-white py-2">Follow Us</h6>
            <div class="d-flex justify-content-start">
                @if($setting->twitter!=null) <a  class="btn btn-lg btn-dark btn-lg-square mr-2" href="{{$setting->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>@endif
                    @if($setting->facebook!=null) <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>@endif
                    @if($setting->ınstagram!=null)<a class="btn btn-lg btn-dark btn-lg-square" href="{{$setting->ınstagram}}" target="_blank"><i class="fab fa-instagram"></i></a>@endif
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">

                <a class="text-body mb-2" href="{{route('homepage')}}"><i class="fa fa-angle-right text-white mr-2"></i>Home</a>
                <a class="text-body mb-2" href="{{route('homepage')}}"><i class="fa fa-angle-right text-white mr-2"></i>About Us</a>
                <a class="text-body mb-2" href="{{route('homepage')}}"><i class="fa fa-angle-right text-white mr-2"></i>References</a>
                <a class="text-body mb-2" href="{{route('homepage')}}"><i class="fa fa-angle-right text-white mr-2"></i>Contact</a>
                <a class="text-body" href="{{route('homepage')}}"><i class="fa fa-angle-right text-white mr-2"></i>FQAs</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
            <div class="row mx-n1">
                @foreach($gallery as $rs)
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="{{ Storage::url($rs->images) }}" alt=""></a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
            <p class="mb-4">Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
            <div class="w-100 mb-3">
                <div class="input-group">
                    <input type="text" class="form-control bg-dark border-dark" style="padding: 25px;" placeholder="Your Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary text-uppercase px-3">Sign Up</button>
                    </div>
                </div>
            </div>
            <i>Lorem sit sed elitr sed kasd et</i>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
    <p class="mb-2 text-center text-body">&copy; <a href="#">{{$setting->title}}</a>. All Rights Reserved.</p>
    <p class="m-0 text-center text-body">Designed by <a href="https://htmlcodex.com">{{$setting->title}}</a></p>
</div>
<!-- Footer End -->
