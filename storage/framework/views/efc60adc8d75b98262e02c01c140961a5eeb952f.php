

<?php $__env->startSection('title', 'Admin Setting Page'); ?>
<?php $__env->startSection('javascript'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">

                <!-- start form for validation -->
                <form  action="<?php echo e(route('admin_setting_update')); ?>" method="post" >
                    <?php echo csrf_field(); ?>
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
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

                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="smtp-tab" data-toggle="tab" href="#smtp" role="tab" aria-controls="smtp" aria-selected="false">Sept Email</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false">Social media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About As</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"> Contact Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="reference-tab" data-toggle="tab" href="#reference" role="tab" aria-controls="reference" aria-selected="false">References</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">

                                <input type="hidden" id="id" class="form-control" name="id" value="<?php echo e($data->id); ?>"  />

                                <br />
                                <label for="fullname">Title * :</label>
                                <input type="text" id="fullname" class="form-control" name="title" value="<?php echo e($data->title); ?>"  />
                                <br />
                                <label for="fullname">Keywords * :</label>
                                <input type="text"  class="form-control" name="keywords" value="<?php echo e($data->keywords); ?>"  />
                                <br />
                                <label for="fullname">Description * :</label>
                                <input type="text" id="fullname" class="form-control" name="description" value="<?php echo e($data->description); ?>"/>
                                <br />
                                <label for="fullname"> Company * :</label>
                                <input type="text" id="fullname" class="form-control" name="company" value="<?php echo e($data->company); ?>" />
                                <br />
                                <label for="fullname">phone * :</label>
                                <input type="text"  id="fullname" class="form-control" name="address" value="<?php echo e($data->address); ?>"  />
                                <br />
                                <label for="fullname">phone * :</label>
                                <input type="text"  id="fullname" class="form-control" name="phone"  value="<?php echo e($data->phone); ?>"  />
                                <br />
                                <label for="tax">Fax * :</label>
                                <input value="<?php echo e($data->fax); ?>" id="fullname" class="form-control" name="fax" />
                                <br />
                                <label for="tax">Email * :</label>
                                <input type="detail" id="fullname" class="form-control" name="email" value="<?php echo e($data->email); ?>"  />
                                <br />
                            </div>
                            <div class="tab-pane fade" id="smtp" role="tabpanel" aria-labelledby="smtp-tab">
                                <label for="fullname">Smtpserver * :</label>
                                <input type="text" id="fullname" class="form-control" name="smtpserver" value="<?php echo e($data->smtpserver); ?>"  />
                                <br />
                                <label for="fullname">Smtppasword * :</label>
                                <input type="text" id="fullname" class="form-control" name="smtppasword" value="<?php echo e($data->smtppasword); ?>"  />
                                <br />
                                <label for="fullname">Smtpport * :</label>
                                <input type="number" id="fullname" class="form-control" name="smtpport" value="<?php echo e($data->smtpport); ?>"  />
                                <br />
                            </div>
                            <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                <label for="fullname">Facebook * :</label>
                                <textarea class="form-control" id="facebook" name="facebook" type="text"><?php echo e($data->facebook); ?></textarea>
                                <br />
                                <label for="fullname">Instagram * :</label>
                                <textarea ype="text" id="ınstagram" class="form-control" name="ınstagram"><?php echo e($data->ınstagram); ?></textarea>
                                <br />
                                <label for="fullname">Twitter * :</label>
                                <textarea type="text" id="twitter" class="form-control" name="twitter"><?php echo e($data->twitter); ?></textarea>
                            </div>
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">

                                <label for="fullname">About Us * :</label>
                                <textarea name="aboutus" class="form-control" id="aboutus" class="form-control" ><?php echo e($data->aboutus); ?></textarea>
                                <script>
                                    $(document).ready(function() {
                                        $('#aboutus').summernote()});
                                </script>
                                <br />
                            </div>
                            <div class="tab-pane fade" id="contact"  role="tabpanel" aria-labelledby="contact-tab">
                                <label for="fullname">Contact * :</label>
                                <textarea id="contac" type="text" class="form-control" name="contac"><?php echo e($data->contac); ?></textarea>
                                <script>
                                    $(document).ready(function() {
                                        $('#contac').summernote()});
                                </script>
                                <br />
                            </div>
                            <div class="tab-pane fade" id="reference" role="tabpanel" aria-labelledby="reference-tab">
                                <label for="fullname">References * :</label>
                                <textarea id="references" type="text" class="form-control" name="references"><?php echo e($data->references); ?></textarea>
                                <script>
                                    $(document).ready(function() {
                                        $('#references').summernote()});
                                </script>
                            </div>

                        </div>
                    </div>
                    <div class="x_content">
<?php $__env->startSection('footer'); ?>

                            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<?php $__env->stopSection(); ?>


                            <br/>

                                    <br />
                                    <label for="fullname">Status * :</label>
                                    <select id="heard" class="form-control" name="status">
                                        <option selected = "selected"><?php echo e($data->status); ?></option>
                                        <option>True</option>
                                        <option>False</option>

                                    </select>
                                    <br />

                                    <button class="btn btn-primary"><span>Edit Setting</span></button>

                    </div>
                </div>

               </form>



                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mhtal\Documents\GitHub\Laravel8-Airport-Transfer\resources\views/admin/setting_edit.blade.php ENDPATH**/ ?>