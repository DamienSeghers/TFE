    
    <?php $__env->startSection('title'); ?>
        Edit User
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/select2/css/select2-bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/iCheck/css/all.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/custom_css/wizard.css')); ?>" >
    <!--end of page level css-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit User
            </h1>
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
                    Edit User
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="col-md-12">
    	        <br>
		        <div class="panel panel-primary">	
			        <div class="panel-heading">Modification d'un utilisateur</div>
			        <div class="panel-body"> 
				        <div class="col-sm-12">
					        <?php echo Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel', 'enctype' => 'multipart/form-data', 'files' => true]); ?>

					        <div class="form-group <?php echo $errors->has('name') ? 'has-error' : ''; ?>">
                                <label for="first_name" class="col-sm-2 control-label">Name *</label>
                                <div class="col-sm-10">
					  	            <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']); ?>

					  	            <?php echo $errors->first('name', '<small class="help-block">:message</small>'); ?>

                                </div>
					        </div>
					        <div class="form-group <?php echo $errors->has('email') ? 'has-error' : ''; ?>">
                                <label for="email" class="col-sm-2 control-label">Email *</label>
                                <div class="col-sm-10">
					  	            <?php echo Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']); ?>

					  	            <?php echo $errors->first('email', '<small class="help-block">:message</small>'); ?>

                                </div>
					        </div>
                            <div class="form-group <?php echo $errors->has('password') ? 'has-error' : ''; ?>">
                                <label for="password" class="col-sm-2 control-label">Password *</label>
                                <div class="col-sm-10">
                                    <?php echo Form::password('password', ['class' => 'form-control required', 'placeholder' => 'Password']); ?>

						            <?php echo $errors->first('password', '<small class="help-block">:message</small>'); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password_confirm" class="col-sm-2 control-label">Confirm Password *</label>
                                <div class="col-sm-10">
                                    <?php echo Form::password('password_confirm', ['class' => 'form-control required', 'placeholder' => 'Confirm Password']); ?>

                                </div>
                            </div>

                            <div class="form-group required">
                                <label for="dateBirth" class="col-sm-2 control-label">Date of Birth</label>
                                <div class="col-sm-10">
                                
                                    <?php echo Form::date('dateBirth', null, ['class' => 'form-control', 'placeholder' => \Carbon\Carbon::now()->toDatestring()]); ?>

					  	            <?php echo $errors->first('dateBirth', '<small class="help-block">:message</small>'); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="avatar" class="col-sm-2 control-label">Profile picture</label>
                                <div class="col-sm-10">
                                    <?php echo Form::file('avatar'); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="avatar" class="col-sm-2 control-label">Logo picture</label>
                                <div class="col-sm-10">
                                    <?php echo Form::file('logo'); ?>

                                </div>
                            </div>
                            
                            <div class="form-group <?php echo $errors->has('name') ? 'has-error' : ''; ?>">
                                <label for="first_name" class="col-sm-2 control-label">Name *</label>
                                <div class="col-sm-10">
					  	            <?php echo Form::textarea('Bio', $user->Bio, ['class' => 'form-control']); ?>

                                </div>
					        </div>


					        <div class="form-group">
						        <div class="checkbox">
							        <label>
								        <?php echo Form::checkbox('admin', 1, null); ?>Administrateur
							        </label>
						        </div>
					        </div>
						    <?php echo Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']); ?>

					        <?php echo Form::close(); ?>

				        </div>
			        </div>
		        </div>
		        <a href="javascript:history.back()" class="btn btn-primary">
			        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		        </a>
	        </div>
            <?php echo $__env->make('layouts.right_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- right side bar end -->
        </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <!-- begining of page level js -->
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/moment/js/moment.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')); ?>" ></script>
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/select2/js/select2.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/bootstrapwizard/js/jquery.bootstrap.wizard.js')); ?>" ></script>
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')); ?>" ></script>
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/iCheck/js/icheck.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/custom_js/adduser.js')); ?>"></script>
    <!-- end of page level js -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>