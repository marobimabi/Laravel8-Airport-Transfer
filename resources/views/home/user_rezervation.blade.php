@extends('layouts.home')

@section('title','My Products ')

@section('cssx')

@endsection

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">USER PRODUCT</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('homepage')}}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">User Profile</h6>
    </div>
</div>
<!-- user profile -->

<div class="container-fluid pt-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-3 mb-5">

            @include('home.usermenu')
            </div>
            <div class="col-lg-9 mb-5">


                <div class="clearfix"></div>

                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>From_Location</th>
                        <th>To_Location</th>
                        <th>Transfer_ID</th>
                        <th>Price</th>
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
                                {{$rs->location->name}}

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

                                {{$rs->transfer_id}}
                            </td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->flightdate}}</td>
                            <td>{{$rs->pickuptime}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('user_rezervation_edit', ['id'=> $rs->id])}}" class="btn btn-info btn-xs" ><i class="fa fa-pencil"></i>Edit</a></td>
                            <td><a href="{{route('user_rezervation_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete ! Are You Sire?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <span>{{ $dataList->links("pagination::bootstrap-4") }}</span>
                <!--- end table -->
                <!-- /page content -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->
@endsection

@section('jsx')


    <!-- Datatables -->

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
    <!-- jQuery -->
    <script src="{{ asset('assets')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets')}}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Theme Scripts -->
@endsection
