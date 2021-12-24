
@include('home._slider')
<!-- Carousel Start -->
<div class="container-fluid p-0" style="margin-bottom: 90px;">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        @php
            $i =1;
        @endphp
        @foreach($slider as $rs)
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ Storage::url($rs->images) }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        @php
                            $i=1;$i = $i+1;
                        @endphp
                        <div class="p-3 @if($i==2) active @endif" style="max-width: 900px;" >
                            <h4 class="text-white text-uppercase mb-md-3">{{$rs->title}}</h4>
                            <h1 class="display-1 text-white mb-md-4">{{$rs->base_price}}</h1>
                            <a href="{{route('transfer',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>


    </div>
</div>
<!-- Carousel End -->
