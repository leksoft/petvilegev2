@extends('layouts.partner.template-partner')
@section('content')
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                        @if(Auth::user()->status == 0)
                        สถานะสมาชิก<h4 class="text-danger">  ยังไม่ยืนยันตัวตน </h4>
                        @elseif(Auth::user()->status == 1)
                        สถานะสมาชิก<h4 class="text-success">  อนุมัติ </h4>
                        @elseif(Auth::user()->status == 2)
                        สถานะสมาชิก<h4 class="text-warning">  อยู่ในระหว่างการตรวจสอบ </h4>
                        @endif
                       
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
        
            <div class="col-lg-3 col-md-6">
                <div class="widget-simple text-center card-box">
                        <a href = "{{ route('partner.account')}}"><h3>บัญชีผู้ใช้</h3></a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="widget-simple text-center card-box">
                        <a href = "{{ route('partner.new-store')}}"><h3>สร้างร้านค้า</h3></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="widget-simple text-center card-box">
                   
                    <h3>สร้างดีล</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="widget-simple text-center card-box">
                    <h3>สร้างคูปอง</h3>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container -->
</div>
@stop
