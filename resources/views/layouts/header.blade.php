

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from bootstrapmaster.com/live/clever/table.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 05 May 2017 04:00:50 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="CleverAdmin - Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="CleverAdmin, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset("/clever/assets/ico/apple-touch-icon-144-precomposed.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset("/clever/assets/ico/apple-touch-icon-114-precomposed.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset("/clever/assets/ico/apple-touch-icon-72-precomposed.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{asset("/clever/assets/ico/apple-touch-icon-57-precomposed.png")}}">
        <link rel="shortcut icon" href="{{asset("/clever/assets/ico/favicon.png")}}">

        <title>CityLink</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset("/clever/assets/css/bootstrap.min.css")}}" rel="stylesheet">
        
        <!-- page css files -->
        <link href="{{asset("/clever/assets/css/font-awesome.min.css")}}" rel="stylesheet">
        <link href="{{asset("/clever/assets/css/jquery-ui.min.css")}}" rel="stylesheet"> 

        <!-- Custom styles for this template -->
        <link href="{{asset("/clever/assets/css/style.min.css")}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
</head>

<body>
        <!-- start: Header -->
    <div class="navbar" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar">a</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{asset("/clever/assets/img/logo.png")}}">{{ Auth::user()->username }}</a>
            </div>
            <ul class="nav navbar-nav navbar-actions navbar-left">
                <li><a href="#" id="main-menu-toggle"><i class="fa fa-bars"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="table.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header">
                            <strong>Messages</strong>
                            <div class="progress thin">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                              </div>
                            </div>
                        </li>
                           
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-cog"></i></a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i></a></li>
                <li class="dropdown">
                    <a href="table.html#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="{{asset("/clever/assets/img/logo.png")}}"><span class="badge">9</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header text-center">
                            <strong>Account</strong>
                        </li>
                        <li><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
                        <li><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
                        <li class="dropdown-menu-header text-center">
                            <strong>Settings</strong>
                        </li>
                        <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
                        <li><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
                        <li><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Logout</a></li>    
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-bars"></i></a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <i class="fa fa-search"></i>
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
    <!-- end: Header -->

    
        <div class="container-fluid content">
        <div class="row">

                
            <!-- start: Main Menu -->
            <div class="sidebar col-md-2 col-sm-1 minified">
                                
                <div class="sidebar-collapse collapse">
                    
                    <div class="nav-sidebar title"><span>Admin Dashboard</span></div>
                    
                    <ul class="nav nav-sidebar">
                        
                        <li><a href="{{ url('dashboard') }}"><i class="fa fa-bar-chart-o"></i><span class="hidden-sm text"> Dashboard</span></a></li> 
                        
                        <li>
                         <li><a class="submenu" href="{{ url('system-management/rooms') }}"><i class="fa fa-umbrella"></i><span class="hidden-sm text"> Rooms</span></a></li>
                                <li><a class="submenu" href="{{ url('system-management/bookings') }}"><i class="fa fa-book"></i><span class="hidden-sm text">Bookings</span></a></li>
                                <li><a class="submenu" href="{{ url('system-management/profile') }}"><i class="fa fa-male"></i><span class="hidden-sm text"> Profile</span></a></li>
                                <li><a class="submenu" href="{{ url('system-management/employees') }}"><i class="fa fa-users"></i><span class="hidden-sm text">Staffs</span></a></li>
                                <li><a class="submenu" href="{{ url('system-management/reservations') }}"><i class="fa fa-laptop"></i><span class="hidden-sm text">Reservations</span></a></li>

                                <li><a class="submenu" href="{{ url('/system-management/users') }}"><i class="fa fa-user"></i><span class="hidden-sm text">Users Management</span></a></li>
                                <li><a class="submenu" href="{{ url('system-management/invoice') }}"><i class="fa fa-file-o"></i><span class="hidden-sm text">Make Invoice</span></a></li>
                        
                    
                    
            </li>
                                            </ul>
                                        </li>
                                    </ul>   
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                                    <a href="#" id="main-menu-min" class="minified visible-md visible-lg"><i class="fa fa-angle-double-right"></i></a>
                            </div>