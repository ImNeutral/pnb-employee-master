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
                                <dd id="monday">
                                    {{ empty($monday->day_morning_from)? '--:--' : date_format(date_create("0000-00-00" . $monday->day_morning_from), 'h:i a') }}
                                        -
                                    {{ empty($monday->day_morning_to)? '--:--' : date_format(date_create("0000-00-00" . $monday->day_morning_to), 'h:i a') }}
                                    ,
                                    {{ empty($monday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $monday->day_afternoon_from), 'h:i a') }}
                                        -
                                    {{ empty($monday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $monday->day_afternoon_to), 'h:i a') }}
                                </dd>

                                <dt>Tuesday</dt>
                                <dd id="tuesday">
                                    {{ empty($tuesday->day_morning_from)? '--:--' : date_format(date_create("0000-00-00" . $tuesday->day_morning_from), 'h:i a') }}
                                    -
                                    {{ empty($tuesday->day_morning_to)? '--:--' :   date_format(date_create("0000-00-00" . $tuesday->day_morning_to), 'h:i a') }}
                                    ,
                                    {{ empty($tuesday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $tuesday->day_afternoon_from), 'h:i a') }}
                                    -
                                    {{ empty($tuesday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $tuesday->day_afternoon_to), 'h:i a') }}
                                </dd>


                                <dt>Wednesday</dt>
                                <dd id="wednesday">
                                    {{ empty($wednesday->day_morning_from)? '--:--' : date_format(date_create("0000-00-00" . $wednesday->day_morning_from), 'h:i a') }}
                                    -
                                    {{ empty($wednesday->day_morning_to)? '--:--' : date_format(date_create("0000-00-00" . $wednesday->day_morning_to), 'h:i a') }}
                                    ,
                                    {{ empty($wednesday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $wednesday->day_afternoon_from), 'h:i a') }}
                                    -
                                    {{ empty($wednesday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $wednesday->day_afternoon_to), 'h:i a') }}
                                </dd>

                                <dt>Thursday</dt>
                                <dd id="thursday">
                                    {{ empty($thursday->day_morning_from)? '--:--' : date_format(date_create("0000-00-00" . $thursday->day_morning_from), 'h:i a') }}
                                    -
                                    {{ empty($thursday->day_morning_to)? '--:--' : date_format(date_create("0000-00-00" . $thursday->day_morning_to), 'h:i a') }}
                                    ,
                                    {{ empty($thursday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $thursday->day_afternoon_from), 'h:i a') }}
                                    -
                                    {{ empty($thursday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $thursday->day_afternoon_to), 'h:i a') }}
                                </dd>

                                <dt>Friday</dt>
                                <dd id="friday">
                                    {{ empty($friday->day_morning_from)? '--:--' : date_format(date_create("0000-00-00" . $friday->day_morning_from), 'h:i a') }}
                                    -
                                    {{ empty($friday->day_morning_to)? '--:--' : date_format(date_create("0000-00-00" . $friday->day_morning_to), 'h:i a') }}
                                    ,
                                    {{ empty($friday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $friday->day_afternoon_from), 'h:i a') }}
                                    -
                                    {{ empty($friday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $friday->day_afternoon_to), 'h:i a') }}
                                </dd>

                                <dt>Saturday</dt>
                                <dd id="saturday">
                                    {{ empty($saturday->day_morning_from)? '--:--' : date_format(date_create("0000-00-00" . $saturday->day_morning_from), 'h:i a') }}
                                    -
                                    {{ empty($saturday->day_morning_to)? '--:--' : date_format(date_create("0000-00-00" . $saturday->day_morning_to), 'h:i a') }}
                                    ,
                                    {{ empty($saturday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $saturday->day_afternoon_from), 'h:i a') }}
                                    -
                                    {{ empty($saturday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $saturday->day_afternoon_to), 'h:i a') }}
                                </dd>

                                <dt>Sunday</dt>
                                <dd id="sunday">
                                    {{ empty($sunday->day_morning_from)? '--:--' : date_format(date_create("0000-00-00" . $sunday->day_morning_from), 'h:i a') }}
                                    -
                                    {{ empty($sunday->day_morning_to)? '--:--' : date_format(date_create("0000-00-00" . $sunday->day_morning_to), 'h:i a') }}
                                    ,
                                    {{ empty($sunday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $sunday->day_afternoon_from), 'h:i a') }}
                                    -
                                    {{ empty($sunday->day_afternoon_from)? '--:--' : date_format(date_create("0000-00-00" . $sunday->day_afternoon_to), 'h:i a') }}
                                </dd>
                                <br />
                                <dd>
                                    <a href="{{ url('/employee') }}"><button class="btn btn-danger btn-sm">Back</button></a>
                                    <a href="{{ url('/employee/schedule/'. $employee_id .'/edit') }}"><button class="btn btn-info btn-sm" style="margin-left: 50px;">Edit</button></a>
                                </dd>
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