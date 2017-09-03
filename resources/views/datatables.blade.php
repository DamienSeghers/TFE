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
                    <a href="#">DataTables</a>
                </li>
                <li class="active">
                    Data Tables
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
                                <i class="fa fa-fw fa-th"></i> Information des systèmes
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
                                @foreach ($system as $systems)
                                    <tr>
                                        <td>{!! $systems->hostname !!}</td>
                                        <td>{!! $systems->uuid !!}</td>
                                        <td>{!! $systems->cpu_type !!}</td>
                                        <td>{!! $systems->cpu_brand !!}</td>
                                        <td>{!! $systems->cpu_physical_cores !!}</td>
                                        <td>{!! $systems->cpu_logical_cores !!}</td>
                                        <td>{!! $systems->physical_memory !!}</td>
                                        <td>{!! $systems->hardware_vendor !!}</td>
                                        <td>{!! $systems->hardware_model !!}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Data Table Ends Here-->
            <!-- Third Data Table Starts Here-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading  clearfix">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-th"></i> Versions d'OS
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
                                <button type="button" class="toggle-vis btn btn-default" data-column="0">Name</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="1">Version</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="2">Major</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="3">Major</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="4">Patch</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="5">Build</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="6">Platforme</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="7">Codename</button>
                            </div>
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Version</th>
                                        <th>Major</th>
                                        <th>Minor</th>
                                        <th>Patch</th>
                                        <th>Build</th>
                                        <th>Platforme</th>
                                        <th>Codename</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($view as $views)
                                    <tr>
                                        <td>{!! $views->name !!}</td>
                                        <td>{!! $views->version !!}</td>
                                        <td>{!! $views->major !!}</td>
                                        <td>{!! $views->minor !!}</td>
                                        <td>{!! $views->patch !!}</td>
                                        <td>{!! $views->build !!}</td>
                                        <td>{!! $views->platform !!}</td>
                                        <td>{!! $views->codename !!}</td>
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
