@extends('layouts.home')
@section('css')
<link rel="stylesheet" href="{{ asset('frontend/js/components/dropify/dist/css/dropify.min.css') }}">
@endsection
@section('content')   
 <!-- start section -->
 <section class="section white-backgorund">
        <div class="container">
                @if(Session::has('success'))
                    <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>แก้ไขข้อมูลส่วนตัวเรียบร้อย!</strong>
                                </div><!-- end alert -->

                            </div>
                    </div>
                @endif
        <form action="{{ url('member/update/'.$user->id) }}" method = "post" class="form-horizontal form-bordered" enctype ="multipart/form-data">
            <input type = "hidden" name = "user_id" value ="{{ $user->id }}"/>
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }} 
            <div class="row">
                <!-- start sidebar -->
                <div class="col-sm-3">
                    <div class="widget">
                     
                    @if($user->profile->avatar == "nopic.jpg")
                        <input type="file" name = "avatar" id="input-file-now-custom-1" class="dropify" data-default-file="{{ asset('uploads/profiles/nopic.jpg') }}" />
                    @else
                        <input type="file" name = "avatar" id="input-file-now-custom-1" class="dropify" data-default-file="{{ asset('uploads/profiles/resize/'.$user->profile->avatar) }}" />
                    @endif
                       
                    </div><!-- end widget -->

                    เชื่อมต่อ 
                    <a href="javascript:void(0);" class="btn btn-facebook btn-md"><i class="fa fa-google-plus mr-10"></i>Facebook</a>
                    <hr/>
                    เชื่อมต่อ 
                    <a href="javascript:void(0);" class="btn btn-google-plus btn-md"><i class="fa fa-google-plus mr-10"></i>Google Plus</a>
                </div><!-- end col -->
                <!-- end sidebar -->
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <h2 class="title">แก้ไขข้อมูลส่วนตัว</h2>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    
                    <hr class="spacer-5"><hr class="spacer-20 no-border">
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-10 col-lg-12">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="name" class="col-sm-4 control-label">ชื่อ - นามสกุล</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control input-lg" id="name"  name = "name" placeholder="ชื่อ - นามสกุล" value = "{{ $user->name }}">
                                    </div>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label for="email" class="col-sm-4 control-label">อีเมล <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                      <input type="email" class="form-control input-lg" id="email" name = "email" placeholder="อีเมล" value="{{ $user->email }}">
                                    </div>
                                </div><!-- end form-group -->

                                <div class="form-group">
                                        <label for="birthdate" class="col-sm-4 control-label">วันเดือนปีเกิด(05/05/2528) <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control input-lg" id="birthdate" name = "birthdate" placeholder="วันเดือนปีเกิด(05/05/2528)" value="{{ $user->profile->birthdate }}">
                                        </div>
                                </div><!-- end form-group -->

                                    
                                <div class="form-group">
                                        <label for="sex" class="col-sm-4 control-label">เพศ </label>
                                        <div class="col-sm-8">
                                                <select class="form-control" name="sex">
                                                        <option>เลือกเพศ</option>
                                                        <option value = "ชาย"
                                                        @if($user->profile->sex == "ชาย")
                                                        selected
                                                    @endif
                                                        >ชาย</option>
                                                        <option value = "หญิง" 
                                                            @if($user->profile->sex == "หญิง")
                                                                selected
                                                            @endif
                                                        >หญิง</option>
                                                      
                                                </select>
                                        </div>
                                </div><!-- end form-group -->

                                <div class="form-group">
                                        <label for="address" class="col-sm-4 control-label">ที่อยู่ปัจจุบัน </label>
                                        <div class="col-sm-8">
                                            <textarea id="address" rows="5" name = "address" class="form-control" placeholder="ที่อยู่ปัจจุบัน">{{ $user->profile->address }}</textarea>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="mailaddress" class="col-sm-4 control-label">ที่อยู่สำหรับจัดส่ง </label>
                                    <div class="col-sm-8">
                                        <textarea id="mailaddress" name = "mailaddress" rows="5" class="form-control" placeholder="ที่อยู่สำหรับจัดส่ง">{{ $user->profile->mailaddress }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label for="phone" class="col-sm-4 control-label">เบอร์โทรศัพท์มือถือ <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control input-lg" id="phone" name = "phone" placeholder="เบอร์โทรศัพท์มือถือ" value="{{ $user->profile->phone }}">
                                        </div>
                                </div><!-- end form-group -->
                                    
                            </div>

                               
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn btn-default round btn-md" type="submit"><i class="fa fa-user mr-5"></i> บันทึกข้อมูลd</button>
                                    </div>
                                </div><!-- end form-group -->
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->      
        </form>          
        </div><!-- end container -->
    </section>
    <!-- end section -->


@stop
@section('js')
<script src="{{ asset('frontend/js/components/dropify/dist/js/dropify.min.js') }}"></script>
<script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();
        });
        </script>
@endsection