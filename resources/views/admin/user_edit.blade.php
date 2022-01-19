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
                            <form action="{{route('admin_user_update', ['id'=>$data->id])}}" method="post">
                                @csrf

                                <br/>
                                <label for="fullname">Name * :</label>
                                <input type="text" id="fullname" class="form-control" name="name"
                                       value="{{$data->name}}">
                                <br/>
                                <label for="fullname">Email * :</label>
                                <input type="text" id="fullname" class="form-control" name="email"
                                       value="{{$data->email}}">
                                <br/>
                                <label for="fullname">Phone * :</label>
                                <input type="text" id="fullname" class="form-control" name="phone"
                                       value="{{$data->phone}}">
                                <br/>
                                <label for="fullname">Address * :</label>
                                <input type="number" id="fullname" value="{{$data->address}} class="form-control" name="address"
                                >
                                <br/>
                                <label for="fullname">Roles * :</label>
                                <input type="number" id="fullname" value="{{$data->roles}} class="form-control" name="roles"
                                >
                                <br/>
                                <label for="fullname">Capacity * :</label>
                                <input type="number" id="fullname" class="form-control" name="capacity"
                                       value="{{$data->capacity}}">
                                <br/>

                                <button class="btn btn-primary"><span>Edit Product</span></button>
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
