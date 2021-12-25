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
                            <h2>@include('home.message')</h2>

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
                            <form action="{{route('admin_faq_store')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <br/>
                                <label for="fullname">Position * :</label>
                                <input type="text" id="fullname" class="form-control" name="position"/>
                                <br/>
                                <label for="fullname">Question * :</label>
                                <input type="text" id="fullname" class="form-control" name="question"/>
                                <br/>
                                <label for="tax">Answer * :</label>
                                <textarea id="answer" name="answer"></textarea>
                                <script>
                                    $(document).ready(function () {
                                        $('#answer').summernote();
                                    });
                                </script>
                                <br/>
                                <label for="fullname">Status * :</label>
                                <select id="heard" class="form-control" name="status">
                                    <option selected="selected">False</option>
                                    <option>True</option>
                                </select>
                                <br/>

                                <button class="btn btn-primary"><span>Add</span></button>
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
