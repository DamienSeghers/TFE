@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Users List
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}"/>
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Users List</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('index') }}">
                        <i class="fa fa-fw fa-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"> Users</a>
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
                                    @foreach ($view as $views)
                                        <tr>
                                            <td>{!! $views->name !!}</td>
                                            <td>{!! $views->email !!}</td>
                                            @if ($views->admin === 1)
                                                <td>Admin</td>
                                            @else
                                                <td>User</td>
                                            @endif
                                            <td>
                                                <a href="{{ route('user.edit', $views->id)}}">
                                                    <i class="fa fa-fw fa-pencil text-primary actions_icon" title="Edit User"></i>
                                                </a>
                                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                                <a href="{{ route('user.destroy', $views->id) }}" data-method="delete" class="jquery-postback">
                                                    <i class="fa fa-fw fa-times text-danger actions_icon" title="Delete User"></i>
                                                </a>
                                                <a href="{{ route('user.show', $views->id)}}">
                                                    <i class="fa fa-fw fa-star text-success actions_icon" title="View User"></i>
                                                </a>
                                            </td>
                                        </tr>
                                 @endforeach
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript:history.back()" class="btn btn-primary">
			    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		    </a>
            <!-- row-->
            @include('layouts.right_sidebar')
        </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/users_custom.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/delete_user.js')}}"></script>
<!-- end of page level js -->
@stop