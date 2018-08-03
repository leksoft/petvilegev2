@extends('layouts.home')

@section('content')
    <!-- start section -->
    <section class="section white-backgorund">
        <div class="container">
            <div class="row">
                <!-- start sidebar -->

                <!-- end sidebar -->
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <h2 class="title">ฝากร้านกับเพจวิเลจ</h2>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="spacer-5">
                    <hr class="spacer-20 no-border">

                    <div class="row">
                        <div class="col-sm-12 col-md-10 col-lg-12">
                            <form method="POST" action="{{ route('company-store') }}" aria-label="{{ __('Create Partner') }}"
                                  class="form-horizontal">
                                @csrf
                                <div class="form-group{{ $errors->has('corporation_name') ? ' has-error' : '' }}">
                                        <label for="corporation_name" class="col-sm-2 control-label">ชื่อนิติบุคคล</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control input-md" id="corporation_name" name="corporation_name"
                                                   placeholder="ชื่อนิติบุคคล" value="{{ old('corporation_name') }}">
                                            @if ($errors->has('corporation_name'))
                                                <span class="help-block" role="alert">
                                                {{ $errors->first('corporation_name') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div><!-- end form-group -->

                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                    <label for="firstname" class="col-sm-2 control-label">ชื่อ</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control input-md" id="firstname" name="firstname"
                                               placeholder="ชื่อ" value="{{ old('firstname') }}">
                                        @if ($errors->has('firstname'))
                                            <span class="help-block" role="alert">
                                            {{ $errors->first('firstname') }}
                                        </span>
                                        @endif
                                    </div>
                                </div><!-- end form-group -->
                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <label for="lastname" class="col-sm-2 control-label">นามสกุล</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control input-md" id="lastname" name="lastname"
                                               placeholder="นามสกุล" value="{{ old('lastname') }}">
                                        @if ($errors->has('lastname'))
                                            <span class="help-block" role="alert">
                                                {{ $errors->first('lastname') }}
                                            </span>
                                        @endif
                                    </div>
                                </div><!-- end form-group -->

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-sm-2 control-label">อีเมล <span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control input-md" id="email" name="email"
                                               placeholder="อีเมล" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="help-block" role="alert">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>
                                </div><!-- end form-group -->

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-sm-2 control-label">รหัสผ่าน <span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control input-md" id="password" name = "password"
                                               placeholder="รหัสผ่าน">
                                        @if ($errors->has('password'))
                                            <span class="help-block" role="alert">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                    </div>
                                </div><!-- end form-group -->

                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">ยืนยันรหัสผ่าน <span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control input-md" id="password-confirm" name="password_confirmation"
                                               placeholder="ยืนยันรหัสผ่าน">
                                    </div>
                                </div><!-- end form-group -->

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" class="btn btn-default btn-block round btn-lg" value="สมัครสมาชิก">
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

@stop 
