    
    <?php $__env->startSection('title'); ?>
        New User
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content-header">
            <h1>
                Create User
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw fa-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"> Users</a>
                </li>
                <li class="active">
                    Create User
                </li>
            </ol>
    </section>

    
	<div class="col-md-12">
		<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Création d'un utilisateur</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					<?php echo Form::open(['route' => 'user.store', 'class' => 'form-horizontal panel']); ?>	
					<div class="form-group <?php echo $errors->has('name') ? 'has-error' : ''; ?>">
						<?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']); ?>

						<?php echo $errors->first('name', '<small class="help-block">:message</small>'); ?>

					</div>
					<div class="form-group <?php echo $errors->has('email') ? 'has-error' : ''; ?>">
						<?php echo Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']); ?>

						<?php echo $errors->first('name', '<small class="help-block">:message</small>'); ?>

					</div>
					<div class="form-group <?php echo $errors->has('password') ? 'has-error' : ''; ?>">
						<?php echo Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe']); ?>

						<?php echo $errors->first('password', '<small class="help-block">:message</small>'); ?>

					</div>
					<div class="form-group">
						<?php echo Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmation mot de passe']); ?>

					</div>
					<div class="form-group">
						<div class="checkbox">
							<label>
								<?php echo Form::checkbox('admin', 1, null); ?> Administrateur
							</label>
						</div>
					</div>
					<?php echo Form::submit('Créer', ['class' => 'btn btn-primary pull-right']); ?>

					<?php echo Form::close(); ?>

				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>