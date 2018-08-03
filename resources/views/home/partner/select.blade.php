@extends('layouts.home')

@section('content')
 <!-- start section -->
 <section class="section white-backgorund">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 vertical-align">
                <h2 class="title">สมัครเป็น Partner กับ เพจวิเลจ</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            
                            <ul class="list list-unstyled list-inline">
                                <li><a href="{{ route('partner-select') }}" class="btn btn-google-plus round btn-lg">ฝากร้าน</a></li>
                                <li><a href="javascript:void(0);" data-toggle="modal" data-target=".loginModal" class="btn btn-linkedin round btn-lg">เข้าระบบ</a></li>
                              
                            </ul>
               
            </div><!-- end col -->
            <div class="col-sm-5 vertical-align">
                <figure class="zoom-in">
                <img src="{{ asset('frontend/img/partner/partner-1.jpg') }}" alt="">
                </figure>
            </div><!-- end col -->
        </div><!-- end row -->
        
    </div>
 </section>  
 <!-- start section -->
 <section class="section white-backgorund">
        <div class="container">
            <div class="row">
        
                <!-- end sidebar -->
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <h2 class="title">Sign in to your account</h2>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    
                    <hr class="spacer-5"><hr class="spacer-20 no-border">
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-10 col-lg-8">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="email" class="form-control input-md" id="email" placeholder="Email">
                                    </div>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control input-md" id="password" placeholder="Password">
                                    </div>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox-input mb-10">
                                            <input id="remember" class="styled" type="checkbox">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div><!-- end checkbox-input -->
                                    </div><!-- end col -->
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <label><a href="forgot-password.html">Forgot Password</a></label>
                                    </div>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <a href="javascript:void(0);" class="btn btn-default round btn-md"><i class="fa fa-lock mr-5"></i> Login</a>
                                    </div>
                                </div><!-- end form-group -->
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->                
        </div><!-- end container -->
    </section>
    <!-- end section -->

 <!-- start section -->
 <section class="info-background">
        <div class="container">
            <div class="box-banner-wide info-background">
                <div class="row">
                    <div class="col-sm-4 vertical-align">
                        <h2 class="alt-font text-uppercase text-white">
                                Lorem Ipsum 
                        </h2>
                    </div><!-- end col -->
                    <div class="col-sm-4 vertical-align">
                        <p class="mt-20">Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem.</p>
                    </div><!-- end col -->
                    <div class="col-sm-4 vertical-align text-right">
                    <a  href="{{ route('partner-select') }}" class="btn btn-google-plus round btn-lg">ฝากร้าน</a>
                    </div><!-- end col -->   
                </div><!-- end row -->
            </div><!-- end box-banner-wide -->
        </div><!-- end container -->
    </section>
    <!-- end section -->


@stop