@extends('layouts.admin')

@section('title', 'Admin Product Page')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit Product</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">


                            <!-- start form for validation -->
                            <form action="{{route('admin_rezervation_update', ['id'=>$data->id])}}"  method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="container-fluid pb-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h2 class="mb-4">Booking Detail</h2>
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
                                                                <input type="text" name="price" value="{{$data->price}}"  class="form-control p-4 datetimepicker-input" placeholder="Airline"
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
                                                            <option >New</option>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@section('footer')

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@endsection
