  <!-- Modal Login -->
  <div class="modal fade account loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row display-table text-center">
                    <div class="col-sm-6 vertical-align">
                        <div class="inner-content">
                            <h3>Login</h3>
                            <p class="lead">to your account</p>

                            <hr class="spacer-5 no-border">
                            <form class="" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                @csrf
                            <div class="form-group">

                                <input class="form-control input-lg{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" id="login" type="text" required="" placeholder="Username" name="login" value="{{ old('username') ?: old('email') }}" required autofocus>
                                @if ($errors->has('username') || $errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <input id="password" type="password" class="form-control input-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            </div><!-- end form-group -->
                            <div class="form-group text-left">
                                <div class="checkbox-input mb-10 pull-left">
                         
                                    <input type="checkbox" class="styled" id="checkbox-signup"  name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                    <label for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div><!-- end checkbox-input -->
                                <label class="pull-right"><a href="forgot-password.html">Forgot Password</a></label>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <input type="submit" class="btn btn-default btn-block round btn-lg" value="Log In">
                            </div><!-- end form-group -->
                        </form>
                            <div class="or">or</div>

                        </div><!-- inner-content -->

                    </div><!-- end col -->

                    <div class="col-sm-6 vertical-align image-background layer-dark" style="background-image: url('{{ asset('frontend/img/234.jpg') }}');">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        <div class="inner-content">
                            <h3 class="text-white">Sign in</h3>
                            <p class="lead text-white">with one of your social profiles</p>

                            <ul class="social-icons style2">
                                <li class="facebook"><a class="semi-circle" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a class="semi-circle" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a class="semi-circle" href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                            </ul>

                            <hr class="spacer-10 no-border"/>

                            <p>Don't have an account? <a href="#" class="text-white" data-toggle="modal" data-target=".registerModal">Register</a></p>

                        </div><!-- end inner-content -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end loginModal -->
 <!-- Modal Register -->
 <div class="modal fade account registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row display-table text-center">
                        <div class="col-sm-6 vertical-align">
                            <div class="inner-content">
                                <h3>Register</h3>
                                <p class="lead">Create an account</p>

                                <hr class="spacer-5 no-border">
                                <form method="POST" action="{{ route('member-create') }}" aria-label="{{ __('Register') }}">
                                    @csrf
                                <div class="form-group">
                         
                                    <input id="name" type="text" placeholder="ชื่อ-นามสกุล" class="form-control input-lg{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="อีเมล"class="form-control input-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <input id="password" type="password" placeholder="รหัสผ่าน" class="form-control input-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div><!-- end form-group -->
                                <div class="form-group">
                                        <input id="password-confirm" placeholder="ยืนยันรหัสผ่าน"  type="password" class="form-control input-lg" name="password_confirmation" required>
                                </div><!-- end form-group -->
                               
                                <div class="form-group">
                                    <input type="submit" class="btn btn-default btn-block round btn-lg" value="สมัครสมาชิก">
                                </div><!-- end form-group -->
                            </form>
                                <div class="or hidden-xs">or</div>

                            </div><!-- inner-content -->

                        </div><!-- end col -->

                        <div class="col-sm-6 vertical-align image-background layer-dark" style="background-image: url('{{ asset('frontend/img/234.jpg') }}');">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            <div class="inner-content">
                                <h3 class="text-white">Sign Up</h3>
                                <p class="lead text-white">with one of your social profiles</p>

                                <ul class="social-icons style2">
                                    <li class="facebook"><a class="semi-circle" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a class="semi-circle" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li class="google-plus"><a class="semi-circle" href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                </ul>

                                <hr class="spacer-10 no-border"/>

                                <p>Do you have an account? <a href="#" class="text-white"  data-toggle="modal" data-target=".loginModal">Log In</a></p>

                            </div><!-- end inner-content -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end modal-body -->
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end registerModal -->