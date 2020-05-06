
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/clever/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 05 May 2017 03:59:47 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="CleverAdmin - Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="CleverAdmin, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset("clever/assets/ico/apple-touch-icon-144-precomposed.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset("clever/assets/ico/apple-touch-icon-114-precomposed.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset("clever/assets/ico/apple-touch-icon-72-precomposed.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{asset("clever/assets/ico/apple-touch-icon-57-precomposed.png")}}">
        <link rel="shortcut icon" href="{{asset("clever/assets/ico/favicon.png")}}">

        <title>Pent Database</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset("clever/assets/css/bootstrap.min.css")}}" rel="stylesheet">

        <!-- page css files -->
        <link href="{{asset("clever/assets/css/font-awesome.min.css")}}" rel="stylesheet">
        <link href="{{asset("clever/assets/css/jquery-ui.min.css")}}" rel="stylesheet">
        <link href="{{asset("clever/assets/css/fullcalendar.css")}}" rel="stylesheet">
        <link href="{{asset("clever/assets/css/morris.css")}}" rel="stylesheet">
        <link href="{{asset("clever/assets/css/jquery-jvectormap-1.2.2.css")}}" rel="stylesheet">
        <link href="{{asset("clever/assets/css/climacons-font.css")}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{asset("clever/assets/css/style.min.css")}}" rel="stylesheet">

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
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                     <form id="logout-form" action="{{ 'App\Admin' == Auth::getProvider()->getModel() ? route('admin.logout') : route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form><i class="fa fa-power-off"></i></a></li>
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

        @include('layouts.sidebar')
            <!-- end: Main Menu -->

            <!-- start: Content -->
            <div class="col-md-10 col-sm-11 main ">



            <div class="row">


                     <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="smallstat">
                        <i class="fa fa-user blue"></i>
                        <span class="value">{{DB::table('users')->count()}}</span>
                        <span class="title">Registered Users</span>
                    </div>
                </div><!--/col-->


                   <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="smallstat">
                        <i class="fa fa-umbrella green"></i>
                        <span class="value">{{DB::table('categories')->count()}}</span>
                        <span class="title">Members Type</span>
                    </div>
                </div><!--/col-->


                <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="smallstat">
                        <i class="fa fa-home red"></i>
                        <span class="value">{{DB::table('cells')->count()}}</span>
                        <span class="title">Home Cells</span>
                    </div>
                </div><!--/col-->


                  <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="smallstat">
                        <i class="fa fa-map-marker yellow"></i>
                        <span class="value">{{DB::table('regions')->count()}}</span>
                        <span class="title">Regions</span>
                    </div>
                </div><!--/col-->



                <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="smallstat">
                        <i class="fa fa-flag-o green"></i>
                        <span class="value">{{DB::table('countries')->count()}}</span>
                        <span class="title">Countries</span>
                    </div>
                </div><!--/col-->

                 <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="smallstat">
                        <i class="fa fa-group yellow"></i>
                        <span class="value">{{DB::table('divisions')->count()}}</span>
                        <span class="title">Groups In Church</span>
                    </div>
                </div><!--/col-->

                 <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="smallstat">
                        <i class="fa fa-gears blue"></i>
                        <span class="value">{{DB::table('roles')->count()}}</span>
                        <span class="title">Roles In Church</span>
                    </div>
                </div><!--/col-->
                <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="smallstat">
                        <i class="fa fa-users green"></i>
                        <span class="value">{{DB::table('members')->count()}}</span>
                        <span class="title">Total Members</span>
                    </div>
                </div><!--/col-->




                <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="smallstat">
                        <i class="fa fa-book blue"></i>
                        <span class="value">{{DB::table('members')->where('church_session','=','English Service')->count()}}</span>
                        <span class="title">English Assembly</span>
                    </div>
                </div><!--/col-->

                <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="smallstat">
                        <i class="fa fa-heart red"></i>
                        <span class="value">{{DB::table('members')->where('church_session','=','Twi Service')->count()}}</span>
                        <span class="title">Twi Assembly</span>
                    </div>
                </div><!--/col-->

                <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="smallstat">
                        <i class="fa fa-male blue"></i>
                        <span class="value">{{DB::table('members')->where('gender','=','male')->count()}}</span>
                        <span class="title">Males</span>
                    </div>
                </div><!--/col-->
                <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="smallstat">
                        <i class="fa fa-female red"></i>
                        <span class="value">{{DB::table('members')->where('gender','=','female')->count()}}</span>
                        <span class="title">Females</span>
                    </div>
                </div><!--/col-->

            </div><!--/row-->







            <div class="row">



                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-bar-chart-o"></i>Traffic</h2>
                            <div class="panel-actions">
                                <a href="index-2.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
                                <a href="index-2.html#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                            <ul class="nav nav-tabs" id="mainCharts">
                                <li id="chart24h"><a href="index-2.html#24h">24h</a></li>
                                <li id="chartWeek"><a href="index-2.html#week">week</a></li>
                                <li id="chartMonth" class="active"><a href="index-2.html#month">month</a></li>
                            </ul>
                        </div>
                        <div class="panel-body no-padding-bottom">

                            <div class="tab-content">
                                <div class="tab-pane" id="24h">
                                    <div id="chart-24h" style="height:264px;width:100%;"></div>
                                    <ul class="stats">
                                        <li>
                                            <span>17.781</span>
                                            <h5>Pageviews</h5>
                                        </li>
                                        <li>
                                            <span>9.879</span>
                                            <h5>Unique Users</h5>
                                        </li>
                                        <li>
                                            <span>00:02:58</span>
                                            <h5>Avg. Visit Duration</h5>
                                        </li>
                                        <li>
                                            <span>59,83%</span>
                                            <h5>Bounce Rate</h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="week">
                                    <div id="chart-week" style="height:264px;width:100%;"></div>
                                    <ul class="stats">
                                        <li>
                                            <div class="bgchart" id="statsbg1" style="height:93px;width:100%;"></div>
                                            <span>17.781</span>
                                            <h5>Pageviews</h5>
                                        </li>
                                        <li>
                                            <div class="bgchart" id="statsbg2" style="height:93px;width:100%;"></div>
                                            <span>9.879</span>
                                            <h5>Unique Users</h5>
                                        </li>
                                        <li>
                                            <div class="bgchart" id="statsbg3" style="height:93px;width:100%;"></div>
                                            <span>00:02:58</span>
                                            <h5>Avg. Visit Duration</h5>
                                        </li>
                                        <li>
                                            <div class="bgchart" id="statsbg4" style="height:93px;width:100%;"></div>
                                            <span>59,83%</span>
                                            <h5>Bounce Rate</h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane active" id="month">
                                    <div id="chart-month" style="height:264px;width:100%;"></div>
                                    <ul class="stats">
                                        <li>
                                            <span>17.781</span>
                                            <h5>Pageviews</h5>
                                        </li>
                                        <li>
                                            <span>9.879</span>
                                            <h5>Unique Users</h5>
                                        </li>
                                        <li>
                                            <span>00:02:58</span>
                                            <h5>Avg. Visit Duration</h5>
                                        </li>
                                        <li>
                                            <span>59,83%</span>
                                            <h5>Bounce Rate</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div><!--/col-->

            </div><!--/row-->









            <div class="row">

                <div class="col-lg-6">
                    <div class="panel panel-default calendar">
                        <div class="calendar-small"></div>
                    </div>
                </div><!--/col-->

                <div class="col-lg-6">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2><i class="fa fa-check"></i>Tasks in Progress</h2>
                                    <div class="panel-actions">
                                        <a href="index-2.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
                                        <a href="index-2.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                        <a href="index-2.html#" class="btn-close"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table bootstrap-datatable datatable small-font">
                                        <thead>
                                              <tr>
                                                  <th>Task</th>
                                                  <th>Assigned to</th>
                                                  <th>Progress</th>
                                                  <th class="center">Status</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                                <td>SEO Optimisation</td>
                                                <td>Charly Brown</td>
                                                <td>
                                                    <div class="progress thin">
                                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                                                            <span class="sr-only">73% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-info">
                                                    Active
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>App Development</td>
                                                <td>John Smith</td>
                                                <td>
                                                    <div class="progress thin">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                            <span class="sr-only">95% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-success">
                                                    Active
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Hire Developers</td>
                                                <td>Megan Holms</td>
                                                <td>
                                                    <div class="progress thin">
                                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%">
                                                            <span class="sr-only">27% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-warning">
                                                    Pending
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Growth Hacking</td>
                                                <td>Alan Wane</td>
                                                <td>
                                                    <div class="progress thin">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100" style="width: 11%">
                                                            <span class="sr-only">11% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-primary">
                                                    Active
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>A/B Tests</td>
                                                <td>Irina Cole</td>
                                                <td>
                                                    <div class="progress thin">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                                                            <span class="sr-only">73% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-danger">
                                                    Canceled
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div><!--/col-->

                        <div class="col-md-12">

                            <div class="panel panel-default blue">
                                <div class="panel-heading">
                                    <h2><i class="fa fa-bar-chart-o"></i>Weekly Stat</h2>
                                    <div class="panel-actions">
                                        <a href="index-2.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                        <a href="index-2.html#" class="btn-close"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="chart-type1" style="height:170px"></div>
                                </div>
                            </div><!--/span-->

                        </div><!--/col-->

                    </div><!--/row-->

                </div><!--/col-->

            </div><!--/row-->

            <div class="row">

                <div class="col-lg-4 col-md-4">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-check"></i>To Do List</h2>
                            <div class="panel-actions">
                                <a href="index-2.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
                                <a href="index-2.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="index-2.html#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="todo">
                                <ul class="todo-list">
                                    <li>
                                        <span class="todo-actions">
                                            <a href="index-2.html#"><i class="fa fa-check"></i></a>
                                        </span>
                                        <span class="desc">Windows Phone 8 App</span>
                                        <span class="label label-danger">today</span>
                                        <a class="remove" href="index-2.html#"><i class="fa fa-times"></i></a>
                                    </li>
                                    <li>
                                        <span class="todo-actions">
                                            <a href="index-2.html#"><i class="fa fa-check"></i></a>
                                        </span>
                                        <span class="desc">New frontend layout</span>
                                        <span class="label label-danger">today</span>
                                        <a class="remove" href="index-2.html#"><i class="fa fa-times"></i></a>
                                    </li>
                                    <li>
                                        <span class="todo-actions">
                                            <a href="index-2.html#"><i class="fa fa-check"></i></a>
                                        </span>
                                        <span class="desc">Hire developers</span>
                                        <span class="label label-warning">tommorow</span>
                                        <a class="remove" href="index-2.html#"><i class="fa fa-times"></i></a>
                                    </li>
                                    <li>
                                        <span class="todo-actions">
                                            <a href="index-2.html#"><i class="fa fa-check"></i></a>
                                        </span>
                                        <span class="desc">Windows Phone 8 App</span>
                                        <span class="label label-warning">tommorow</span>
                                        <a class="remove" href="index-2.html#"><i class="fa fa-times"></i></a>
                                    </li>
                                    <li>
                                        <span class="todo-actions">
                                            <a href="index-2.html#"><i class="fa fa-check"></i></a>
                                        </span>
                                        <span class="desc">New frontend layout</span>
                                        <span class="label label-success">this week</span>
                                        <a class="remove" href="index-2.html#"><i class="fa fa-times"></i></a>
                                    </li>
                                    <li>
                                        <span class="todo-actions">
                                            <a href="index-2.html#"><i class="fa fa-check"></i></a>
                                        </span>
                                        <span class="desc">Hire developers</span>
                                        <span class="label label-success">this week</span>
                                        <a class="remove" href="index-2.html#"><i class="fa fa-times"></i></a>
                                    </li>
                                    <li>
                                        <span class="todo-actions">
                                            <a href="index-2.html#"><i class="fa fa-check"></i></a>
                                        </span>
                                        <span class="desc">New frontend layout</span>
                                        <span class="label label-info">this month</span>
                                        <a class="remove" href="index-2.html#"><i class="fa fa-times"></i></a>
                                    </li>
                                    <li>
                                        <span class="todo-actions">
                                            <a href="index-2.html#"><i class="fa fa-check"></i></a>
                                        </span>
                                        <span class="desc">Hire developers</span>
                                        <span class="label label-info">this month</span>
                                        <a class="remove" href="index-2.html#"><i class="fa fa-times"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div><!--/col-->

                <div class="col-lg-8 col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-list"></i>Recent</h2>
                            <div class="panel-actions">
                                <a href="index-2.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="index-2.html#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                            <ul class="nav nav-tabs" id="recent">
                                <li class="active"><a href="index-2.html#tickets">Tickets</a></li>
                                <li><a href="index-2.html#users">Users</a></li>
                                <li><a href="index-2.html#comments">Comments</a></li>
                            </ul>
                        </div>
                        <div class="panel-body no-padding">

                            <div class="tab-content">
                                <div class="tab-pane active" id="tickets">
                                    <table class="table bootstrap-datatable datatable small-font">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>User</th>
                                                <th>Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="label label-success">Complete</span></td>
                                                <td>Jul 25, 2012 11:09</td>
                                                <td>Server problem</td>
                                                <td>Ashley Tan</td>
                                                <td><b>[#199278]</b></td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-warning">Suspended</span></td>
                                                <td>Jul 25, 2012 11:09</td>
                                                <td>Mobile App Problem</td>
                                                <td>Ann Kovalsky</td>
                                                <td><b>[#199277]</b></td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-info">In progress</span></td>
                                                <td>Jul 25, 2012 11:09</td>
                                                <td>Paypal Issue</td>
                                                 <td>Chris Dan</td>
                                                <td><b>[#199276]</b></td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-danger">Rejected</span></td>
                                                <td>Jul 25, 2012 11:09</td>
                                                <td>IE7 Problem</td>
                                                <td>John Grand</td>
                                                <td><b>[#199275]</b></td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-success">Complete</span></td>
                                                <td>Jul 25, 2012 11:09</td>
                                                <td>Mobile App Problem</td>
                                                <td>Agnes Young</td>
                                                <td><b>[#199274]</b></td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-warning">Suspended</span></td>
                                                <td>Jul 25, 2012 11:09</td>
                                                <td>Mobile App Problem</td>
                                                <td>Patricia Doyle</td>
                                                <td><b>[#199273]</b></td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-info">In progress</span></td>
                                                <td>Jul 25, 2012 11:09</td>
                                                <td>Mobile App Problem</td>
                                                <td>Melanie Brown</td>
                                                <td><b>[#199272]</b></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="users">
                                    <ul class="users-list">
                                        <li>
                                            <a href="index-2.html#">
                                                <img class="avatar" alt="Lucas" src="assets/img/avatar.jpg">
                                            </a>
                                            <div class="name">Łukasz Holeczek
                                                <div class="dropdown pull-right">
                                                    <a class="fa fa-cogs" data-toggle="dropdown" href="index-2.html#"></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a href="index-2.html#"><i class="fa fa-check"></i> Accept</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-times"></i>Reject</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="place"><i class="fa fa-map-marker"></i>Mikolow, POLAND</span>
                                            <span class="job"><i class="fa fa-briefcase"></i>Founder, BootstrapMaster.com</span>
                                        </li>
                                        <li>
                                            <a href="index-2.html#">
                                                <img class="avatar" alt="Bill" src="assets/img/avatar9.jpg">
                                            </a>
                                            <div class="name">Bill Cole
                                                <div class="dropdown pull-right">
                                                    <a class="fa fa-cogs" data-toggle="dropdown" href="index-2.html#"></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a href="index-2.html#"><i class="fa fa-check"></i> Accept</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-times"></i>Reject</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="place"><i class="fa fa-map-marker"></i>London, ENGLAND</span>
                                            <span class="job"><i class="fa fa-briefcase"></i>CEO, Rainbow INC</span>
                                        </li>
                                        <li>
                                            <a href="index-2.html#">
                                                <img class="avatar" alt="Jane" src="assets/img/avatar5.jpg">
                                            </a>
                                            <div class="name">Jane Sanchez
                                                <div class="dropdown pull-right">
                                                    <a class="fa fa-cogs" data-toggle="dropdown" href="index-2.html#"></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a href="index-2.html#"><i class="fa fa-check"></i> Accept</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-times"></i>Reject</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="place"><i class="fa fa-map-marker"></i>Berlin, GERMANY</span>
                                            <span class="job"><i class="fa fa-briefcase"></i>Head of Stars Group</span>
                                        </li>
                                        <li>
                                            <a href="index-2.html#">
                                                <img class="avatar" alt="Kate" src="assets/img/avatar6.jpg">
                                            </a>
                                            <div class="name">Kate Presley
                                                <div class="dropdown pull-right">
                                                    <a class="fa fa-cogs" data-toggle="dropdown" href="index-2.html#"></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a href="index-2.html#"><i class="fa fa-check"></i> Accept</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-times"></i>Reject</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="place"><i class="fa fa-map-marker"></i>Madrid, SPAIN</span>
                                            <span class="job"><i class="fa fa-briefcase"></i>Creative Director, IdeaLab LTD</span>
                                        </li>
                                        <li>
                                            <a href="index-2.html#">
                                                <img class="avatar" alt="Lucas" src="assets/img/avatar7.jpg">
                                            </a>
                                            <div class="name">Anna Holmes
                                                <div class="dropdown pull-right">
                                                    <a class="fa fa-cogs" data-toggle="dropdown" href="index-2.html#"></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a href="index-2.html#"><i class="fa fa-check"></i> Accept</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-times"></i>Reject</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
                                                        <li><a href="index-2.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="place"><i class="fa fa-map-marker"></i>Paris, FRANCE</span>
                                            <span class="job"><i class="fa fa-briefcase"></i>Co-Founder, ArtStudio</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="comments">
                                    <ul class="comments-list">
                                        <li>
                                            <a href="index-2.html#">
                                                <img class="avatar" alt="Lucas" src="assets/img/avatar.jpg">
                                            </a>
                                            <div>
                                                <strong>Łukasz Holeczek</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            </div>
                                            <div class="date">4 minutes ago</div>
                                        </li>
                                        <li>
                                            <a href="index-2.html#">
                                                <img class="avatar" alt="Bill" src="assets/img/avatar9.jpg">
                                            </a>
                                            <div>
                                                <strong>Bill Cole</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            </div>
                                            <div class="date">22 hours ago</div>
                                        </li>
                                        <li>
                                            <a href="index-2.html#">
                                                <img class="avatar" alt="Jane" src="assets/img/avatar5.jpg">
                                            </a>
                                            <div>
                                                <strong>Jane Sanchez</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            </div>
                                            <div class="date">2 days ago</div>
                                        </li>
                                        <li>
                                            <a href="index-2.html#">
                                                <img class="avatar" alt="Kate" src="assets/img/avatar6.jpg">
                                            </a>
                                            <div>
                                                <strong>Kate Presley</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            </div>
                                            <div class="date">10 days ago</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/col-->

            </div><!--/row-->




            </div>
            <!-- end: Content -->

                </div><!--/row-->

    </div><!--/container-->


    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="clearfix"></div>

    <footer>

        <div class="row">

            <div class="col-sm-5">
                &copy; 2014 creativeLabs. <a href="http://bootstrapmaster.com/">Admin Templates</a> by BootstrapMaster
            </div><!--/.col-->

            <div class="col-sm-7 text-right">
                Powered by: <a href="http://bootstrapmaster.com/demo/clever/" alt="Bootstrap Admin Templates">cleverAdmin</a> | Based on Bootstrap 3.1.1 | Built with Brix.io
            </div><!--/.col-->

        </div><!--/.row-->

    </footer>

    <!-- start: JavaScript-->
    <!--[if !IE]>-->

            <script src="{{asset("clever/assets/js/jquery-2.1.0.min.js")}}"></script>

    <!--<![endif]-->

    <!--[if IE]>

        <script src="assets/js/jquery-1.11.0.min.js"></script>

    <![endif]-->

    <!--[if !IE]>-->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
        </script>

    <!--<![endif]-->

    <!--[if IE]>

        <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
        </script>

    <![endif]-->
    <script src="{{asset("clever/assets/js/jquery-migrate-1.2.1.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/bootstrap.min.js")}}"></script>


    <!-- page scripts -->
    <script src="{{asset("clever/assets/js/jquery-ui.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.ui.touch-punch.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.sparkline.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/fullcalendar.min.js")}}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="assets/js/excanvas.min.js"></script><![endif]-->
    <script src="{{asset("clever/assets/js/jquery.flot.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.flot.pie.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.flot.stack.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.flot.resize.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.flot.time.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.flot.spline.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.autosize.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.placeholder.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/moment.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/daterangepicker.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.easy-pie-chart.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/dataTables.bootstrap.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/raphael.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/morris.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery-jvectormap-1.2.2.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/uncompressed/jquery-jvectormap-world-mill-en.js")}}"></script>
    <script src="{{asset("clever/assets/js/uncompressed/gdp-data.js")}}"></script>
    <script src="{{asset("clever/assets/js/gauge.min.js")}}")}}"></script>

    <!-- theme scripts -->
    <script src="{{asset("clever/assets/js/custom.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/core.min.js")}}"></script>

    <!-- inline scripts related to this page -->
    <script src="{{asset("clever/assets/js/pages/index.js")}}"></script>

    <!-- end: JavaScript-->

</body>

<!-- Mirrored from bootstrapmaster.com/live/clever/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 05 May 2017 03:59:47 GMT -->
</html>
