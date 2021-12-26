@extends('layouts.admin')

@section('title', 'Admin Home Page')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Category</h2>
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
                                <form  action="{{route('admin_category_create')}}" method="post" >
                                  @csrf
                                    <label for="heard">Parent:</label>
                                    <select id="heard" class="form-control" name="parent_id" >
                                        <option value="0" selected="selected">Main Category</option>
                                        @foreach($dataList as $rs)
                                            <option value="{{$rs->id}}">
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                            </option>
                                        @endforeach

                                    </select>

                                    <br />
                                    <label for="fullname">Title * :</label>
                                    <input type="text" id="fullname" class="form-control" name="title" />
                                    <br />
                                    <label for="fullname">Keywords * :</label>
                                    <input type="text" id="fullname" class="form-control" name="keyword" />
                                    <br />
                                    <label for="fullname">Description * :</label>
                                    <input type="text" id="fullname" class="form-control" name="description" />
                                    <br />
                                    <label for="fullname">Slug * :</label>
                                    <input type="text" id="fullname" class="form-control" name="slug" />
                                    <br />
                                    <label for="fullname">Status * :</label>
                                    <select id="heard" class="form-control" name="status">
                                        <option selected = "selected">False</option>
                                        <option>True</option>
                                    </select>
                                    <br />

                                    <button class="btn btn-primary"><span>Add Category</span></button>
                                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection
