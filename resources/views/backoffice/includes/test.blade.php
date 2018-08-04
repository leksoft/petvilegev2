
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
