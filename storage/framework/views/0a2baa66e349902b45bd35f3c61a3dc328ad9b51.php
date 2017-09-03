    
    <?php $__env->startSection('title'); ?>
        Analyse DB
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/datatables/css/dataTables.bootstrap.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/custom_css/datatables_custom.css')); ?>">
    <!--end of page level css-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('index')); ?>">
                        <i class="fa fa-fw fa-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Analyse</a>
                </li>
                <li class="active">
                    Informations systèmes
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            
            
            <!-- First Basic Table Ends Here-->
            <!-- Second Data Table Starts Here-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading  clearfix">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-briefcase"></i> Informations systèmes
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body table-responsive">
                            <strong>
                                Toggle column:
                            </strong>
                            <div class="btn-group" style="margin:10px 0;">
                                <button type="button" class="toggle-vis btn btn-default" data-column="0">Hostname</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="1">Uuid</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="2">Cpu_type</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="3">Cpu_brand</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="4">Cpu_physical_cores</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="5">Cpu_logical_cores</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="6">Physical_memory</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="7">Hardware_vendor</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="7">Hardware_model</button>
                            </div>
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Hostname</th>
                                        <th>Uuid</th>
                                        <th>Cpu_type</th>
                                        <th>Cpu_brand</th>
                                        <th>Cpu_physical_cores</th>
                                        <th>Cpu_logical_cores</th>
                                        <th>Physical_memory</th>
                                        <th>Hardware_vendor</th>
                                        <th>Hardware_model</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $system; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $systems): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo $systems->hostname; ?></td>
                                        <td><?php echo $systems->uuid; ?></td>
                                        <td><?php echo $systems->cpu_type; ?></td>
                                        <td><?php echo $systems->cpu_brand; ?></td>
                                        <td><?php echo $systems->cpu_physical_cores; ?></td>
                                        <td><?php echo $systems->cpu_logical_cores; ?></td>
                                        <td><?php echo $systems->physical_memory; ?></td>
                                        <td><?php echo $systems->hardware_vendor; ?></td>
                                        <td><?php echo $systems->hardware_model; ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Data Table Ends Here-->
            <!-- Third Data Table Starts Here-->
            
        <?php echo $__env->make('layouts.right_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- row -->
        </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <!-- begining of page level js -->
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/datatables/js/jquery.dataTables.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/datatables/js/dataTables.bootstrap.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/custom_js/datatables_custom.js')); ?>"></script>
    <!-- end of page level js -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>