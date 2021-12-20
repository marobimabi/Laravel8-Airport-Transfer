@extends('layouts.admin')

@section('title', 'Admin Setting Page')
@section('javascript')
    <!-- include libraries(jQuery, bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                        <h2>Edit Setting</h2>
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
                                <form  action="{{route('admin_setting_update')}}" method="post" >
                                  @csrf

                                    <input type="text" id="id" class="form-control" name="id" value="{{$data->id}}"  />

                                    <br />
                                    <label for="fullname">Title * :</label>
                                    <input type="text" id="fullname" class="form-control" name="title" value="{{$data->title}}"  />
                                    <br />
                                    <label for="fullname">Keywords * :</label>
                                    <input type="text" id="fullname" class="form-control" name="keywords" value="{{$data->keywords}}"  />
                                    <br />
                                    <label for="fullname">Description * :</label>
                                    <input type="text" id="fullname" class="form-control" name="description" value="{{$data->description}}"  />
                                    <br />
                                    <label for="fullname"> Company * :</label>
                                    <input type="text" id="fullname" value="10" class="form-control" name="company"  />
                                    <br />
                                    <label for="fullname">Address * :</label>
                                    <input type="text" id="fullname" class="form-control" name="address" value="{{$data->address}}"  />
                                    <br />
                                    <label for="fullname">phone * :</label>
                                    <input type="number" id="fullname" class="form-control" name="address"  value="{{$data->phone}}"  />
                                    <br />
                                    <label for="tax">Fax * :</label>
                                    <input value="{{$data->fax}}" id="fullname" class="form-control" name="fax" required />
                                    <br />
                                    <label for="tax">Email * :</label>
                                    <input type="detail" id="fullname" class="form-control" name="email" value="{{$data->email}}"  />
                                    <br />
                                    <label for="fullname">Smtpserver * :</label>
                                    <input type="text" id="fullname" class="form-control" name="smtpserver" value="{{$data->smtpserver}}"  />
                                    <br />
                                    <label for="fullname">Smtppasword * :</label>
                                    <input type="text" id="fullname" class="form-control" name="smtppasword" value="{{$data->smtppasword}}"  />
                                    <br />
                                    <label for="fullname">Smtpport * :</label>
                                    <input type="number" id="fullname" class="form-control" name="smtpport" value="{{$data->smtpport}}"  />
                                    <br />
                                    <label for="fullname">Facebook * :</label>
                                    <input type="text" id="fullname" class="form-control" name="facebook" value="{{$data->facebook}}"  />
                                    <br />
                                    <label for="fullname">Instagram * :</label>
                                    <input type="text" id="fullname" class="form-control" name="ınstagram" value="{{$data->ınstagram}}"  />
                                    <br />
                                    <label for="fullname">Twitter * :</label>
                                    <input type="text" id="fullname" class="form-control" name="twitter" value="{{$data->twitter}}"  />
                                    <br />
                                    <label for="fullname">About Us * :</label>
                                    <textarea id="aboutus" class="form-control" name="aboutus">{$data->aboutus}}</textarea>
                                    <br />
                                    <label for="fullname">Contact * :</label>
                                    <textarea id="contac" class="form-control" name="contac">{$data->contac}}</textarea>
                                    <br />
                                    <label for="fullname">References * :</label>
                                    <textarea id="references" class="form-control" name="references">{$data->references}}</textarea>

                                    <br/>
                                    <script>
                                        $(document).ready(function() {
                                            $('#references').summernote();

                                            $('#contac').summernote();

                                            $('#aboutus').summernote();
                                        });
                                    </script>
                                    <br />
                                    <label for="fullname">Status * :</label>
                                    <select id="heard" class="form-control" name="status" required>
                                        <option selected = "selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>

                                    </select>
                                    <br />

                                    <button class="btn btn-primary"><span>Edit Setting</span></button>
                                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection
