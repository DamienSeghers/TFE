<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            TFE
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv=”Pragma” content=”no-cache”>
    <meta http-equiv=”Expires” content=”-1″>
    <meta http-equiv=”CACHE-CONTROL” content=”NO-CACHE”>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
@yield('header_styles')
<!-- end of global css -->
</head>
<body class="skin-coreplus">
<div class="preloader">
    <div class="loader_img"><img src="{{asset('assets/img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="{{ route('index') }}" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="{{asset(('uploads/logos/').Auth::user()->logo)}}" alt="logo"/>
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                        class="fa fa-fw fa-bars"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Notifications: style can be found in dropdown-->
                <li class="dropdown notifications-menu">
                    <a href="{{route('index')}}" >
                        <i class="fa fa-fw fa-bell-o black"></i>
                        <span class="label label-warning">
                            <?php
                                $erreur = DB::select('select * from erreur'); 
                                echo count($erreur);
                            ?>
                        </span>
                    </a>

                </li>
                <!-- User Account: style can be found in dropdown-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <img src="{{asset(('uploads/avatars/').Auth::user()->avatar)}}" width="35"
                             class="img-circle img-responsive pull-left"
                             height="35" alt="User Image">
                        <div class="riot">
                            <div>
                                {{ Auth::user()->name }}
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset(('uploads/avatars/').Auth::user()->avatar)}}" class="img-circle" alt="User Image">
                            <p> {{ Auth::user()->name }}</p>
                        </li>
                        <!-- Menu Body -->
                        <li class="p-t-3"><a href="{{ route('user_view') }}"> <i class="fa fa-fw fa-user"></i> My
                                Profile </a>
                        </li>
                        <li role="presentation"></li>
                        <li><a href="{{ route('user.edit', Auth::user()->id) }}"> <i class="fa fa-fw fa-gear"></i> Account Settings
                            </a></li>
                        <li role="presentation" class="divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('lockscreen') }}">
                                    <i class="fa fa-fw fa-lock"></i>
                                    Lock
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                            <i class="fa fa-fw fa-sign-out"></i>
                                            Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- For horizontal menu -->
@yield('horizontal_header')
<!-- horizontal menu ends -->
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="{{ route('index') }}">
                            <img src="{{asset(('uploads/avatars/').Auth::user()->avatar)}}" class="img-circle" alt="User Image">
                        </a>
                        <div class="content-profile">
                            <h4 class="media-heading">
                                {{ Auth::user()->name }}
                            </h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="{{ route('user_view') }} ">
                                        <i class="fa fa-fw fa-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('lockscreen') }}">
                                        <i class="fa fa-fw fa-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('user.edit', Auth::user()->id)}}">
                                        <i class="fa fa-fw fa-gear"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                            <i class="fa fa-fw fa-sign-out"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li {!! (Request::is('home')|| Request::is('/')? 'class="active"':"") !!}>
                        <a href="{{ route('index') }}">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">Dashboard</span>
                        </a>
                    </li>
                    <li {!! (Request::is('simple_tables')|| Request::is('datatables') || Request::is('datatables1') || Request::is('datatables2') || Request::is('datatables3') || Request::is('advanced_datatables')|| Request::is('responsive_datatables')|| Request::is('bootstrap_tables')? 'class="active"':"")!!}>
                        <a href="#"> <i class="menu-icon fa fa-database"></i>
                            <span>Analyse</span>
                            <span class="fa arrow">
                                </span>
                        </a>
                        <ul class="sub-menu sub-submenu" aria-expanded="true" style>
                            <li {!! (Request::is('datatables1')? 'class="active"':"") !!}>
                                <a href="{{URL::to('datatables1')}} ">
                                    <i class="fa fa-fw fa-plug"></i> Versions OS
                                </a>
                            </li>
                            <li {!! (Request::is('datatables2')? 'class="active"':"") !!}>
                                <a href="{{URL::to('datatables2')}} ">
                                    <i class="fa fa-fw fa-briefcase"></i> Informations systèmes
                                </a>
                            </li>
                            <li {!! (Request::is('datatables3')? 'class="active"':"") !!}>
                                <a href="{{URL::to('datatables3')}} ">
                                    <i class="fa fa-fw fa-tasks"></i> Utilisateurs existants
                                </a>
                            </li>
                        </ul>
                    </li>
                    @if(Auth::user()->admin)
                    <li {!! (Request::is('user_list')||Request::is('user/create')||Request::is('user_view')||Request::is('user_delete')? 'class="active"':"") !!}>
                        <a href="#">
                            <i class="menu-icon fa fa-fw fa-users"></i>
                            <span>Users</span> <span
                                    class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu sub-submenu" aria-expanded="true" style>
                            <li {!! (Request::is('user_list')? 'class="active"':"") !!}>
                                <a href="{{route('user_list')}} ">
                                    <i class="fa fa-list" aria-hidden="true"></i> Users List
                                </a>
                            </li>
                            <li {!! (Request::is('user/create')? 'class="active"':"") !!}>
                                <a href="{{route('user.create')}} ">
                                    <i class="fa fa-fw fa-user"></i> Add New User
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <aside class="right-side">
        <!-- Content -->
        @yield('content')
    </aside>
    <!-- page wrapper-->
</div>
<!-- wrapper-->
<!-- global js -->
<script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
<!-- end of global js -->
@yield('footer_scripts')
<!-- end page level js -->
</body>

</html>
