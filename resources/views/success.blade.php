@extends('includes.login-header')
@section('title')
    Signup | CRYPTOWEALTH LIMITED
@endsection
@section('body')
    @if(!Session::has('success'))
        <script>window.location.assign('/')</script>
    @else
        <body class="landing-page landing-page1">
        <div class="alert alert-success" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="now-ui-icons ui-2_like"></i>
                </div>
                <strong>Well done!</strong> You are successfully registered to our system.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </span>
                </button>
            </div>
        </div>
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
                        <h3 class="des">Create an Account</h3>
                        <h4 class="des">Success! You have registered, please check your email for more instructions!</h4>
                        <h4 class="des">Click <a href="{{ url('login') }}">here</a> to login. </h4>
                    </form>

                    <div class="copyright">
                        Copyright &copy; 2017 <a href="{{ url('/') }}">CRYPTOWEALTH Ltd.</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </body>
        {{--<script src="{{ asset('assets/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/tether.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/awesome-landing-page.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/now-ui-kit.js') }}" type="text/javascript"></script>--}}
    @endif
@endsection