<!-- Topbar Start -->
<div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
    <div class="row">
        <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <a class="text-body px-3" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-body px-3" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-body px-3" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-body px-3" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-body pl-3" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
        <div class="col-md-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                @auth
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                 {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"  href="{{route('myprofile')}}"><i class="fa fa-sign-out pull-right"></i> My Account</a>
                                <a class="dropdown-item"  href="{{route('_logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>

                            </div>
                        </li>
                    </ul>
                </nav>
                @endauth
                @guest()
                    <a class="text-body px-3" href="/login">  Login </a>
/
                    <a class="text-body px-3" href="/register">Register </a>
                @endguest

            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
<!--  <a class="text-body px-3" href="http://127.0.0.1:8000/register">Register </a> -->


<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="position-relative px-lg-5" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            @include('home._categoryMenu')
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{route('homepage')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('aboutus')}}" class="nav-item nav-link">About Us</a>
                    <a href="{{route('service')}}" class="nav-item nav-link">Service</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    <a href="{{route('references')}}" class="nav-item nav-link">References</a>
                    <a href="{{route('faq')}}" class="nav-item nav-link">FAQ</a>

                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


