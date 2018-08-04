@extends('layouts.partner.template-partner')
@section('content')
<div class="wrapper">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group pull-right">
                            
                        </div>
                        <h4 class="page-title">Account</h4>
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->


            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card">
                            <div class="thumb-xl member-thumb m-b-10 center-block">
                                    @if($user->profile->avatar == NULL)
                                    <img src="{{ asset('partner/images/users/nopic.png') }}" class="rounded-circle img-thumbnail" alt="profile-image" width="180px">
                                    @else
                                    <img src="{{ asset('uploads/profiles/resize/'.$user->profile->avatar) }}" class="rounded-circle img-thumbnail" alt="profile-image" width="180px">

                                    @endif

                            
                            </div>

                            <div class="">
                            <h5 class="m-b-5">{{ Auth::user()->profile->firstname ." ".Auth::user()->lastname}}</h5>
                                <p class="text-muted">{{ Auth::user()->email }}</p>
                            </div>

            
                            <div class="text-left m-t-40">
                                <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{ Auth::user()->profile->firstname ." ".Auth::user()->lastname}}</span></p>

                                <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{ Auth::user()->tel }}</span></p>

                                <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{ Auth::user()->email }}</span></p>

                                <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">Thailand</span></p>
                            </div>

                           

                        </div>

                    </div> <!-- end card-box -->

                    <div class="card-box">
                        <h4 class="m-t-0 m-b-20 header-title">ยืนยันบัตรประจำตัวประชาชน</h4>

                        <div class="p-b-10">
                           
                            @if(Auth::user()->verify_id_card_file == NULL)
                            <div class="alert alert-danger" role="alert">
                                    <p>ยังไม่ยืนยัน</p>
                            </div>
                            @else
                                @if(Auth::user()->status == 0)
                                    <h4 class="text-danger">  ยังไม่ยืนยันตัวตน </h4>
                                @elseif(Auth::user()->status == 1)
                                    <h4 class="text-success">  อนุมัติ </h4>
                                @elseif(Auth::user()->status == 2)
                                <h4 class="text-warning">  อยู่ในระหว่างการตรวจสอบ </h4>
                                @endif
                            @endif
                        </div>
                        <h4 class="m-t-0 m-b-20 header-title">ยืนยันบัญชีธนาคาร</h4>

                        <div class="p-b-10">
                          
                                @if(Auth::user()->verify_bank_file == NULL)
                                <div class="alert alert-danger" role="alert">
                                        <p>ยังไม่ยืนยัน</p>
                                </div>
                                @else
    
                                    @if(Auth::user()->status == 0)
                                        <h4 class="text-danger">  ยังไม่ยืนยันตัวตน </h4>
                                    @elseif(Auth::user()->status == 1)
                                        <h4 class="text-success">  อนุมัติ </h4>
                                    @elseif(Auth::user()->status == 2)
                                    <h4 class="text-warning">  อยู่ในระหว่างการตรวจสอบ </h4>
                                    @endif
                                @endif
                        </div>
                    </div>

                </div> <!-- end col -->


                <div class="col-lg-8 col-xl-9">
                    <div class="">

                        <div class="card-box">
                            <ul class="nav nav-tabs tabs-bordered">
                               
                               
                                <li class="nav-item">
                                    <a href="#member" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                        ข้อมูลสมาชิก
                                    </a>
                                </li>
                                <li class="nav-item">
                                        <a href="#verify" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            ยืนยันบัญชี
                                        </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                    <div class="tab-pane active" id="member">
                                           
        <form action="{{ url('partner/update/'.$user->id) }}" method = "post" class="form-horizontal form-bordered" enctype ="multipart/form-data">
            <input type = "hidden" name = "user_id" value ="{{ $user->id }}"/>
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }} 
                    <div class="row">
                        <div class="col-sm-12 col-md-10 col-lg-12">
                      
                                <div class="form-group">
                                            <label for="name" class="col-sm-4 control-label">ภาพโปรไฟล์</label>
                                            <div class="col-sm-8">
                                        
                                            <input type="file" name = "avatar" />
                                        
                                            </div>
                                </div><!-- end form-group -->
                                
                                <div class="form-group">
                                    <label for="name" class="col-sm-4 control-label">ชื่อที่ใช้แสดง</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-lg" id="name"  name = "name" placeholder="ชื่อ - นามสกุล" value = "{{ $user->name }}">
                                    </div>
                                </div><!-- end form-group -->
                                <div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <label for="firstname" class="col-sm-4 control-label">ชื่อ <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-lg" id="firstname"  name = "firstname" placeholder="ชื่อ" value = "{{ $user->profile->firstname }}">
                                    @if ($errors->has('firstname'))
                                        <span class="text-danger" role="alert">
                                    {{ $errors->first('firstname') }}
                                        </span>
                                    @endif
                                        </div>
                                </div><!-- end form-group -->
                                <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                            <label for="lastname" class="col-sm-4 control-label">นามสกุล</label>
                                            <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-lg" id="lastname"  name = "lastname" placeholder="นามสกุล" value = "{{ $user->profile->lastname }}">
                                            @if ($errors->has('lastname'))
                                            <span class="text-danger" role="alert">
                                        {{ $errors->first('lastname') }}
                                            </span>
                                        @endif
                                            </div>
                                </div><!-- end form-group -->
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-sm-4 control-label">อีเมล <span class="text-danger">*</span></label>
                                    <div class="col-sm-6">
                                    <input type="email" class="form-control form-control-lg" id="email" name = "email" placeholder="อีเมล" value="{{ $user->email }}">
                                    @if ($errors->has('email'))
                                    <span class="text-danger" role="alert">
                                {{ $errors->first('email') }}
                                    </span>
                                @endif
                                    </div>
                                </div><!-- end form-group -->

                                <div class="form-group">
                                        <label for="birthdate" class="col-sm-4 control-label">วันเดือนปีเกิด(05/05/2528) <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-lg" id="birthdate" name = "birthdate" placeholder="วันเดือนปีเกิด(05/05/2528)" value="{{ $user->profile->birthdate }}">
                                        </div>
                                </div><!-- end form-group -->

                                    
                                <div class="form-group">
                                        <label for="sex" class="col-sm-4 control-label">เพศ </label>
                                        <div class="col-sm-6">
                                                <select class="form-control form-control-lg" name="sex">
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
                                            <textarea id="address" rows="5" name = "address" class="form-control form-control-lg" placeholder="ที่อยู่ปัจจุบัน">{{ $user->profile->address }}</textarea>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="mailaddress" class="col-sm-4 control-label">ที่อยู่สำหรับจัดส่ง </label>
                                    <div class="col-sm-8">
                                        <textarea id="mailaddress" name = "mailaddress" rows="5" class="form-control form-control-lg" placeholder="ที่อยู่สำหรับจัดส่ง">{{ $user->profile->mailaddress }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label for="phone" class="col-sm-4 control-label">เบอร์โทรศัพท์มือถือ <span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-lg" id="phone" name = "phone" placeholder="เบอร์โทรศัพท์มือถือ" value="{{ $user->profile->phone }}">
                                        </div>
                                </div><!-- end form-group -->
                                    
                            

                            
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn btn-danger btn-custom waves-effect w-md waves-light m-b-5" type="submit">แก้ไขข้อมูล</button>
                                    </div>
                                </div><!-- end form-group -->
                        </div>
                    </div>
                            </form>

                                    </div>
                                    <div class="tab-pane" id="verify">
                                           
                                           
                        
                                            <form action="{{ url('partner/verify/'.$user->id) }}" method = "post" class="form-horizontal form-bordered" enctype ="multipart/form-data">
                                                <input type = "hidden" name = "user_id" value ="{{ $user->id }}"/>
                                                        {{ csrf_field() }}
                                                        {{ method_field('PATCH') }} 
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10 col-lg-12">
                                                                    <div class="card m-b-20 text-xs-center">
                                                                            <div class="card-header">
                                                                                    ยืนยันเจ้าของ - สำเนาบัตรประชาชนของเจ้าของร้านหรือหนังสือรับรองบริษัทที่เป็นเจ้าของร้าน
                                                                            </div>
                                                                            <div class="card-body">
                                                                                    <div class="form-group">
                                                                                            <label for="verify_id_card_file" class="col-sm-4 control-label">รูปถ่ายบัตรประจำตัวประชาชน</label>
                                                                                            <div class="col-sm-8">
                                                                                        
                                                                                            <input type="file" name = "verify_id_card_file" />
                                                                                        
                                                                                            </div>
                                                                                </div><!-- end form-group -->
                                                            
                                                                                <div class="form-group {{ $errors->has('id_card') ? ' has-error' : '' }}">
                                                                                        <label for="id_card" class="col-sm-4 control-label">เลขบัตรประจำตัวประชาชน <span class="text-danger">*</span></label>
                                                                                        <div class="col-sm-6">
                                                                                        <input type="text" class="form-control form-control-lg" id="id_card"  name = "id_card" placeholder="เลขบัตรประจำตัวประชาชน" value = "{{ $user->profile->id_card }}">
                                                                                    @if ($errors->has('id_card'))
                                                                                        <span class="text-danger" role="alert">
                                                                                    {{ $errors->first('id_card') }}
                                                                                        </span>
                                                                                    @endif
                                                                                        </div>
                                                                                </div><!-- end form-group -->
                                                                            </div>
                                                                            <div class="card-footer text-muted">
                                                                              
                                                                            </div>
                                                                        </div>
                                                                        <div class="card m-b-20 text-xs-center">
                                                                                <div class="card-header">
                                                                                        ยืนยันบัญชีธนาคาร - สำเนาหน้าสมุดบัญชีธนาคาร ทุกธนาคารที่ลงไว้ในร้าน (ถ้าชื่อเจ้าของบัญชีไม่ตรงกับชื่อเจ้าของร้านให้แนบสำเนาบัตรประชาชนหรือหนังสือรับรองของเจ้าของบัญชีมาด้วย)
                                                                                </div>
                                                                                <div class="card-body">
                                                                                        <div class="form-group">
                                                                                                <label for="verify_bank_file" class="col-sm-4 control-label">หน้า Book Bank บัญชีธนาคาร</label>
                                                                                                <div class="col-sm-8">
                                                                                            
                                                                                                <input type="file" name = "verify_bank_file" />
                                                                                            
                                                                                                </div>
                                                                                    </div><!-- end form-group -->
                                                                
                                                                                    <div class="form-group {{ $errors->has('bank_no') ? ' has-error' : '' }}">
                                                                                            <label for="bank_no" class="col-sm-4 control-label">เลขบัญชีธนาคาร <span class="text-danger">*</span></label>
                                                                                            <div class="col-sm-6">
                                                                                            <input type="text" class="form-control form-control-lg" id="id_card"  name = "id_card" placeholder="เลขบัญชีธนาคาร" value = "{{ $user->profile->bank_no }}">
                                                                                        @if ($errors->has('bank_no'))
                                                                                            <span class="text-danger" role="alert">
                                                                                        {{ $errors->first('bank_no') }}
                                                                                            </span>
                                                                                        @endif
                                                                                            </div>
                                                                                    </div><!-- end form-group -->
                                                                                </div>
                                                                                <div class="card-footer text-muted">
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                    <div class="col-sm-offset-2 col-sm-10">
                                                                                        <button class="btn btn-danger btn-custom waves-effect w-md waves-light m-b-5" type="submit">ยืนยันบัญชี</button>
                                                                                    </div>
                                                                                </div><!-- end form-group -->

                                                                    

                                                            </div>
                                                        </div>
                                            </form>

                                    </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
                                                         
    </div> <!-- end container -->
</div>
    <!-- end wrapper -->

@stop