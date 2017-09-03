@extends('layouts/default')

    {{-- Page title --}}
    @section('title')
        Core + Admin Template
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/toastr/css/toastr.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/nvd3/css/nv.d3.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/morrisjs/morris.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/awesomebootstrapcheckbox/css/awesome-bootstrap-checkbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom_css/dashboard1.css')}}" />
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="index-header">
                <div class="inner-bg">
                    <div class="header-section">
                        <div class="row">
                            <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                                <h1>Welcome <span class="hidden-md">To Dashboard</span></h1>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section ends-->
        <!-- Content Header (Page header) -->
    <section class="content-header">
        </br></br>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('index')}}">
                    <i class="fa fa-fw fa-home"></i> Dashboard
                </a>
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content p-l-r-15">

    <div class="col-lg-12">
                <!-- First Basic Table strats here-->
                </br></br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </h3>
                        <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User</th>
                                        <th>hostname</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($erreur as $erreurs)
                                    <tr>

                                        <td>{!! $erreurs->IDerreur !!}</td>
                                        <td>{!! $erreurs->user !!}</td>
                                        <td>{!! $erreurs->hostname !!}</td>
                                        <td>
                                            @if($erreurs->statut==1)
                                                @if($erreurs->type==1)
                                                    <span class="label label-sm label-warning">OS Version</span>
                                                @elseif($erreurs->type==2)
                                                    <span class="label label-sm label-warning">info System</span>
                                                @endif
                                            @endif
                                            @if($erreurs->statut==2)
                                                @if($erreurs->type==1)
                                                    <span class="label label-sm label-danger">OS Version</span>
                                                @elseif($erreurs->type==2)
                                                    <span class="label label-sm label-danger">info System</span>
                                                @endif
                                            @endif
                                            <!--<a href="{{ route('erreur.destroy', $erreurs->IDerreur) }}" data-method="delete" class="jquery-postback">
                                                <i class="fa fa-fw fa-times text-danger actions_icon" title="Delete erreur"></i>
                                            </a>-->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        @include('layouts.right_sidebar')
    </section>
    <!-- /.content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
<div id="qn"></div>
<!-- begining of page level js -->
<script src="{{asset('assets/js/backstretch.js')}}"></script>
<!--sales tiles-->
<script type="text/javascript" src="{{asset('assets/vendors/countupcircle/js/jquery.countupcircle.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/granim/js/granim.min.js')}}"></script>
<!-- end of sales tiles -->
<!-- Flot tab2-->
<script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.resize.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.time.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.symbol.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.pie.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.stack.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/flot.tooltip/js/jquery.flot.tooltip.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/flotspline/js/jquery.flot.spline.min.js')}}" ></script>
<!-- end of flot tab2 -->
<script type="text/javascript" src="{{asset('assets/vendors/chartist/js/chartist.min.js')}}"></script>
<!--morris donut-->
<script type="text/javascript" src="{{asset('assets/vendors/morrisjs/morris.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/raphael-min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/d3/d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/nvd3/js/nv.d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/stream_layers.js')}}"></script>
<!--maps-->
<script src="{{asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- end of maps -->
<script type="text/javascript" src="{{asset('assets/js/dashboard1.js')}}"></script>
    <!-- end of page level js -->
@stop