@extends('includes.dashboard-header')
@section('title')
    CRYPTOWEALTH LIMITED - ACCOUNT SETTINGS
@endsection
@section('extrastyle')
<style>
    .form-control::-moz-placeholder {
    color: #DDDDDD;
    opacity: 1;
    filter: alpha(opacity=100); }

    .form-control:-moz-placeholder {
    color: #DDDDDD;
    opacity: 1;
    filter: alpha(opacity=100); }

    .form-control::-webkit-input-placeholder {
    color: #DDDDDD;
    opacity: 1;
    filter: alpha(opacity=100); }

    .form-control:-ms-input-placeholder {
    color: #DDDDDD;
    opacity: 1;
    filter: alpha(opacity=100); }

    .form-control {
    background-color: transparent !important;
    border: 1px solid #E3E3E3 !important;
    border-radius: 30px !important;
    color: #2c2c2c !important;
    line-height: 1em !important;
    font-size: 0.8571em !important;
    -webkit-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out !important;
    -moz-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out !important;
    -o-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out !important;
    -ms-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out !important;
    transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
        font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;}
    .has-success .form-control {
    border-color: #E3E3E3; }
    .form-control:focus {
    border: 1px solid #f96332 !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline: 0 !important;
    color: #2c2c2c !important; }
    .form-control:focus + .input-group-addon, .form-control:focus ~ .input-group-addon {
    border: 1px solid #f96332;
    border-left: none;
    background-color: transparent; }
    .has-success .form-control, .has-error .form-control, .has-success .form-control:focus, .has-error .form-control:focus {
    -webkit-box-shadow: none;
    box-shadow: none; }
    .has-danger .form-control.form-control-success, .has-danger .form-control.form-control-danger, .has-success .form-control.form-control-success, .has-success .form-control.form-control-danger {
    background-image: none; }
    .has-danger .form-control {
    background-color: #ffcfcf;
    border-color: #ffcfcf;
    color: #FF3636; }
    .has-danger .form-control:focus {
    background-color: rgba(222, 222, 222, 0.3); }
    .form-control + .form-control-feedback {
    border-radius: 0.25rem;
    font-size: 14px;
    margin-top: -7px;
    position: absolute;
    right: 10px;
    top: 50%;
    vertical-align: middle; }
    .open .form-control {
    border-radius: 0.25rem 0.25rem 0 0;
    border-bottom-color: transparent; }
    .form-control + .input-group-addon {
    background-color: #FFFFFF; }

    .has-success:after, .has-danger:after {
    font-family: 'Nucleo Outline';
    content: "\ecf0";
    display: inline-block;
    position: absolute;
    right: 35px;
    top: 12px;
    color: #18ce0f;
    font-size: 11px; }
    .has-success.input-lg:after, .has-danger.input-lg:after {
    font-size: 13px;
    top: 13px; }

    .has-danger:after {
    content: "\ed2b";
    color: #FF3636; }
    .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
        background-color: #E3E3E3 !important;
        color: #B8B8B8;
        cursor: not-allowed ; }
    .form-group {
        margin-bottom: 0 !important;
    }
    .alert {
        border: 0;
        border-radius: 0;
        color: #FFFFFF !important;
        padding-top: .9rem;
        padding-bottom: .9rem; }
    .alert.alert-success {
        background-color: rgba(24, 206, 15, 0.8); }
    .alert.alert-danger {
        background-color: rgba(255, 54, 54, 0.8); }
    .alert.alert-warning {
        background-color: rgba(255, 178, 54, 0.8); }
    .alert.alert-info {
        background-color: rgba(44, 168, 255, 0.8); }
    .alert.alert-primary {
        background-color: rgba(249, 99, 50, 0.8); }
    .alert .alert-icon {
        display: block;
        float: left;
        margin-right: 15px;
        margin-top: -1px; }
    .alert strong {
        text-transform: uppercase;
        font-size: 12px; }
    .alert i.fa, .alert i.now-ui-icons {
        font-size: 20px; }
    .alert .close {
        color: #FFFFFF ;
        opacity: .9;
        text-shadow: none;
        line-height: 0;
        outline: 0; }
    .alert i.now-ui-icons {
        font-size: 20px !important;
    }

    /*------------------------
        base class definition
    -------------------------*/
    .now-ui-icons {
        display: inline-block;
        font: normal normal normal 14px/1 'Nucleo Outline';
        font-size: inherit;
        speak: none;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .now-ui-icons.ui-2_like:before {
        content: "\ea37";
    }
    .now-ui-icons.ui-1_bell-53:before {
        content: "\ecda";
    }
    .now-ui-icons.ui-1_simple-remove:before {
        content: "\ed2b";
    }
    .alert .container {
        width: inherit;
    }
    .alert strong {
        text-transform: uppercase;
        font-size: 14px !important;
        color: #ffffff !important;
    }
</style>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
@endsection
@section('body')

    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            @include('includes.dashboard-sidebar')
        </div>
        <div class="main-panel">
            @include('includes.dashboard-nav')
            <div class="content" id="content">
                @include('flash::message')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="assets/img/background.jpg" alt="..."/>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <img class="avatar border-white" src="assets/img/faces/face-2.jpg" alt="..."/>
                                        <h4 class="title">{{ Auth::user()->fullname }}<br />
                                            <a href="#"><small>&commat;{{Auth::user()->username }}</small></a>
                                        </h4>
                                    </div>

                                </div>
                                <hr>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-md-3 col-md-offset-1">
                                            <h5>12<br /><small>Files</small></h5>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>2GB<br /><small>Used</small></h5>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>24,6$<br /><small>Spent</small></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Edit Profile</h4>
                                </div>
                                <div class="content">
                                    <form method="post" action="{{ url('account-settings') }}">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>ACCOUNT USERNAME</label>
                                                    <input type="text" class="form-control border-input" disabled placeholder="Username" value="{{ Auth::user()->username }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>REGISTRATION DATE</label>
                                                    <input type="text" style="text-transform: uppercase" class="form-control border-input" disabled placeholder="Registration Date" value="{{ Auth::user()->created_at->format('M-d-Y H:i:s') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>ACCOUNT FULLNAME</label>
                                                    <input type="text" name="fullname" class="form-control border-input" placeholder="Fullname" value="{{ Auth::user()->fullname }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>NEW PASSWORD</label>
                                                    <input type="password" name="password" class="form-control border-input" placeholder="New password" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>CONFIRM PASSWORD</label>
                                                    <input type="password" name="confirm_password" class="form-control border-input" placeholder="Confirm password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>ACCOUNT COUNTRY</label>
                                                    <input type="text" disabled class="form-control border-input" placeholder="Account country" value="{{ Auth::user()->country }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>BITCOIN ADDRESS</label>
                                                    <input type="text" disabled class="form-control border-input" placeholder="Bitcoin address" value="{{ Auth::user()->bitcoin }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>EMAIL ADDRESS</label>
                                                    <input type="text" disabled class="form-control border-input" placeholder="E-mail address" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script> <a href="">CRYPTOWEALTH Ltd.</a>, made with <i class="fa fa-heart heart"></i> by <a href="http://facebook.com/siegfred.pags">Siegfred Pagador</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
@section('extrajs')
<script type="text/javascript">
    $(document).ready(function() {
        $('.navbar-brand').html('Account Settings');
        $('#account-settings').addClass('active');

        $('form').on('submit', function(e) {
            if ($('input[name="fullname"]').val() == '') {
                $('#content').prepend(
                    '<div class="alert alert-warning" role="alert"> <div class="container"> <div class="alert-icon"> <i class="now-ui-icons ui-1_bell-53"></i> </div> Please check your full name.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"> <i class="now-ui-icons ui-1_simple-remove"></i> </span> </button> </div> </div>'
                );
                $('input[name="fullname"]').focus();
                return false;
            }
            if ($('input[name="password"]').val()!='' && ($('input[name="password"]').val().length<8 || $('input[name="password"]').val() != $('input[name="confirm_password"]').val())) {
                $('#content .alert').remove();
                $('#content').prepend(
                    '<div class="alert alert-warning" role="alert"> <div class="container"> <div class="alert-icon"> <i class="now-ui-icons ui-1_bell-53"></i> </div> Please check your password. <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"> <i class="now-ui-icons ui-1_simple-remove"></i> </span> </button> </div> </div>'
                );
                $('input[name="password"]').focus();
                return false;
            }
            return true;
        });
    });
</script>
<script src="{{ asset('assets/js/now-ui-kit.js') }}" type="text/javascript"></script>
@endsection