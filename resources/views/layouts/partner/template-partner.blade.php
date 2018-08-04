
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
                    <a href="{{ route('partner.main') }}" class="logo">
                            <span class="logo-small"> Partner</span>
                            <span class="logo-large"> Partner</span>
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
                            <img src="{{ asset('partner/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle"> {{ Auth::user()->profile->firstname ." ".Auth::user()->profile->lastname }} 
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
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
                                <a href="{{ route('partner.main') }}">Dashboard</a>
                            </li>

                            <li class="has-submenu">
                            <a href="{{ route('partner.store-list') }}">ร้านค้า</a>
                               
                            </li>

                            <li class="has-submenu">
                                <a href="#">จัดการดีล</a>
                               
                            </li>

                            <li class="has-submenu">
                                <a href="#">จัดการคูปอง</a>
                               
                            </li>

                           

                            <li class="has-submenu">
                                <a href="#">รายงาน</a>
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


        @yield('content')
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