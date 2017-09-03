@extends('layouts/default')

    {{-- Page title --}}
    @section('title')
        Edit User
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2-bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/iCheck/css/all.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom_css/wizard.css')}}" >
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit User
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('index')}}">
                        <i class="fa fa-fw fa-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{route('user_list')}}"> Users</a>
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
					        {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel', 'enctype' => 'multipart/form-data', 'files' => true]) !!}
					        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                <label for="first_name" class="col-sm-2 control-label">Name *</label>
                                <div class="col-sm-10">
					  	            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
					  	            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                </div>
					        </div>
					        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                                <label for="email" class="col-sm-2 control-label">Email *</label>
                                <div class="col-sm-10">
					  	            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
					  	            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                </div>
					        </div>
                            <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                                <label for="password" class="col-sm-2 control-label">Password *</label>
                                <div class="col-sm-10">
                                    {!! Form::password('password', ['class' => 'form-control required', 'placeholder' => 'Password']) !!}
						            {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password_confirm" class="col-sm-2 control-label">Confirm Password *</label>
                                <div class="col-sm-10">
                                    {!! Form::password('password_confirm', ['class' => 'form-control required', 'placeholder' => 'Confirm Password']) !!}
                                </div>
                            </div>

                            <div class="form-group required">
                                <label for="dateBirth" class="col-sm-2 control-label">Date of Birth</label>
                                <div class="col-sm-10">
                                
                                    {!! Form::date('dateBirth', null, ['class' => 'form-control', 'placeholder' => \Carbon\Carbon::now()->toDatestring()]) !!}
					  	            {!! $errors->first('dateBirth', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="avatar" class="col-sm-2 control-label">Profile picture</label>
                                <div class="col-sm-10">
                                    {!! Form::file('avatar') !!}
                                </div>
                            </div>
                            
                            <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                <label for="first_name" class="col-sm-2 control-label">Bio *</label>
                                <div class="col-sm-10">
					  	            {!! Form::textarea('Bio', $user->Bio, ['class' => 'form-control', 'placeholder' => 'Bio']) !!}
                                </div>
					        </div>

                            @if(Auth::user()->admin)
					            <div class="form-group">
						            <div class="checkbox">
							            <label>
								            {!! Form::checkbox('admin', 1, null) !!}Administrateur
							            </label>
						            </div>
                                </div>
                            @endif
						    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
					        {!! Form::close() !!}
				        </div>
			        </div>
		        </div>
		        <a href="javascript:history.back()" class="btn btn-primary">
			        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		        </a>
	        </div>
            @include('layouts.right_sidebar')
            <!-- right side bar end -->
        </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/bootstrapwizard/js/jquery.bootstrap.wizard.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/iCheck/js/icheck.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/adduser.js')}}"></script>
    <!-- end of page level js -->
@stop