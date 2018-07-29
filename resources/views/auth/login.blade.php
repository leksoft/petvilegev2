<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="esandev.com">
        <meta name="author" content="esandev.com">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('material/images/favicon.ico') }}">

        <title>OPEN21 - Admininstrators</title>

        <link href="{{ asset('material/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />

        <link href="{{ asset('material/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('material/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('material/css/style.css') }}" rel="stylesheet" type="text/css">

        <script src="{{ asset('material/js/modernizr.min.js') }}"></script>

    </head>
    <body>

        <div class="wrapper-page">

            <div class="text-center">
                <a href="#" class="logo-lg"><i class="mdi mdi-radar"></i> <span>{{ __('OPEN21 Marketplace') }}</span> </a>
            </div>

            <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-text-custom"><i class="mdi mdi-account"></i></span>
                            </div>
                            <input class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" id="login" type="text" required="" placeholder="Username" name="login" value="{{ old('username') ?: old('email') }}" required autofocus>
                            @if ($errors->has('username') || $errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-text-custom"><i class="mdi mdi-key"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12 m-t-10">
                        <div class="m-l-15">
                            <div class="checkbox checkbox-primary">
                                    <input type="checkbox" id="checkbox-signup"  name="remember" {{ old('remember') ? 'checked' : '' }}> 
                         
                                <label for="checkbox-signup">
                                        {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group text-right m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">{{ __('Login') }}
                        </button>
                    </div>
                </div>

                <div class="form-group row m-t-30">
                    <div class="col-sm-7">
                        <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i>  {{ __('Forgot Your Password?') }}</a>
                    </div>
                    <div class="col-sm-5 text-right">
                        <a href="#" class="text-muted">Create an account</a>
                    </div>
                </div>
            </form>
        </div>


        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="{{ asset('material/js/jquery.min.js') }}"></script>
        <script src="{{ asset('material/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
        <script src="{{ asset('material/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('material/js/detect.js') }}"></script>
        <script src="{{ asset('material/js/fastclick.js') }}"></script>
        <script src="{{ asset('material/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('material/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('material/js/waves.js') }}"></script>
        <script src="{{ asset('material/js/wow.min.js') }}"></script>
        <script src="{{ asset('material/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('material/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('material/plugins/switchery/switchery.min.js') }}"></script>

        <!-- Custom main Js -->
        <script src="{{ asset('material/js/jquery.core.js') }}"></script>
        <script src="{{ asset('material/js/jquery.app.js') }}"></script>
	
	</body>
</html>