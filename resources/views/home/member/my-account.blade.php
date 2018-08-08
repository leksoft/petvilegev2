@extends('layouts.home')

@section('content')
    <!-- start section -->
    <section class="section light-backgorund">
        <div class="container">


            <div class="row">
                <div class="col-sm-4">
                   
                            <div class="icon-boxes style1">
                                    <div class="icon">
                                            <img class="my-account-img" src="{{ asset('frontend/img/team/team_01.jpg') }}"/>
                                    </div><!-- end icon -->
                                    <div class="box-content">
                                        <h6 class="thin">{{ Auth::user()->firstname ." ". Auth::user()->lastname }}</h6>
                                        <a href="{{ url('edit-profile/'.Auth::id()) }}"
                                        class="btn btn-info round btn-md">ข้อมูลบัญชี</a>
                                    </div>
                                </div><!-- icon-box -->

                       
                  
                </div><!-- end col -->
                <div class="col-sm-4">
                    <div class="icon-boxes style1">
                        <div class="icon">
                        <img src = "{{ asset('frontend/img/memberdashboard/wallet.png') }}" width="64px" height="64px">
                        </div><!-- end icon -->
                        <div class="box-content">
                            <h6 class="thin">วอเลต(บาท)</h6>
                            <h5 class="">2000.00</h5>
                            <h6 class="text-info">เติมเงินวอเล็ต</h6>
                        </div>
                    </div><!-- icon-box -->
                </div><!-- end col -->
                <div class="col-sm-4">
                        <div class="icon-boxes style1">
                                <div class="icon">
                                <img src = "{{ asset('frontend/img/memberdashboard/rewardPoint.png') }}" width="64px" height="64px">
                                </div><!-- end icon -->
                                <div class="box-content">
                                    <h6 class="thin">แต้มสะสม</h6>
                                    <h5 class="">450.00</h5>
                                    <h6 class="text-info">แลกแต้ม</h6>
                                </div>
                            </div><!-- icon-box -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="section white-backgorund">
        <div class="container">
            <div class="row column-3">
                <div class="col-sm-6 col-md-4" >
                        <div class="icon-boxes style1">
                                <div class="icon">
                                <img src = "{{ asset('frontend/img/memberdashboard/favShop.png') }}" width="64px" height="64px">
                                </div><!-- end icon -->
                                <div class="box-content">
                                        <h6>ร้านค้าที่ติดตาม</h6>
                                        <span class="text-info">14 รายการ</span><br/><br/>
                                </div>
                        </div><!-- icon-box -->
                </div><!-- end col -->
                <div class="col-sm-6 col-md-4">
                        <div class="icon-boxes style1">
                                <div class="icon">
                                <img src = "{{ asset('frontend/img/memberdashboard/favDealCoupon.png') }}" width="64px" height="64px">
                                </div><!-- end icon -->
                                <div class="box-content">
                                        <h6>ดีลและคูปองที่ชื่นชอบ</h6>
                                        <span class="text-info">7 รายการ</span>
                                </div>
                            </div><!-- icon-box -->
                </div><!-- end col -->
                <div class="col-sm-6 col-md-4">
                        <div class="icon-boxes style1">
                                <div class="icon">
                                <img src = "{{ asset('frontend/img/memberdashboard/myDealCoupon.png') }}" width="64px" height="64px">
                                </div><!-- end icon -->
                                <div class="box-content">
                                        <h6>ดีลและคูปองของฉัน</h6>
                                        <span class="text-info">1 รายการ</span>
                                </div>
                            </div><!-- icon-box -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="spacer-30 no-border">
            <div class="row column-3">
                    <div class="col-sm-6 col-md-4">
                            <div class="icon-boxes style1">
                                    <div class="icon">
                                    <img src = "{{ asset('frontend/img/memberdashboard/newShop.png') }}" width="64px" height="64px">
                                    </div><!-- end icon -->
                                    <div class="box-content">
                                            <h6>แนะนำร้านใหม่</h6>
                                    </div>
                                </div><!-- icon-box -->
                    </div><!-- end col -->
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-boxes style1">
                                <div class="icon">
                                <img src = "{{ asset('frontend/img/memberdashboard/inviteFriend.png') }}" width="64px" height="64px">
                                </div><!-- end icon -->
                                <div class="box-content">
                                        <h6>ชวนเพื่อนใช้เพ็ทวิเลจ</h6>
                                        <span>ชวนเพื่อนใช้ให้เลย 150  บาท</span>
                                </div>
                            </div><!-- icon-box -->
                    </div><!-- end col -->
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-boxes style1" >
                                <div class="icon">
                                <img src = "{{ asset('frontend/img/memberdashboard/review.png') }}" width="64px" height="64px">
                                </div><!-- end icon -->
                                <div class="box-content">
                                    <h6>จัดการรีวิว</h6>
                                    <span class="text-info">8 รายการ</span>
                                </div>
                            </div><!-- icon-box -->
                    </div><!-- end col -->
                    <hr class="spacer-30 no-border">
        </div><!-- end container -->
    </section>
    
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


        </section>

@stop 
