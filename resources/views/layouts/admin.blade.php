<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('material') }}images/favicon.ico">

        <title>OPEN21 Marketplace - Administrators</title>

        <link href="{{ asset('material/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('material/plugins/jquery-circliful/css/jquery.circliful.css') }}" rel="stylesheet" type="text/css" />


        <link href="{{ asset('material/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('material/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('material/css/style.css') }}" rel="stylesheet" type="text/css">

        <script src="{{ asset('material/js/modernizr.min.js') }}"></script>
        @yield('css')
        
    </head>


    <body class="fixed-left">
        
            <!-- Begin page -->
            <div id="wrapper">
    
                <!-- Top Bar Start -->
                @include('backoffice.includes.top-bar')
                <!-- Top Bar End -->
    
                <!-- ========== Left Sidebar Start ========== -->
    
                <div class="left side-menu">
                    @include('backoffice.includes.left-side-menu')
                </div>
                <!-- Left Sidebar End -->
    
                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->                      
                <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        @yield('content')
                        <!-- end container -->
                    </div>
                    <!-- end content -->
    
                    <footer class="footer">
                        2018 - 2027 © OPEN21 Marketplace
                    </footer>
    
                </div>
                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->
    
    
                <!-- Right Sidebar -->
                    @include('backoffice.includes.right-sidebar')
                <!-- /Right-bar -->
    
            </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="{{ asset('material/js/jquery.min.js') }}"></script>
        <script src="{{ asset('material/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
        <script src="{{ asset('material/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('material/js/detect.js') }}"></script>
        <script src="{{ asset('material/js/fastclick.js') }}"></script>
        <script src="{{ asset('material/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('material/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('material/js/waves.js') }}"></script>
        <script src="{{ asset('material/js/wow.min.js') }}"></script>
        <script src="{{ asset('material/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('material/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('material/plugins/switchery/switchery.min.js') }}"></script>
        
        <!-- Counter Up  -->
        <script src="{{ asset('material/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('material/plugins/counterup/jquery.counterup.min.js') }}"></script>

       <!-- circliful Chart -->
       <script src="{{ asset('material/plugins/jquery-circliful/js/jquery.circliful.min.js') }}"></script>
       <script src="{{ asset('material/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

       <!-- skycons -->
       <script src="{{ asset('material/plugins/skyicons/skycons.min.js') }}" type="text/javascript"></script>


        <!-- Page js  -->
        <script src="{{ asset('material/pages/jquery.dashboard.js') }}"></script>

        <!-- Custom main Js -->
        <script src="{{ asset('material/js/jquery.core.js') }}"></script>
        <script src="{{ asset('material/js/jquery.app.js') }}"></script>

        
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