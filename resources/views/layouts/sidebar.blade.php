<div class="container-fluid content">
        <div class="row">

            <!-- start: Main Menu -->
            <div class="sidebar col-md-2 col-sm-1 ">

                <div class="sidebar-collapse collapse">

                    <div class="nav-sidebar title"><span>Main Menu</span></div>

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
                           </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                                    <a href="#" id="main-menu-min" class="full visible-md visible-lg"><i class="fa fa-angle-double-left"></i></a>
                            </div>
