<?php $__env->startSection('title'); ?>
    Users List
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/datatables/css/dataTables.bootstrap.css')); ?>"/>
    <!--end of page level css-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Users List</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('index')); ?>">
                        <i class="fa fa-fw fa-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('user_list')); ?>"> Users</a>
                </li>
                <li class="active">
                    Users List
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content p-l-r-15">
            <div class="row">
                <div class="panel panel-primary ">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-fw fa-users"></i> Users List
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="table">
                                <thead>
                                <tr class="filters">
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $view; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $views): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo $views->name; ?></td>
                                            <td><?php echo $views->email; ?></td>
                                            <?php if($views->admin === 1): ?>
                                                <td>Admin</td>
                                            <?php else: ?>
                                                <td>User</td>
                                            <?php endif; ?>
                                            <td>
                                                <a href="<?php echo e(route('user.edit', $views->id)); ?>">
                                                    <i class="fa fa-fw fa-pencil text-primary actions_icon" title="Edit User"></i>
                                                </a>
                                                <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                                                <a href="<?php echo e(route('user.destroy', $views->id)); ?>" data-method="delete" class="jquery-postback">
                                                    <i class="fa fa-fw fa-times text-danger actions_icon" title="Delete User"></i>
                                                </a>
                                                <a href="<?php echo e(route('user.show', $views->id)); ?>">
                                                    <i class="fa fa-fw fa-star text-success actions_icon" title="View User"></i>
                                                </a>
                                            </td>
                                        </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- row-->
            <?php echo $__env->make('layouts.right_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
<!-- begining of page level js -->
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/datatables/js/jquery.dataTables.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/datatables/js/dataTables.bootstrap.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/custom_js/users_custom.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/custom_js/delete_user.js')); ?>"></script>
<!-- end of page level js -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>