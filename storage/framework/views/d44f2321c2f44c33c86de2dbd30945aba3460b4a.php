

<?php $__env->startSection('title', 'Contact Messages List'); ?>
<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <?php echo $__env->make('home.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Message List</h2>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Admin Note</th>
                                        <th>Phone</th>
                                        <th>Status</th>

                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $dataList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($rs->id); ?></td>
                                            <td><?php echo e($rs->name); ?></td>
                                            <td><?php echo e($rs->email); ?></td>
                                            <td><?php echo e($rs->subject); ?></td>
                                            <td><?php echo e($rs->message); ?></td>
                                            <td><?php echo e($rs->note); ?></td>
                                            <td><?php echo e($rs->phone); ?></td>
                                            <td><?php echo e($rs->status); ?></td>
                                            <td><a href="<?php echo e(route('admin_message_edit', ['id'=> $rs->id])); ?>" class="btn btn-info btn-xs" ><i class="fa fa-pencil"></i>Edit</a></td>
                                            <td><a href="<?php echo e(route('admin_message_delete', ['id'=> $rs->id])); ?>" onclick="return confirm('Delete ! Are You Sire?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <!--- end table -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('footer'); ?>


                <!-- Datatables -->
                    <script src="<?php echo e(asset('assets')); ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/jszip/dist/jszip.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
                    <script src="<?php echo e(asset('assets')); ?>/vendors/pdfmake/build/vfs_fonts.js"></script>

                    <!-- Custom Theme Scripts -->
        <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mhtal\Documents\GitHub\Laravel8-Airport-Transfer\resources\views/admin/messages.blade.php ENDPATH**/ ?>