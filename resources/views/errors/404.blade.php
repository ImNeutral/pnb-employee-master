@extends('includes.login-header')
@section('title')
    PAGE NOT FOUND | CRYPTOWEALTH LIMITED
@endsection
@section('body')
        <body class="landing-page landing-page1">
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
                        <h3 class="des">404 Page not found</h3>
                        <h4 class="des">The page you are trying to view does not exist.</h4>
                        <h4 class="des">Click <a href="{{ URL::previous() }}">here</a> to go back. </h4>
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
@endsection