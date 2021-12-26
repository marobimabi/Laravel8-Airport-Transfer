@extends('layouts.admin')

@section('title', 'Admin Home Page')
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
                            <h2>Add Product</h2>
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
                            <form action="{{route('admin_transfer_store')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <label for="heard">Parent *:</label>
                                <select id="heard" class="form-control" name="category_id">
                                    @foreach($dataList as $rs)
                                        <option value="{{$rs->id}}">
                                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                        </option>
                                    @endforeach

                                </select>

                                <br/>
                                <label for="fullname">Title * :</label>
                                <input type="text" id="fullname" class="form-control" name="title"/>
                                <br/>
                                <label for="fullname">Keywords * :</label>
                                <input type="text" id="fullname" class="form-control" name="keywords"/>
                                <br/>
                                <label for="fullname">Description * :</label>
                                <input type="text" id="fullname" class="form-control" name="description"/>
                                <br/>
                                <label for="fullname">Base Price * :</label>
                                <input type="number" id="fullname" value="10" class="form-control" name="base_price"
                                />
                                <br/>
                                <label for="fullname">Km price * :</label>
                                <input type="number" id="fullname" value="6" class="form-control" name="km_price"
                                />
                                <br/>
                                <label for="fullname">Capacity * :</label>
                                <input type="number" id="fullname" class="form-control" name="capacity"/>
                                <br/>
                                <label for="fullname">Quantity * :</label>
                                <input type="number" id="fullname" class="form-control" name="quantity"/>
                                <br/>
                                <label for="tax">Tax * :</label>
                                <input type="number" id="fullname" value="18" class="form-control" name="tax"/>
                                <br/>
                                <label for="tax">Detail * :</label>
                                <textarea id="detail" name="detail"></textarea>
                                <script>
                                    $(document).ready(function () {
                                        $('#detail').summernote();
                                    });
                                </script>
                                <br/>
                                <label for="fullname">Slug * :</label>
                                <input type="text" id="fullname" class="form-control" name="slug"/>
                                <br/>
                                <label for="fullname">Image * :</label>
                                <input type="file" id="fullname" class="form-control" name="images"/>
                                <br/>
                                <label for="fullname">Status * :</label>
                                <select id="heard" class="form-control" name="status">
                                    <option selected="selected">False</option>
                                    <option>True</option>
                                </select>
                                <br/>

                                <button class="btn btn-primary"><span>Add Product</span></button>
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
