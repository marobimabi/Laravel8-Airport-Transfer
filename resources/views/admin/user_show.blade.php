<link href="{{ asset('assets')}}/home/img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="{{ asset('assets')}}/home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="{{ asset('assets')}}/home/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('assets')}}/home/css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('assets')}}/home/css/style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>@include('home.message')</h2>
                        <table id="example2" class="table table-striped table-bordered">

                            <tr>
                                <td rowspan="8" align="center" valign="center">
                                    @if($data->profile_photo_path)
                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="300" style="border-radius: 10px;">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Name</th><td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th><td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th><td>{{ $data->phone }}</td>
                            </tr>
                            <tr>
                                <th>Address</th><td>{{ $data->address }}</td>
                            </tr>
                            <tr>
                                <th>Date</th><td>{{ $data->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Roles</th>
                                <td>
                                    <table>
                                        @foreach($data->roles as $row)
                                            <tr>
                                                <td>{{$row->name}}</td>
                                                <td>
                                                    <a href="{{route('admin_user_role_delete', ['userid'=>$data->id, 'roleid'=>$row->id])}}" onclick="return confirm('Delete! Are you sure?')" >
                                                        <i class="fa fa-trash p-2 text-danger" style="font-size: 24px"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <th>Add Role</th>
                                <td>
                                    <form action="{{route('admin_user_role_add', ['id'=>$data->id])}}"  id="quickForm" method="Post">
                                        @csrf
                                        <select  name="roleid">
                                            @foreach($dataList as $rs)
                                                <option value="{{$rs->id}}" >
                                                    {{$rs->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary">Add Role</button>
                                    </form>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets')}}/home/lib/easing/easing.min.js"></script>
<script src="{{ asset('assets')}}/home/lib/waypoints/waypoints.min.js"></script>
<script src="{{ asset('assets')}}/home/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{ asset('assets')}}/home/lib/tempusdominus/js/moment.min.js"></script>
<script src="{{ asset('assets')}}/home/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="{{ asset('assets')}}/home/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets')}}/home/js/main.js"></script>
