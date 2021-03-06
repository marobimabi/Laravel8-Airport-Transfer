@extends('layouts.admin')

@section('title', 'Rezervation List')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <a href="{{route('admin_rezervation_add')}}" class="btn btn-secondary btn-sm" >Add Product</a>
                </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Rezervation List</h2>
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
                                        <th>From_Location</th>
                                        <th>To_Location</th>
                                        <th>User_id</th>
                                        <th>Transfer_ID</th>
                                        <th>Price</th>
                                        <th>Airline</th>
                                        <th>flightnumber</th>
                                        <th>flightdate</th>
                                        <th>pickuptime</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($dataList as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>
                                                {{$rs->from_location_id}}

                                            </td>
                                            <td>
                                                {{--                                                @foreach($data_location as $rsl)--}}
                                                {{--                                                    @if($rs->to_location_id==$rsl->id)--}}
                                                {{--                                                        {{$rs->location->name}}--}}

                                                {{--                                                    @endif--}}
                                                {{--                                                    @break--}}
                                                {{--                                                @endforeach--}}
                                                {{$rs->to_location_id}}

                                            </td>
                                            <td>
                                                {{$rs->user_id}}
                                            </td>
                                            <td>

                                                {{$rs->transfer_id}}
                                            </td>
                                            <td>{{$rs->price}}</td>
                                            <td>{{$rs->airline}}</td>
                                            <td>{{$rs->flightnumber}}</td>
                                            <td>{{$rs->flightdate}}</td>
                                            <td>{{$rs->pickuptime}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin_rezervation_edit', ['id'=> $rs->id])}}" class="btn btn-info btn-xs" ><i class="fa fa-pencil"></i>Edit</a></td>
                                            <td><a href="{{route('admin_rezervation_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete ! Are You Sire?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a></td>
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
        @endsection
        @section('footer')


            <!-- Datatables -->
                <script src="{{ asset('assets')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
                <script src="{{ asset('assets')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/jszip/dist/jszip.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/pdfmake/build/pdfmake.min.js"></script>
                <script src="{{ asset('assets')}}/vendors/pdfmake/build/vfs_fonts.js"></script>

                <!-- Custom Theme Scripts -->
@endsection


