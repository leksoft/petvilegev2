
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
    <head>
        <meta charset="utf-8" />
        <title>OPEN21 Marketplace - Partner</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">


        <link href="{{ asset('material/plugins/jquery-circliful/css/jquery.circliful.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('partner/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('partner/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('partner/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('partner/js/modernizr.min.js') }}"></script>
        @yield('css')
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <a href="index.html" class="logo">
                            <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                            <span class="logo-large"><i class="mdi mdi-radar"></i> Partner</span>
                        </a>
                        <!-- Image Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--<img src="assets/images/logo_dark.png" alt="" height="24" class="logo-lg">-->
                        <!--<img src="assets/images/logo_sm.png" alt="" height="24" class="logo-sm">-->
                        <!--</a>-->

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0">

                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell noti-icon"></i>
                                    <span class="badge badge-pink noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg" aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="font-16"><span class="badge badge-danger float-right">5</span>Notification</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-comment-account"></i></div>
                                        <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-account"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-airplane"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('partner/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="text-overflow"><small class="text-white">Welcome ! John</small> </h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account"></i> <span>Profile</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-settings"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-open"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout"></i> <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="index.html"><i class="ti-home"></i>Dashboard</a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ti-paint-bucket"></i>ร้านค้า</a>
                               
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ti-light-bulb"></i>จัดการดีล</a>
                               
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ti-spray"></i>จัดการคูปอง</a>
                               
                            </li>

                           

                            <li class="has-submenu">
                                <a href="#"><i class="ti-gift"></i>รายงาน</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="extras-profile.html">Income</a></li>
                                            <li><a href="extras-team.html">Withdraw</a></li>
                                            <li><a href="extras-timeline.html">Credit</a></li>
                                            <li><a href="extras-invoice.html">รายงานการขาย</a></li>
                                            <li><a href="extras-calendar.html"> ประวัติลูกค้า</a></li>
                                            <li><a href="extras-email-template.html">ประวัติการใช้ดีล</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="extras-maintenance.html">ประวัติการใช้คูปอง</a></li>
                                            <li><a href="extras-coming-soon.html">ยอดขายดีล</a></li>
                                            <li><a href="extras-gallery.html"> ยอดดาวน์โหลดคูปอง</a></li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Minton</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        <h4 class="page-title">Welcome ! {{ Auth::user()->name }},{{ Auth::user()->firstname }}</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-simple text-center card-box">
                            <h3>Profile</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget-simple text-center card-box">
                            <h3>สร้างร้านค้าแรก</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget-simple text-center card-box">
                           
                            <h3>สร้างดีลแรก</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget-simple text-center card-box">
                            <h3>สร้างคูปองแรก</h3>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- end row -->




                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark  header-title m-t-0 m-b-30">Total Revenue</h4>

                            <div class="widget-chart text-center">
                                <div id="sparkline1"></div>
                                <ul class="list-inline m-t-15 mb-0">
                                    <li>
                                        <h5 class="text-muted m-t-20">Target</h5>
                                        <h4 class="m-b-0">$56,214</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">Last week</h5>
                                        <h4 class="m-b-0">$98,251</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">Last Month</h5>
                                        <h4 class="m-b-0">$10,025</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark  header-title m-t-0 m-b-30">Yearly Sales Report</h4>

                            <div class="widget-chart text-center">
                                <div id="sparkline2"></div>
                                <ul class="list-inline m-t-15 mb-0">
                                    <li>
                                        <h5 class="text-muted m-t-20">Target</h5>
                                        <h4 class="m-b-0">$1000</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">Last week</h5>
                                        <h4 class="m-b-0">$523</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">Last Month</h5>
                                        <h4 class="m-b-0">$965</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark header-title m-t-0 m-b-30">Weekly Sales Report</h4>

                            <div class="widget-chart text-center">
                                <div id="sparkline3"></div>
                                <ul class="list-inline m-t-15 mb-0">
                                    <li>
                                        <h5 class="text-muted m-t-20">Target</h5>
                                        <h4 class="m-b-0">$1,84,125</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">Last week</h5>
                                        <h4 class="m-b-0">$50,230</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">Last Month</h5>
                                        <h4 class="m-b-0">$87,451</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end row -->



                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="col-6 text-center">
                                            <canvas id="partly-cloudy-day" width="100" height="100"></canvas>
                                        </div>
                                        <div class="col-6">
                                            <h2 class="m-t-0 text-muted"><b>32°</b></h2>
                                            <p class="text-muted">Partly cloudy</p>
                                            <p class="text-muted mb-0">15km/h - 37%</p>
                                        </div>
                                    </div><!-- End row -->
                                </div>
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <h4 class="text-muted m-t-0">SAT</h4>
                                            <canvas id="cloudy" width="35" height="35"></canvas>
                                            <h4 class="text-muted">30<i class="wi wi-degrees"></i></h4>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h4 class="text-muted m-t-0">SUN</h4>
                                            <canvas id="wind" width="35" height="35"></canvas>
                                            <h4 class="text-muted">28<i class="wi wi-degrees"></i></h4>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h4 class="text-muted m-t-0">MON</h4>
                                            <canvas id="clear-day" width="35" height="35"></canvas>
                                            <h4 class="text-muted">33<i class="wi wi-degrees"></i></h4>
                                        </div>
                                    </div><!-- end row -->
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-6 text-center">
                                                <canvas id="snow" width="100" height="100"></canvas>
                                            </div>
                                            <div class="col-6">
                                                <h2 class="m-t-0 text-muted"><b> 23°</b></h2>
                                                <p class="text-muted">Partly cloudy</p>
                                                <p class="text-muted mb-0">15km/h - 37%</p>
                                            </div>
                                        </div><!-- end row -->
                                    </div><!-- weather-widget -->
                                </div>
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <h4 class="text-muted m-t-0">SAT</h4>
                                            <canvas id="sleet" width="35" height="35"></canvas>
                                            <h4 class="text-muted">30<i class="wi wi-degrees"></i></h4>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h4 class="text-muted m-t-0">SUN</h4>
                                            <canvas id="fog" width="35" height="35"></canvas>
                                            <h4 class="text-muted">28<i class="wi wi-degrees"></i></h4>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h4 class="text-muted m-t-0">MON</h4>
                                            <canvas id="partly-cloudy-night" width="35" height="35"></canvas>
                                            <h4 class="text-muted">33<i class="wi wi-degrees"></i></h4>
                                        </div>
                                    </div><!-- End row -->
                                </div> <!-- col-->
                            </div><!-- End row -->
                        </div>
                    </div> <!-- end col -->
                </div>
                <!--end row/ WEATHER -->


                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-box">
                            <h4 class="text-dark  header-title m-t-0">Latest Projects</h4>
                            <p class="text-muted m-b-25 font-13">
                                Your awesome text goes here.
                            </p>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Assign</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Minton Admin v1</td>
                                        <td>01/01/2017</td>
                                        <td>26/04/2017</td>
                                        <td><span class="badge badge-info">Released</span></td>
                                        <td>Coderthemes</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Minton Frontend v1</td>
                                        <td>01/01/2017</td>
                                        <td>26/04/2017</td>
                                        <td><span class="badge badge-success">Released</span></td>
                                        <td>Minton admin</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Minton Admin v1.1</td>
                                        <td>01/05/2017</td>
                                        <td>10/05/2017</td>
                                        <td><span class="badge badge-pink">Pending</span></td>
                                        <td>Coderthemes</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Minton Frontend v1.1</td>
                                        <td>01/01/2017</td>
                                        <td>31/05/2017</td>
                                        <td><span class="badge badge-purple">Work in Progress</span>
                                        </td>
                                        <td>Minton admin</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Minton Admin v1.3</td>
                                        <td>01/01/2017</td>
                                        <td>31/05/2017</td>
                                        <td><span class="badge badge-warning">Coming soon</span></td>
                                        <td>Coderthemes</td>
                                    </tr>
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end col -8 -->

                    <div class="col-lg-4">
                        <div class="card-box widget-user">
                            <div>
                                <img src="assets/images/users/avatar-1.jpg" class="img-responsive rounded-circle" alt="user">
                                <div class="wid-u-info">
                                    <h5 class="mt-0 m-b-5 font-16">Chadengle</h5>
                                    <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                    <small class="text-warning"><b>Admin</b></small>
                                </div>
                            </div>
                        </div>

                        <div class="card-box widget-user">
                            <div>
                                <img src="assets/images/users/avatar-2.jpg" class="img-responsive rounded-circle" alt="user">
                                <div class="wid-u-info">
                                    <h5 class="mt-0 m-b-5 font-16">Tomaslau</h5>
                                    <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                    <small class="text-success"><b>User</b></small>
                                </div>
                            </div>
                        </div>

                        <div class="card-box widget-user">
                            <div>
                                <img src="assets/images/users/avatar-7.jpg" class="img-responsive rounded-circle" alt="user">
                                <div class="wid-u-info">
                                    <h5 class="mt-0 m-b-5 font-16">Ok</h5>
                                    <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                    <small class="text-pink"><b>Admin</b></small>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2018 - 2027 © OPEN21 Marketplace
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="{{ asset('partner/js/jquery.min.js')}}"></script>
        <script src="{{ asset('partner/js/popper.min.js')}}"></script><!-- Popper for Bootstrap --><!-- Tether for Bootstrap -->
        <script src="{{ asset('partner/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('partner/js/waves.js')}}"></script>
        <script src="{{ asset('partner/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('partner/js/jquery.scrollTo.min.js')}}"></script>

        <!-- Counter Up  -->
        <script src="{{ asset('material/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('material/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!-- circliful Chart -->
        <script src="{{ asset('material/plugins/jquery-circliful/js/jquery.circliful.min.js') }}"></script>
        <script src="{{ asset('material/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- skycons -->
        <script src="{{ asset('material/plugins/skyicons/skycons.min.js') }}" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="{{ asset('partner/pages/jquery.dashboard.js') }}"></script>

        <!-- Custom main Js -->
        <script src="{{ asset('partner/js/jquery.core.js') }}"></script>
        <script src="{{ asset('partner/js/jquery.app.js') }}"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            // BEGIN SVG WEATHER ICON
            if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                        {"color": "#7266ba"},
                        {"resizeClear": true}
                        ),
                        list  = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
            };

        </script>
@yield('js')
    </body>
</html>