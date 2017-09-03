@extends('layouts/default')

    {{-- Page title --}}
    @section('title')
        Analyse DB
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom_css/datatables_custom.css')}}">
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('index') }}">
                        <i class="fa fa-fw fa-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Analyse</a>
                </li>
                <li class="active">
                    Utilisateurs existants
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-tasks"></i> Utilisateurs existants
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
                            <button type="button" class="toggle-vis btn btn-default" data-column="0">Type</button>
                            <button type="button" class="toggle-vis btn btn-default" data-column="1">User</button>
                            <button type="button" class="toggle-vis btn btn-default" data-column="2">TTY</button>
                            <button type="button" class="toggle-vis btn btn-default" data-column="3">Host</button>
                            <button type="button" class="toggle-vis btn btn-default" data-column="4">Time</button>
                            <button type="button" class="toggle-vis btn btn-default" data-column="5">Pid</button>
                        </div>
                        <table class="table table-striped table-bordered" id="example">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>User</th>
                                    <th>TTY</th>
                                    <th>Host</th>
                                    <th>Time</th>
                                    <th>Pid</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($logged as $loggeds)
                                <tr>
                                    <td>{!! $loggeds->type !!}</td>
                                    <td>{!! $loggeds->user !!}</td>
                                    <td>{!! $loggeds->tty !!}</td>
                                    <td>{!! $loggeds->host !!}</td>
                                    <td>{!! $loggeds->time !!}</td>
                                    <td>{!! $loggeds->pid !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        @include('layouts.right_sidebar')
        <!-- row -->
        </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/datatables_custom.js')}}"></script>
    <!-- end of page level js -->
@stop
