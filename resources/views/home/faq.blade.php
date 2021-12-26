@extends('layouts.home')



@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">FAQ</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('homepage')}}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">FAQ</h6>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-10 text-center">

                <div class="accordion" id="accordionExample">

                @foreach($dataList as $rs => $faq)

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{ $faq->question }}
                                </a>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>{!! $faq->answer !!}</p>
                            </div>
                        </div>
                    </div>

        @endforeach
                </div>
            </div>

</div>
<!-- Page Header Start -->
@endsection
