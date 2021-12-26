<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase text-center mb-5">Deals Of The Day</h1>
        <div class="row">
            @foreach($daily as $rs)
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <a class="btn btn-primary px-3" href="{{route('transfer',['id'=>$rs->id,'slug'=>$rs->slug])}}">Book Now</a>
                        <img class="img-fluid mb-4" src="{{ Storage::url($rs->images) }}"  alt="">
                        <h4 class="text-uppercase mb-4">{{$rs->title}}</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>{{$rs->capacity}} Seats</span>
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
                        <a class="btn btn-primary px-3" href="">${{$rs->km_price}}/Km</a>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Rent A Car End -->
