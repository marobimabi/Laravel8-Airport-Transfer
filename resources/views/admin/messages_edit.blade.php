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
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i clas

                            <!-- start form for validation -->
                            <form action="{{route('admin_message_update', ['id'=>$data->id])}}" method="post">
                                @csrf
                                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                    <tr>
                                        <th>Id</th><td>{{$data->id}}</td>

                                    </tr>
                                    <tr>
                                    <th>Name</th><td>{{$data->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th><td>{{$data->email}}</td>
                                    </tr>
                                    <tr>
                                         <th>Subject</th><td>{{$data->subject}}</td>
                                    <tr>
                                        <th>Message</th><td>{{$data->message}}</td>

                                    </tr>

                                    <tr>
                                        <th>Status</th> <td>{{$data->status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Admin Note</th>
                                        <td> <textarea id="note" name="note">{{$data->note}}</textarea></td>
                                        <script>
                                            $(document).ready(function () {
                                                $('#note').summernote();
                                            });
                                        </script>
                                    </tr>

                                    <tr>
                                        <th> </th>
                                        <td>  <button class="btn btn-primary"><span>Edit Product</span></button></td>
                                    </tr>
                                </table>
                            </form>

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
