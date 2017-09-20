@extends('includes.dashboard-header')
@include('vendor.employee.view-employee-details')
@section('title')
    Employee | Schedule
@endsection
@section('extrastyle')
    <link href="{{ asset('assets/css/extrastyle-employee.css') }}" rel="stylesheet" />
@endsection
@section('body')
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            @include('includes.dashboard-sidebar')
        </div>
        <div class="main-panel">
            @include('includes.dashboard-nav')
            <div class="content">
                <div class="card">
                    <div class="header">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <h4 class="title">Employee Schedule</h4>
                                <ol class="breadcrumb">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/employee') }}">Employees</a></li>
                                    <li class="active">Schedule</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <div class="container">
                            <dl class="dl-horizontal">
                                <dt>Monday</dt>
                                <dd id="monday"><input type="number" name="mondayMorning"> , 1pm-5pm</dd>

                                <dt>Tuesday</dt>
                                <dd id="tuesday">6am-11am, 1pm-5pm</dd>

                                <dt>Wednesday</dt>
                                <dd id="wednesday">6am-11am, 1pm-5pm</dd>

                                <dt>Thursday</dt>
                                <dd id="thursday">6am-11am, 1pm-5pm</dd>

                                <dt>Friday</dt>
                                <dd id="friday">6am-11am, 1pm-5pm</dd>

                                <dt>Saturday</dt>
                                <dd id="saturday">-- - --, -- - --</dd>

                                <dt>Sunday</dt>
                                <dd id="sunday">-- - --, -- - --</dd>

                            </dl>
                        </div>
                    </div>

                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">

                    <div class="copyright pull-right">
                        &copy; {{ date('Y') }} <a href="">Code Six</a>, made with <i class="fa fa-heart heart"></i>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
@section('extrajs')
    <script src="{{ asset('assets/js/extrajs-employee.js') }}" type="text/javascript"></script>

    <script type="text/javascript">

    </script>
@endsection