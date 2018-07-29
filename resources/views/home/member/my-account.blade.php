@extends('layouts.home')

@section('content')
    <!-- start section -->
    <section class="section light-backgorund">
        <div class="container">


            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="my-account-img" src="{{ asset('frontend/img/team/team_01.jpg') }}"/>

                        </div>
                        <div class="col-sm-8">

                            <div class="edit-profile"><h6>{{ Auth::user()->name }}</h6></div>
                            <a href="{{ url('edit-profile/'.Auth::id()) }}"
                               class="btn btn-default btn-sm">ข้อมูลบัญชี</a>
                        </div>

                    </div>
                </div><!-- end col -->
                <div class="col-sm-4">
                    <div class="icon-boxes style2">
                        <div class="icon">
                            <i class="fa fa-credit-card text-dark"></i> วอเล็ต
                        </div><!-- end icon -->
                        <div class="box-content">
                            <h6 class="alt-font text-uppercase">2048.00 THB.</h6>
                            <a href="javascript:void(0);" class="btn btn-default btn-sm">เติมเงินวอเล็ต</a>
                        </div>
                    </div><!-- icon-box -->
                </div><!-- end col -->
                <div class="col-sm-4">
                    <div class="icon-boxes style2">
                        <div class="icon">
                            <i class="fa fa-gift text-dark"></i> แต้มสะสม
                        </div><!-- end icon -->
                        <div class="box-content">
                            <h6 class="alt-font ">427 Points</h6>
                            <a href="javascript:void(0);" class="btn btn-default btn-sm">แลกแต้ม</a>
                        </div>
                    </div><!-- icon-box -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="section light-backgorund">
        <div class="container">
            <div class="row column-3">
                <div class="col-sm-6 col-md-4">
                    <div class="icon-boxes style1">
                        <div class="icon">
                            <i class="glyphicon glyphicon-heart-empty text-primary"></i>
                        </div><!-- end icon -->
                        <div class="box-content">

                            <h5 class="text-primary">ร้านค้าที่ติดตาม</h5>
                        </div>
                    </div><!-- icon-box -->
                </div><!-- end col -->
                <div class="col-sm-6 col-md-4">
                    <div class="icon-boxes style1">
                        <div class="icon">
                            <i class="glyphicon glyphicon-fire text-primary"></i>
                        </div><!-- end icon -->
                        <div class="box-content">
                            <h5 class="text-primary">ดีลและคูปองที่ชื่นชอบ</h5>
                        </div>
                    </div><!-- icon-box -->
                </div><!-- end col -->
                <div class="col-sm-6 col-md-4">
                    <div class="icon-boxes style1">
                        <div class="icon">
                            <i class="glyphicon glyphicon-star-empty text-primary"></i>
                        </div><!-- end icon -->
                        <div class="box-content">
                            <h5 class="text-primary">ดีลและคูปองของฉัน</h5>
                        </div>
                    </div><!-- icon-box -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div><!-- end container -->
    </section>
    <section class="section light-backgorund">
        <div class="container">
            <div class="row column-3">
                <div class="col-sm-6 col-md-4">
                    <div class="icon-boxes style1">
                        <div class="icon">
                            <i class="glyphicon glyphicon-bullhorn text-primary"></i>
                        </div><!-- end icon -->
                        <div class="box-content">

                            <h5 class="text-primary">แนะนำร้านค้าใหม่</h5>
                        </div>
                    </div><!-- icon-box -->
                </div><!-- end col -->
                <div class="col-sm-6 col-md-4">
                    <div class="icon-boxes style1">
                        <div class="icon">
                            <i class="glyphicon glyphicon-globe text-primary"></i>
                        </div><!-- end icon -->
                        <div class="box-content">
                            <h5 class="text-primary">ชวนเพื่อนใช้เพ็ทวิเลจ</h5>
                        </div>
                    </div><!-- icon-box -->
                </div><!-- end col -->
                <div class="col-sm-6 col-md-4">
                    <div class="icon-boxes style1">
                        <div class="icon">
                            <i class="glyphicon glyphicon-comment text-primary"></i>
                        </div><!-- end icon -->
                        <div class="box-content">
                            <h5 class="text-primary">จัดการรีวิว</h5>
                        </div>
                    </div><!-- icon-box -->
                </div><!-- end col -->


            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <hr class="spacer-30 no-border">

    <!-- start section -->
    <section class="section light-backgorund">
        <div class="container">


            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="box-info">
                        <a href="javascript:void(0);">
                            <div class="box-info-inner">

                                <h6 class="alt-font">Help?</h6>

                            </div>
                        </a>
                    </div><!-- end box-info -->
                </div><!-- end col -->
                <div class="col-md-6 col-sm-6">
                    <div class="box-info">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <div class="box-info-inner">

                                <h6 class="alt-font"> {{ __('Logout') }}</h6>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </a>
                    </div><!-- end box-info -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div>

        <hr class="spacer-30 no-border">

        <section class="section light-backgorund">
            <div class="container">

            </div><!-- end container -->
        </section>

@stop 
