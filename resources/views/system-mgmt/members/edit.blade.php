

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


            <div class="row">



                <div class="col-md-10 col-md-offset-1">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><strong>Update Church Member's details</strong> <small>Form</small></h2>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{route('members.update')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}


                                <div class="form-group {{ $errors->has('prefix') ? ' has-error' : '' }}">
                                    <label for="country">Title</label>
                                    <select id="selectError" class="form-control" name="prefix" data-rel="chosen">

                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Sir">Sir.</option>
                                        <option value="Miss.">Miss.</option>
                                    </select>
                                    @if ($errors->has('prefix'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('prefix') }}</strong>
                                     </span>
                                    @endif
                                </div>


                                <div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                    <label for="company">First Name</label>
                                    <input type="text" class="form-control" id="company" name="firstname" value="{{$members->firstname}}">
                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                     </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <label for="company">Last Name</label>
                                    <input type="text" class="form-control" id="company" name="lastname" value="{{$members->lastname}}">
                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                     </span>
                                    @endif
                                </div>


                                <div class="form-group {{ $errors->has('middlename') ? ' has-error' : '' }}">
                                    <label for="company">Middle Name <i>(optional)</i></label>
                                    <input type="text" class="form-control" id="company" name="middlename" value="{{$members->middlename}}">
                                    @if ($errors->has('middlename'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('middlename') }}</strong>
                                     </span>
                                    @endif
                                </div>


                                <div class="form-group {{ $errors->has('age') ? ' has-error' : '' }}">
                                    <label for="company">Age</label>
                                    <input type="number" class="form-control" id="company" name="age" value="{{$members->age}}">
                                    @if ($errors->has('age'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('age') }}</strong>
                                     </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                                    <label for="country">Gender</label>
                                    <select id="selectError" class="form-control" name="gender" data-rel="chosen">

                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                     </span>
                                    @endif
                                </div>



                                <div class="form-group {{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                    <label for="vat">Birth Date</label>
                                    <input type="text" class="form-control date-picker" id="date01" name="birthdate" data-date-format="mm/dd/yyyy">
                                    @if ($errors->has('birthdate'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('marital_status') ? ' has-error' : '' }}">
                                    <label for="country">Marital Status</label>
                                    <select id="selectError" class="form-control" name="marital_status"  data-rel="chosen">
                                        <option value="0">Select</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                    </select>
                                    @if ($errors->has('marital_status'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('marital_status') }}</strong>
                                     </span>
                                    @endif
                                </div>



                                <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
                                    <label for="selectError1">Local Language</label>
                                    <select id="selectError1" class="form-control" name="language"   multiple data-rel="chosen">
                                        <option value="0">Select</option>
                                        <option value="Akan">Akan</option>
                                        <option value="Fante">Fante</option>
                                        <option value="Ga">Ga</option>
                                        <option value="Ga Adamgbe">Ga Adamgbe</option>
                                        <option value="Ewe">Ewe</option>
                                        <option value="Guan">Guan</option>
                                        <option value="other">Others</option>
                                    </select>
                                    @if ($errors->has('language'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('language') }}</strong>
                                     </span>
                                    @endif
                                </div>



                                <div class="form-group {{ $errors->has('relative') ? ' has-error' : '' }}">
                                    <label for="company">Relations Name <i>(optional)</i></label>
                                    <input type="text" class="form-control" id="company" name="relative" value="{{$members->relative}}">
                                    @if ($errors->has('relative'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('relative') }}</strong>
                                     </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('relative_contact') ? ' has-error' : '' }}">
                                    <label for="date">Relative Number <i>(optional)</i></label>
                                    <input type="text" id="phone2" name="relative_contact" class="form-control"value="{{$members->relative_contact}}">
                                    @if ($errors->has('relative_contact'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('relative_contact') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="company">E-Mail <i>(optional)</i></label>
                                    <input type="email" class="form-control" id="if-email" name="email" value="{{$members->email}}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                     </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label for="date">Phone Number</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="{{$members->phone}}" >
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                                    <label for="vat">Address <i>(optional)</i> </label>
                                    <input type="text" class="form-control" id="vat" name="address" value="{{$members->address}}">
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>





                                <div class="form-group {{ $errors->has('occupation') ? ' has-error' : '' }}">
                                    <label for="voter">Occupation</label>
                                    <input type="text" class="form-control" id="voter" name="occupation" value="{{$members->occupation}}">
                                    @if ($errors->has('occupation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
                                    <label for="country">Nationality</label>
                                    <select id="selectError" class="form-control" name="nationality"  data-rel="chosen">
                                        @foreach ($countries as $c)
                                            <option value="{{$c->name}}">{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('nationality'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('nationality') }}</strong>
                                     </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                                    <label for="country">Regions</label>
                                    <select id="selectError" class="form-control" name="region"  data-rel="chosen">
                                        @foreach ($regions as $b)
                                            <option value="{{$b->name}}">{{$b->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('region'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('region') }}</strong>
                                     </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('hometown') ? ' has-error' : '' }}">
                                    <label for="vat">Hometown</label>
                                    <input type="text" class="form-control" id="vat" name="hometown" value="{{$members->hometown}}">
                                    @if ($errors->has('hometown'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('hometown') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label for="vat">Current location</label>
                                    <input type="text" class="form-control" id="vat" name="city" value="{{$members->city}}">
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('church_session') ? ' has-error' : '' }}">
                                    <label for="country">Service Type</label>
                                    <select id="selectError" class="form-control" name="church_session"  data-rel="chosen">
                                        @foreach ($categories as $c)
                                            <option value="{{$c->cat_name}}">{{$c->cat_name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('church_session'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('church_session') }}</strong>
                                     </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('role_in_church') ? ' has-error' : '' }}">
                                    <label for="country">Role In Church</label>
                                    <select id="selectError" class="form-control" name="role_in_church"  data-rel="chosen">
                                        @foreach ($roles as $c)
                                            <option value="{{$c->role_name}}">{{$c->role_name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('role_in_church'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('role_in_church') }}</strong>
                                     </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('home_cell') ? ' has-error' : '' }}">
                                    <label for="country">Home Cell</label>
                                    <select id="selectError" class="form-control" name="home_cell"  data-rel="chosen">
                                        @foreach ($cells as $c)
                                            <option value="{{$c->cell_name}}">{{$c->cell_name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('home_cell'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('home_cell') }}</strong>
                                     </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('church_group') ? ' has-error' : '' }}">
                                    <label for="country">Association or Group </label>
                                    <select id="selectError" class="form-control" name="church_group"  data-rel="chosen">
                                        @foreach ($division as $c)
                                            <option value="{{$c->div_name}}">{{$c->div_name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('church_group'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('church_group') }}</strong>
                                     </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('photo') ? ' has-error' : '' }}">
                                    <label for="vat">File input</label>
                                    <input type="file" id="file-input" name="photo" >

                                </div>






                                <div class="row no-print">
                                    <div class="col-xs-12">
                                        <a href="{{ url('system-management/members') }}" target="" class="btn btn-default"><i class="fa fa-close"></i>Cancel</a>
                                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-paper-plane"></i>Update
                                        </button>
                                    </div>

                                </div>

                            </form>

                        </div><!--/row-->


                    </div>
                </div>

            </div><!--/.col-->

        </div><!--/.row-->










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

                        <input type="file" id="file-input" name="photo">
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
            &copy; 2020 CodeBrainGh. <a href="http://bootstrapmaster.com/"></a> by CodeBrainGh Tean
        </div><!--/.col-->

        <div class="col-sm-7 text-right">
            Powered by: <a href="http://bootstrapmaster.com/demo/clever/" alt="Bootstrap Admin Templates">CodeBrainGh Team</a>
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

<!-- theme scripts -->
<script src="{{asset("clever/assets/js/custom.min.js")}}"></script>
<script src="{{asset("clever/assets/js/core.min.js")}}"></script>

<!-- inline scripts related to this page -->
<script src="{{asset("clever/assets/js/pages/form-elements.js")}}"></script>

<!-- end: JavaScript-->

</body>
</html>
