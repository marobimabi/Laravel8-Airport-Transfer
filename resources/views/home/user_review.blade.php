@extends('layouts.home')

@section('title','My Products ')

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

                <div class="row">
                    <div class="col-md-12 col-sm-12  ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Review List</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <div class="x_content">
                                    <!-- table -->
                                    <div class="col-md-12 col-sm-12 ">
                                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Transfer_id</th>
                                                <th>User-id</th>
                                                <th>Ip</th>
                                                <th>Review</th>
                                                <th>Rate</th>
                                                <th>Status</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($dataList as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{$rs->transfer_id}}</td>
                                                    <td>{{$rs->user_id}}</td>
                                                    <td>{{$rs->ip}}</td>
                                                    <td>{{$rs->comment}}</td>
                                                    <td>{{$rs->rate}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="{{route('user_review_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete ! Are You Sire?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <!--- end table -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->
@endsection
