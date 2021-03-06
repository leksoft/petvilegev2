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

                    
                </div><!-- end col -->
                <!-- end sidebar -->
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <h2 class="title">บัญชีผู้ใช้</h2>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    
                    <hr class="spacer-5"><hr class="spacer-20 no-border">
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-10 col-lg-12">
                          
                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                    <label for="name" class="col-sm-4 control-label">ชื่อ</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control input-lg" id="firstname"  name = "firstname" placeholder="ชื่อ" value = "{{ $user->profile->firstname }}">
                                      @if ($errors->has('firstname'))
                                        <span class="text-danger" role="alert">
                                            {{ $errors->first('firstname') }}
                                        </span>
                                      @endif
                                    </div>
                                </div><!-- end form-group -->
                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <label for="name" class="col-sm-4 control-label">นามสกุล</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control input-lg" id="lastname"  name = "lastname" placeholder="นามสกุล" value = "{{ $user->profile->lastname }}">
                                          @if ($errors->has('lastname'))
                                            <span class="text-danger" role="alert">
                                                {{ $errors->first('lastname') }}
                                            </span>
                                          @endif
                                        </div>
                                </div><!-- end form-group -->
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label for="phone" class="col-sm-4 control-label">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control input-lg" id="phone" name = "phone" placeholder="เบอร์โทรศัพท์มือถือ" value="{{ $user->profile->phone }}">
                                          @if ($errors->has('phone'))
                                          <span class="text-danger" role="alert">
                                              {{ $errors->first('phone') }}
                                          </span>
                                        @endif
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

                             
                            </div>

                               
                                <div class="form-group">
                                        <label for="submit" class="col-sm-4 control-label"> </label>
                                        <div class="col-sm-8">
                                        <button class="btn btn-success round btn-md" type="submit">บันทึกข้อมูล</button>
                                    </div>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                        <label for="socail" class="col-sm-4 control-label"></label>
                                    <div class="col-sm-8">
                                            <h6>การเชื่อมต่อบัญชี</h6>
                                            เชื่อมต่อ 
                                            <a href="javascript:void(0);" class="btn btn-facebook btn-md"><i class="fa fa-google-plus mr-10"></i>Facebook</a>
                                            <hr/>
                                            เชื่อมต่อ 
                                            <a href="javascript:void(0);" class="btn btn-google-plus btn-md"><i class="fa fa-google-plus mr-10"></i>Google Plus</a>

                                    </div>
                                </div>
                                
                                    
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