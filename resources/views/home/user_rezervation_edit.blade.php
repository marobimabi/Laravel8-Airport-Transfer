@extends('layouts.home')

@section('title','My Products ')

@section('cssx')

@endsection

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">USER PRODUCT</h1>
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

                <!-- start form for validation -->
                <form action="{{route('user_rezervation_update', ['id'=>$data->id])}}"  method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="container-fluid pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2 class="mb-4">Edit Rezervation</h2>
                                    <div class="mb-5">
                                        <div class="row">
                                            <div class="col-6 form-group">
                                                <select name="from_location_id" class="custom-select px-4" style="height: 50px;">
                                                    @foreach ($dataList as $rs)
                                                        <option value="{{$rs->id}}" @if($rs->id==$data->from_location_id) selected="selected" @endif>
                                                            {{$rs->name}}
                                                        </option>

                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6 form-group">
                                                <select name="to_location_id" class="custom-select px-4" style="height: 50px;">
                                                    @foreach ($dataList as $rs)
                                                        <option value="{{$rs->id}}" @if($rs->id==$data->to_location_id) selected="selected" @endif>
                                                            {{$rs->name}}
                                                        </option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <select name="transfer_id"  class="custom-select px-4" style="height: 50px;">
                                                    @foreach ($dataList_transfer as $rs)
                                                        <option value="{{$rs->id}}" @if($rs->id==$data->transfer_id) selected="selected" @endif>
                                                            {{$rs->title}}
                                                        </option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        {{--                                                    <div class="row">--}}
                                        {{--                                                        <div class="col-12 form-group">--}}
                                        {{--                                                            <div class="date" id="date2" data-target-input="nearest">--}}
                                        {{--                                                                <input type="text" name="price" class="form-control p-4 datetimepicker-input" value="{{$result}}" placeholder="Price"--}}
                                        {{--                                                                />--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}
                                        <div class="row">
                                            <div class="col-6 form-group">
                                                <div class="date" id="date3" data-target-input="nearest">
                                                    <input type="text" name="flightdate" value="{{$data->flightdate}}" class="form-control p-4 datetimepicker-input" placeholder="Flight Date"
                                                           data-target="#date3" data-toggle="datetimepicker" />
                                                </div>
                                            </div>
                                            <div class="col-6 form-group">
                                                <div class="time" id="time3" data-target-input="nearest">
                                                    <input type="text" name="flightime" value="{{$data->flightime}}" class="form-control p-4 datetimepicker-input" placeholder="Flight Time"
                                                           data-target="#time3" data-toggle="datetimepicker" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <div class="date" id="date2" data-target-input="nearest">
                                                    <input type="text" name="airline" value="{{$data->airline}}"  class="form-control p-4 datetimepicker-input" placeholder="Airline"
                                                    />
                                                </div>
                                            </div>
                                        </div><div class="row">
                                            <div class="col-12 form-group">
                                                <div class="date" id="date2" data-target-input="nearest">
                                                    <input type="text" name="price" value="{{$data->price}}"  class="form-control p-4 datetimepicker-input" placeholder="Price"
                                                    />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6 form-group">
                                                <div class="date" id="date2" data-target-input="nearest">
                                                    <input type="number" name="flightnumber" value="{{$data->flightnumber}}" min="0" class="form-control p-4 datetimepicker-input" placeholder="Flight Number"
                                                    />
                                                </div>
                                            </div>

                                            <div class="col-6 form-group">
                                                <div class="time" id="time2" data-target-input="nearest">
                                                    <input type="text" name="pickuptime" value="{{$data->pickuptime}}" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                                                           data-target="#time2" data-toggle="datetimepicker" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <select id="heard" class="form-control" name="status">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option >False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control py-3 px-4" name="note" rows="3" placeholder="Special Request"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-secondary p-5 mb-5" style="margin-top: 200px">

                                        <button type="submit" class="btn btn-block btn-primary py-3">Edit Rezervation </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /page content -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->
@endsection

@section('jsx')


    <!-- Datatables -->

    <!-- Datatables -->
    <script src="{{ asset('assets')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{ asset('assets')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('assets')}}/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <!-- jQuery -->
    <script src="{{ asset('assets')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets')}}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Theme Scripts -->
@endsection
