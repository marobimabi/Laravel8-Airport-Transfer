@extends('layouts.admin')

@section('title', 'Admin Product Page')
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
                                <form  action="{{route('admin_transfer_update', ['id'=>$data->id])}}" method="post" >
                                  @csrf
                                    <label for="heard">Parent *:</label>
                                    <select id="heard" class="form-control" name="category_id" required>
                                        @foreach($dataList as $rs)
                                            <option value ="{{ $rs->id }}" @if ($rs->id== $data->category_id) selected="selected" @endif>{{ $rs->title }}</option>
                                        @endforeach

                                    </select>

                                    <br />
                                    <label for="fullname">Title * :</label>
                                    <input type="text" id="fullname" class="form-control" name="title" value="{{$data->title}}" required />
                                    <br />
                                    <label for="fullname">Keywords * :</label>
                                    <input type="text" id="fullname" class="form-control" name="keywords" value="{{$data->keywords}}" required />
                                    <br />
                                    <label for="fullname">Description * :</label>
                                    <input type="text" id="fullname" class="form-control" name="description" value="{{$data->description}}" required />
                                    <br />
                                    <label for="fullname">Base Price * :</label>
                                    <input type="number" id="fullname" value="10" class="form-control" name="base_price" required />
                                    <br />
                                    <label for="fullname">Km price * :</label>
                                    <input type="number" id="fullname" value="6" class="form-control" name="km_price" required />
                                    <br />
                                    <label for="fullname">Capacity * :</label>
                                    <input type="number" id="fullname" class="form-control" name="capacity" value="{{$data->capacity}}" required />
                                    <br />
                                    <label for="fullname">Quantity * :</label>
                                    <input type="number" id="fullname" class="form-control" name="quantity"  value="{{$data->quantity}}" required />
                                    <br />
                                    <label for="tax">Tax * :</label>
                                    <input type="number" id="fullname" value="18" class="form-control" name="tax" required />
                                    <br />
                                    <label for="tax">Detail * :</label>
                                    <input type="detail" id="fullname" class="form-control" name="detail" value="{{$data->detail}}" required />
                                    <br />
                                    <label for="fullname">Slug * :</label>
                                    <input type="text" id="fullname" class="form-control" name="slug" value="{{$data->slug}}" required />
                                    <br />
                                    <label for="fullname">Image * :</label>
                                    <input type="file" id="fullname" class="form-control" name="images" value="{{$data->images}}" required />
                                    @if($data->images)
                                        <img src="{{Storage::url($data->images)}}" height="=60" alt="">
                                    @endif
                                    <br />
                                    <label for="fullname">Status * :</label>
                                    <select id="heard" class="form-control" name="status" required>
                                        <option selected = "selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>

                                    </select>
                                    <br />

                                    <button class="btn btn-primary"><span>Edit Product</span></button>
                                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection
