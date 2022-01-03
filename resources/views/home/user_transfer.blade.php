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
                                <h2>Category List</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Settings</a>
                                        </div>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <!-- table -->
                                <div class="col-md-12 col-sm-12 ">
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Capacity</th>
                                            <th>Base_Price</th>
                                            <th>Km_Price</th>
                                            <th>Image</th>
                                            <th>Galery</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dataList as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{$rs->category_id}}</td>
                                                <td>{{$rs->title}}</td>
                                                <td>{{$rs->capacity}}</td>
                                                <td>{{$rs->base_price}}</td>
                                                <td>{{$rs->km_price}}</td>
                                                <td>
                                                    @if($rs->images)
                                                        <img src="{{Storage::url($rs->images)}}" style="height: 30px" alt="">
                                                    @endif
                                                </td>
                                                <td><a href="{{route('user_image_add', ['transfer_id'=> $rs->id])}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a></td>

                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('user_transfer_edit', ['id'=> $rs->id])}}" class="btn btn-info btn-xs" ><i class="fa fa-pencil"></i>Edit</a></td>
                                                <td><a href="{{route('user_transfer_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete ! Are You Sire?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a></td>
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
                <!-- /page content -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->
@endsection
