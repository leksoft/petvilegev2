@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Welcome ! Partner</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Minton</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="widget-simple-chart text-right card-box">
                    <div class="circliful-chart" data-dimension="90" data-text="35%" data-width="5" data-fontsize="14" data-percent="35" data-fgcolor="#5fbeaa" data-bgcolor="#ebeff2"></div>
                    <h3 class="text-success counter m-t-10">2562</h3>
                    <p class="text-muted text-nowrap m-b-10">จำนวนสมาชิก</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="widget-simple-chart text-right card-box">
                    <div class="circliful-chart" data-dimension="90" data-text="75%" data-width="5" data-fontsize="14" data-percent="75" data-fgcolor="#7266ba" data-bgcolor="#ebeff2"></div>
                    <h3 class="text-primary counter m-t-10">5685</h3>
                    <p class="text-muted text-nowrap m-b-10">จำนวนร้านค้า</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="widget-simple-chart text-right card-box">
                    <div class="circliful-chart" data-dimension="90" data-text="58%" data-width="5" data-fontsize="14" data-percent="58" data-fgcolor="#f76397" data-bgcolor="#ebeff2"></div>
                    <h3 class="text-pink m-t-10">$ <span class="counter">12480</span></h3>
                    <p class="text-muted text-nowrap m-b-10">ยอดขายดีล</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="widget-simple-chart text-right card-box">
                    <div class="circliful-chart" data-dimension="90" data-text="49%" data-width="5" data-fontsize="14" data-percent="49" data-fgcolor="#98a6ad" data-bgcolor="#ebeff2"></div>
                    <h3 class="text-inverse counter m-t-10">62</h3>
                    <p class="text-muted text-nowrap m-b-10">ยอดดาวน์โหลดคูปอง</p>
                </div>
            </div>
        </div>
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
                                <td>Open21 Marketplase</td>
                                <td>01/01/2017</td>
                                <td>26/04/2017</td>
                                <td><span class="badge badge-info">Released</span></td>
                                <td>open21</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Open21 Marketplase</td>
                                <td>01/01/2017</td>
                                <td>26/04/2017</td>
                                <td><span class="badge badge-info">Released</span></td>
                                <td>open21</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Open21 Marketplase</td>
                                <td>01/01/2017</td>
                                <td>26/04/2017</td>
                                <td><span class="badge badge-info">Released</span></td>
                                <td>open21</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Open21 Marketplase</td>
                                <td>01/01/2017</td>
                                <td>26/04/2017</td>
                                <td><span class="badge badge-info">Released</span></td>
                                <td>open21</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Open21 Marketplase</td>
                                <td>01/01/2017</td>
                                <td>26/04/2017</td>
                                <td><span class="badge badge-success">Released</span></td>
                                <td>open21</td>
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
                        <img src="{{ asset('material/images/users/avatar-1.jpg') }}" class="img-responsive rounded-circle" alt="user">
                        <div class="wid-u-info">
                            <h5 class="mt-0 m-b-5 font-16">Chadengle</h5>
                            <p class="text-muted m-b-5 font-13">admin@gmail.com</p>
                            <small class="text-warning"><b>Admin</b></small>
                        </div>
                    </div>
                </div>

                <div class="card-box widget-user">
                    <div>
                        <img src="{{ asset('material/images/users/avatar-2.jpg') }}" class="img-responsive rounded-circle" alt="user">
                        <div class="wid-u-info">
                            <h5 class="mt-0 m-b-5 font-16">Tomaslau</h5>
                            <p class="text-muted m-b-5 font-13">admin@gmail.com</p>
                            <small class="text-success"><b>User</b></small>
                        </div>
                    </div>
                </div>

                <div class="card-box widget-user">
                    <div>
                        <img src="{{ asset('material/images/users/avatar-7.jpg') }}" class="img-responsive rounded-circle" alt="user">
                        <div class="wid-u-info">
                            <h5 class="mt-0 m-b-5 font-16">Ok</h5>
                            <p class="text-muted m-b-5 font-13">admin@gmail.com</p>
                            <small class="text-pink"><b>Admin</b></small>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- end row -->


    </div>

@endsection