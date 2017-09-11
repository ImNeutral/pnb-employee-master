@extends('includes.login-header')
@section('title')LOGIN - CRYPTOWEALTH LIMITED @endsection
@section('body')
    <body class="landing-page landing-page1">
    @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="now-ui-icons ui-1_bell-53"></i>
                </div>
                <strong>Warning!</strong> These credentials do not match our records.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </span>
                </button>
            </div>
        </div>
    @endif
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-centered">
                    <a href="{{ url('/') }}">
                        <div class="logo-container">
                            <div class="logo">
                                <img src="{{ asset('assets/img/logo-red.png') }}" alt="CRYPTOWEALTH LIMITED">
                            </div>
                        </div>
                    </a>
                    <h3 class="des">Login Account</h3>

                    <form method="post" action="{{ url('login') }}" autocomplete="false" >
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group {{ ($errors->has('username')) ? 'has-danger' : '' }} {{ (count($errors) > 0 && !$errors->has('username')) ? 'has-success' : '' }}"">
                                    <label>Username</label>
                                    <input tabindex="1" type="text" name="username" value="{{ old('username') }}" autocomplete="new-password" value="{{ old('username') }}" class="form-control {{ ($errors->has('username')) ? 'form-control-danger' : '' }}" placeholder="Username" required oninvalid="this.setCustomValidity('Please enter your username.')" oninput="setCustomValidity('')">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input tabindex="3" type="password" name="password" autocomplete="new-password" class="form-control" placeholder="Password" required oninvalid="this.setCustomValidity('Please enter your desired password.')" oninput="setCustomValidity('')">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-round w100" type="button">LOGIN</button>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div>
                                    <center>Need an account? <a href="{{ url('signup') }}">Signup</a></center>
                                </div>
                                <div>
                                    <center><a href="{{ url('forgot-password') }}">Forgot password</a></center>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="copyright">
                        Copyright &copy; 2017 <a href="{{ url('/') }}">CRYPTOWEALTH Ltd.</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </body>
@endsection