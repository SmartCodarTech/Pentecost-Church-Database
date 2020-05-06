

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
            <!-- end: Main Menu -->

            <!-- start: Content -->
            <div class="col-md-10 col-sm-11 main">


            <div class="row">
        @if ($message = Session::get('success'))

    <div class="alert alert-success alert-block">

    <button type="btn btn-primary noty" class="close" data-dismiss="alert">×</button>

        <strong>{{ $message }}</strong>
        @endif
                        </div>

                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading" data-original-title>

                            <h2><i class="fa fa-user"></i><span class="break"></span>Region In Ghana</h2>
                            <div class="panel-actions">
                                <a href="table.html#" class="btn-setting"><i class="fa fa-edit"></i><b> <button class="btn btn-info col-sm-5 col-xs-5 btn-margin">Add Regions</button></a></b></a>
                                <a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="table.html#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                              <thead>
                                  <tr>
                                      <th>Region Name</th>

                                      <th>Update</th>
                                      <th>Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($regions as $region)
                                <tr>
                                    <td>{{ $region->name}}</td>



                                    <td width="20">
                                        <a class="btn btn-info" href="{{ route('regions.edit', $region->name)}}"
                                            data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-edit "></i>
                                        </a>

                                    </td>
                                <td width="20">
                                        <form action="{{ route('regions.destroy', $region->id)}}" method="post">
                                        @csrf
                                         @method('DELETE')
                                         <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o "></i> </button>
                                          </form>

                                    </td>
                                </tr>
                                @endforeach

                              </tbody>
                          </table>
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

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><strong>Add Regions</strong> Details</h2>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('regions.index') }}" method="post" class="form-horizontal">
                                @csrf
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                            <input type="text" id="input1-group1" name="name" class="form-control" value="{{ old('name') }}" placeholder="Region Name">
                                             @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
                                </div>



                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-paper-plane"></i> Submit
                                    </button>
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
        <h4 class="modal-title" id="exampleModalLabel">Update Regions</h4>
      </div>
      <div class="modal-body">
        <div class="panel-body">
                            <form action="{{ route('regions.update', $region->id) }}" method="post" class="form-horizontal ">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" id="input1-group1" name="name" class="form-control" value="{{ $region->name }}">
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
                &copy; 2019 WizzyLabs. <a href="http://bootstrapmaster.com/"></a> by CodeBrainGh
            </div><!--/.col-->

            <div class="col-sm-7 text-right">
                Powered by: CodeBrainGh
            </div><!--/.col-->

        </div><!--/.row-->

    </footer>

    <!-- start: JavaScript-->
    <!--[if !IE]>-->

            <script src="{{asset("/clever/assets/js/jquery-2.1.0.min.js")}}"></script>

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
    <script src="{{asset("/clever/assets/js/jquery-migrate-1.2.1.min.js")}}"></script>
    <script src="{{asset("/clever/assets/js/bootstrap.min.js")}}"></script>


    <!-- page scripts -->
    <script src="{{asset("/clever/assets/js/jquery-ui.min.js")}}"></script>
    <script src="{{asset("/clever/assets/js/jquery.sparkline.min.js")}}"></script>
    <script src="{{asset("/clever/assets/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("/clever/assets/js/dataTables.bootstrap.min.js")}}"></script>

    <!-- theme scripts -->
    <script src="{{asset("/clever/assets/js/custom.min.js")}}"></script>
    <script src="{{asset("/clever/assets/js/core.min.js")}}"></script>

    <!-- inline scripts related to this page -->
    <script src="{{asset("/clever/assets/js/pages/table.js")}}"></script>


    <!-- end: JavaScript-->

</body>

<!-- Mirrored from bootstrapmaster.com/live/clever/table.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 05 May 2017 04:00:50 GMT -->
</html>
