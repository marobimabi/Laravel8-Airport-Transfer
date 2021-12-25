@extends('layouts.admin')

@section('title', 'Add Images Galary')
@section('javascript')


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
                        <h2> {{$data->title}}</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                                <form  action="{{route('admin_image_store', ['transfer_id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                                  @csrf

                                    <br />
                                    <label for="fullname">Title * :</label>
                                    <input type="text" id="fullname" class="form-control" name="title" />
                                    <br />
                                    <label for="fullname">Image * :</label>
                                    <input type="file" id="fullname" class="form-control" name="images" />
                                    <br />
                                    <button class="btn btn-primary"><span>Add Image</span></button>
                                </form>
                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if($rs->images)
                                            <img src="{{Storage::url($rs->images)}}" style="height: 30px" alt="">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin_image_delete', ['id'=> $rs->id,'transfer_id'=>$data->id])}}" onclick="return confirm('Delete ! Are You Sire?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection
