

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

    <title>Pent Database</title>

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
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ 'App\Admin' == Auth::getProvider()->getModel() ? route('user.logout') : route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form><i class="fa fa-power-off"></i></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="{{asset("/clever/assets/img/logo.png")}}"><span class="badge">9</span></a>
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
        <div class="sidebar col-md-2 col-sm-1">

            <div class="sidebar-collapse collapse">

                <div class="nav-sidebar title"><span>Admin Dashboard</span></div>

                <ul class="nav nav-sidebar">
                    <li><a href="{{url('dashboard')}}"><i class="fa fa-bar-chart-o"></i><span class="hidden-sm text"> Dashboard</span></a></li>

                    <li>
                    <li><a class="submenu" href="{{ url('system-management/category') }}"><i class="fa fa-list"></i><span class="hidden-sm text">Service Type</span>  <span class="badge">  {{DB::table('categories')->count()}}</span></a></li>

                    <li><a class="submenu" href="{{ url('system-management/country') }}"><i class="fa fa-globe"></i><span class="hidden-sm text">countries</span> <span class="badge">  {{DB::table('countries')->count()}}</span></a></li>

                    <li><a class="submenu" href="{{ url('system-management/regions') }}"><i class="fa fa-map-marker"></i><span class="hidden-sm text">Regions</span>  <span class="badge">  {{DB::table('regions')->count()}}</span></a></li>



                    <li><a class="submenu" href="{{ url('system-management/cells') }}"><i class="fa fa-home"></i><span class="hidden-sm text">Home Cells</span>
                            <span class="badge">  {{DB::table('cells')->count()}}</span></a></li>

                    <li><a class="submenu" href="{{ url('system-management/roles') }}"><i class="fa fa-suitcase"></i><span class="hidden-sm text">Roles In Church</span>  <span class="badge">  {{DB::table('roles')->count()}}</span></a></li>


                    <li><a class="submenu" href="{{ url('system-management/groups') }}"><i class="fa fa-group"></i><span class="hidden-sm text">Groups In Church</span>  <span class="badge">  {{DB::table('divisions')->count()}}</span></a></li>
                    <li><a class="submenu" href="{{ url('system-management/members') }}"><i class="fa fa-users"></i><span class="hidden-sm text">Church Members</span>
                            <span class="badge">  {{DB::table('members')->count()}}</span></a></li>

                    <li><a class="submenu" href="{{ url('/system-management/users') }}"><i class="fa fa-user"></i><span class="hidden-sm text">Users Management</span>  <span class="badge">  {{DB::table('users')->count()}}</span></a></li>
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
            <div class="col-md-10 col-sm-11 main ">





                <ol class="breadcrumb">

                    <li class="active">Member's Profile</li>
                </ol>


                <div class="row profile">

                    <div class="col-md-6">

                        <div class="panel panel-default">
                            <div class="panel-body">



                                <center><img class="profile-user-img img-responsive img-circle" src="<?php echo asset("storage/$members->photo ")?>" alt="profile-details" width="100" height="100"></center>

                                <h2 class="text-center"><strong>{{$members->firstname}} {{$members->lastname}}</strong></h2>
                                <h3 class="text-center"><i class="fa fa-map-marker"></i>  {{$members->nationality}}, {{$members->region}} ,{{$members->hometown}} </h3>



                                <hr>

                                <div class="row text-center">
                                    <div class="col-xs-4">
                                        <div><strong><i class="fa fa-calendar"></i> {{$members->birthdate}}</strong></div>
                                        <div><small>Birth Date</small></div>
                                    </div><!--/.col-->
                                    <div class="col-xs-4">
                                        <div><strong><i class="fa fa-sort-numeric-asc"></i> {{$members->age}}</strong></div>
                                        <div><small>Age</small></div>
                                    </div><!--/.col-->
                                    <div class="col-xs-4">
                                        <div><strong><i class="fa fa-male"></i> {{$members->gender}}</strong></div>
                                        <div><small>Gender</small></div>
                                    </div><!--/.col-->
                                </div><!--/.row-->
                                <hr>

                                <h3><strong>General Information</strong></h3>

                                <ul class="profile-details">
                                    <li>
                                        <div><i class="fa fa-heart-o"></i>Marital Status</div>
                                        {{$members->marital_status}}

                                    </li>
                                    <li>
                                        <div><i class="fa fa-user"></i>Relative/Parent/Siblings/Spouse</div>
                                        {{$members->relative}}
                                    </li>
                                    <li>
                                        <div><i class="fa fa-phone"></i>Relative Contact</div>
                                        {{$members->relative_contact}}
                                    </li>
                                    <li>
                                        <div><i class="fa fa-building-o"></i>Local Language</div>
                                        {{$members->language}}
                                    </li>

                                    <li>
                                        <div><i class="fa fa-suitcase"></i>Profession/Occupation</div>
                                        {{$members->occupation}}
                                    </li>
                                </ul>




                            </div>

                        </div>

                    </div><!--/.col-->

                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <br>
                        <h4><strong>Church Background:  </strong></h4>

                        <ul class="profile-details">
                            <li>
                                <div><i class="fa fa-building-o"></i>Association Name</div>
                                {{$members->group_name}}

                            </li>

                            <li>
                                <div><i class="fa fa-book"></i>Role In Church</div>
                                {{$members->role_in_church}}
                            </li>
                            <li>
                                <div><i class="fa fa-home"></i>Home Cell</div>
                                {{$members->home_cell}}
                            </li>
                            <li>
                                <div><i class="fa fa-anchor"></i>Service Type</div>
                                {{$members->church_session}}
                            </li>
                        </ul>

                        <hr>

                        <h4><strong>Contact Information</strong></h4>

                        <ul class="profile-details">
                            <li>
                                <div><i class="fa fa-map-marker"></i>Current Location</div>
                                {{$members->city}}

                            </li>
                            <li>
                                <div><i class="fa fa-tablet"></i> mobile phone</div>
                                +233 {{$members->phone}}
                            </li>
                            <li>
                                <div><i class="fa fa-envelope"></i> e-mail</div>
                                {{$members->email}}
                            </li>
                            <li>
                                <div><i class="fa fa-map-marker"></i> address</div>
                                {{$members->address}}
                            </li>
                        </ul>
                                <br>
                                <br>
                                <br>


                    </div>

                </div>

                        <a href="{{url('system-management/members')}}" class="btn btn-danger"> <i class="fa fa-dashboard"></i>  Return to Page</a>
                        <a href="#" class="btn btn-info" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print</a>

                        <br>
                        <br>

            </div><!--/.col-->



                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                </section>
                <!-- /.content -->
            </div>



            <div class="row">


            </div><!--/row-->

        </div><!--/col-->



    </div><!--/profile-->



    </div>
    <!-- end: Content -->

    </div><!--/row-->

    </div><!--/container-->


    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add  Projects </h4>
                </div>
                <div class="modal-body">

                    <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="org_id" value="">

                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="company">Causes Title</label>
                            <input type="text" class="form-control" id="company" name="title" placeholder="Enter your Cause title">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                     </span>
                            @endif
                        </div>



                        <div class="form-group {{ $errors->has('brief_cause') ? ' has-error' : '' }}">
                            <label for="vat">Brief Description</label>
                            <input type="text" class="form-control" id="vat" name="brief_cause" placeholder="Brief of Cause">
                            @if ($errors->has('brief_cause'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('brief_cause') }}</strong>
                                    </span>
                            @endif
                        </div>



                        <div class="form-group {{ $errors->has('help_type') ? ' has-error' : '' }}">
                            <label for="vat">Help Type</label>
                            <input type="text" class="form-control" id="vat" name="help_type" placeholder="Enter Help Type">
                            @if ($errors->has('help_type'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('help_type') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="vat">Amount (Ghc)</label>
                            <input type="number" class="form-control" id="vat" name="amount" placeholder="Enter amount">
                            @if ($errors->has('amount'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="file-input">File input</label>

                            <input type="file" id="file-input" name="photos">
                        </div>
                        <div class="row no-print">
                            <div class="col-xs-12">

                                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-paper-plane"></i> Submit
                                </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Update Login Details</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <form action="#" method="post" class="form-horizontal ">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" id="input1-group1" name="input1-group1" class="form-control" value="{{ Auth::user()->username }}" placeholder="Full name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" id="input1-group1" name="input1-group1" class="form-control" value="{{ Auth::user()->email }}" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="email" id="input2-group1" name="input2-group1" class="form-control" value="{{ Auth::user()->phone }}" placeholder="Email">
                                        <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" id="input3-group1" name="input3-group1" class="form-control" placeholder="Password">
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" id="input3-group1" name="input3-group1" class="form-control" placeholder="Confirm Passowrd">
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script>


    <div class="clearfix"></div>

    <footer>

        <div class="row">

            <div class="col-sm-5">
                &copy; 2020 <a href="http://bootstrapmaster.com/"></a> by CodeBrainGh
            </div><!--/.col-->

            <div class="col-sm-7 text-right">
                Powered by: <a href="http://bootstrapmaster.com/demo/clever/" alt="Bootstrap Admin Templates">CodeBrainGh</a>
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
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="assets/js/excanvas.min.js"></script><![endif]-->
    <script src="{{asset("clever/assets/js/Chart.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.easy-pie-chart.min.js")}}"></script>

    <!-- theme scripts -->
    <script src="{{asset("clever/assets/js/custom.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/core.min.js")}}"></script>

    <!-- inline scripts related to this page -->
    <script src="{{asset("clever/assets/js/pages/page-profile.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery-ui.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.sparkline.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.chosen.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.cleditor.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.autosize.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.placeholder.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.maskedinput.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.inputlimiter.1.3.1.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/bootstrap-datepicker.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/bootstrap-timepicker.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/moment.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/daterangepicker.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.hotkeys.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/bootstrap-wysiwyg.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/bootstrap-colorpicker.min.js")}}"></script>

    <script src="{{asset("clever/assets/js/jquery.noty.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.raty.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/jquery.gritter.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/raphael.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/justgage.1.0.1.min.js")}}"></script>

    <!-- theme scripts -->
    <script src="{{asset("clever/assets/js/custom.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/core.min.js")}}"></script>

    <!-- inline scripts related to this page -->
    <script src="{{asset("clever/assets/js/pages/ui-elements.js")}}"></script>

    <!-- theme scripts -->


    <!-- inline scripts related to this page -->
    <script src="{{asset("clever/assets/js/pages/form-elements.js")}}"></script>
    <script src="{{asset("/clever/assets/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("/clever/assets/js/dataTables.bootstrap.min.js")}}"></script>
    <script src="{{asset("/clever/assets/js/pages/table.js")}}"></script>

    <!-- end: JavaScript-->

</body>

<!-- Mirrored from bootstrapmaster.com/live/clever/page-profile.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 05 May 2017 04:00:35 GMT -->
</html>
