@extends('includes.dashboard-header')
@include('vendor.employee.view-employee-details')
@section('title')
    Employee | Schedule | Edit
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
                                    <li><a href="{{ url('/employee/schedule/' . $employee_id) }}">Schedule</a></li>
                                    <li class="active">Edit</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <div class="container">

                            <form action="{{ url('/employee/schedule/' . $employee_id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                @if(session('message'))
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-right: 20px; margin-top: 10px;"><span aria-hidden="true">&times;</span></button>
                                        <p>{{ session('message') }}</p>
                                    </div>
                                @endif


                                <dl class="dl-horizontal">
                                    <dt>Monday</dt>
                                    <dd id="monday">
                                        <div class="form-inline">
                                            Morning:&nbsp;&nbsp;&nbsp;
                                            <input type="time" name="mondayMorningFrom" class="form-control" min="24:01" max="12:00" value="{{ $monday->day_morning_from }}">
                                            To
                                            <input type="time" name="mondayMorningTo" class="form-control" min="24:01" max="12:00" value="{{ $monday->day_morning_to }}">
                                            <br />
                                            <br />
                                            Afternoon:
                                            <input type="time" name="mondayAfternoonFrom" class="form-control"  min="12:01" max="24:00" value="{{ $monday->day_afternoon_from }}">
                                            To
                                            <input type="time" name="mondayAfternoonTo"   class="form-control"  min="12:01" max="24:00" value="{{ $monday->day_afternoon_to }}">
                                        </div>
                                    </dd>
                                    <br />
                                    <dt>Tuesday</dt>
                                    <dd id="tuesday">
                                        <div class="form-inline">
                                            Morning:&nbsp;&nbsp;&nbsp;
                                            <input type="time" name="tuesdayMorningFrom" class="form-control" min="24:01" max="12:00" value="{{ $tuesday->day_morning_from }}">
                                            To
                                            <input type="time" name="tuesdayMorningTo" class="form-control" min="24:01" max="12:00" value="{{ $tuesday->day_morning_to }}">
                                            <br />
                                            <br />
                                            Afternoon:
                                            <input type="time" name="tuesdayAfternoonFrom" class="form-control"  min="12:01" max="24:00" value="{{ $tuesday->day_afternoon_from }}">
                                            To
                                            <input type="time" name="tuesdayAfternoonTo" class="form-control"  min="12:01" max="24:00" value="{{ $tuesday->day_afternoon_to }}">
                                        </div>
                                    </dd>
                                    <br />

                                    <dt>Wednesday</dt>
                                    <dd id="wednesday">
                                        <div class="form-inline">
                                            Morning:&nbsp;&nbsp;&nbsp;
                                            <input type="time" name="wednesdayMorningFrom" class="form-control" min="24:01" max="12:00" value="{{ $wednesday->day_morning_from }}">
                                            To
                                            <input type="time" name="wednesdayMorningTo" class="form-control" min="24:01" max="12:00" value="{{ $wednesday->day_morning_to }}">
                                            <br />
                                            <br />
                                            Afternoon:
                                            <input type="time" name="wednesdayAfternoonFrom" class="form-control"  min="12:01" max="24:00" value="{{ $wednesday->day_afternoon_from }}">
                                            To
                                            <input type="time" name="wednesdayAfternoonTo" class="form-control"  min="12:01" max="24:00" value="{{ $wednesday->day_afternoon_to }}">
                                        </div>
                                    </dd>
                                    <br />

                                    <dt>Thursday</dt>
                                    <dd id="thursday">
                                        <div class="form-inline">
                                            Morning:&nbsp;&nbsp;&nbsp;
                                            <input type="time" name="thursdayMorningFrom" class="form-control" min="24:01" max="12:00" value="{{ $thursday->day_morning_from }}">
                                            To
                                            <input type="time" name="thursdayMorningTo" class="form-control" min="24:01" max="12:00" value="{{ $thursday->day_morning_to }}">
                                            <br />
                                            <br />
                                            Afternoon:
                                            <input type="time" name="thursdayAfternoonFrom" class="form-control"  min="12:01" max="24:00" value="{{ $thursday->day_afternoon_from }}">
                                            To
                                            <input type="time" name="thursdayAfternoonTo" class="form-control"  min="12:01" max="24:00" value="{{ $thursday->day_afternoon_to }}">
                                        </div>
                                    </dd>
                                    <br />

                                    <dt>Friday</dt>
                                    <dd id="friday">
                                        <div class="form-inline">
                                            Morning:&nbsp;&nbsp;&nbsp;
                                            <input type="time" name="fridayMorningFrom" class="form-control" min="24:01" max="12:00" value="{{ $friday->day_morning_from }}">
                                            To
                                            <input type="time" name="fridayMorningTo" class="form-control" min="24:01" max="12:00" value="{{ $friday->day_morning_to }}">
                                            <br />
                                            <br />
                                            Afternoon:
                                            <input type="time" name="fridayAfternoonFrom" class="form-control"  min="12:01" max="24:00" value="{{ $friday->day_afternoon_from }}">
                                            To
                                            <input type="time" name="fridayAfternoonTo" class="form-control"  min="12:01" max="24:00" value="{{ $friday->day_morning_to }}">
                                        </div>
                                    </dd>
                                    <br />

                                    <dt>Saturday</dt>
                                    <dd id="saturday">
                                        <div class="form-inline">
                                            Morning:&nbsp;&nbsp;&nbsp;
                                            <input type="time" name="saturdayMorningFrom" class="form-control" min="24:01" max="12:00" value="{{ $saturday->day_morning_from }}">
                                            To
                                            <input type="time" name="saturdayMorningTo" class="form-control" min="24:01" max="12:00" value="{{ $saturday->day_morning_to }}">
                                            <br />
                                            <br />
                                            Afternoon:
                                            <input type="time" name="saturdayAfternoonFrom" class="form-control"  min="12:01" max="24:00" value="{{ $saturday->day_afternoon_from }}">
                                            To
                                            <input type="time" name="saturdayAfternoonTo" class="form-control"  min="12:01" max="24:00" value="{{ $saturday->day_afternoon_to }}">
                                        </div>
                                    </dd>
                                    <br />

                                    <dt>Sunday</dt>
                                    <dd id="sunday">
                                        <div class="form-inline">
                                            Morning:&nbsp;&nbsp;&nbsp;
                                            <input type="time" name="sundayMorningFrom" class="form-control" min="24:01" max="12:00" value="{{ $sunday->day_morning_from }}">
                                            To
                                            <input type="time" name="sundayMorningTo" class="form-control" min="24:01" max="12:00" value="{{ $sunday->day_morning_to }}">
                                            <br />
                                            <br />
                                            Afternoon:
                                            <input type="time" name="sundayAfternoonFrom" class="form-control"  min="12:01" max="24:00" value="{{ $sunday->day_afternoon_from }}">
                                            To
                                            <input type="time" name="sundayAfternoonTo" class="form-control"  min="12:01" max="24:00" value="{{ $sunday->day_afternoon_to }}">
                                        </div>
                                    </dd>
                                    <br />

                                    <dd>
                                        @if(session('message'))
                                            <a href="{{ url('/employee/schedule/' . $employee_id) }}" class="btn btn-danger">View Schedule</a>
                                        @else
                                            <a href="{{ url('/employee/schedule/' . $employee_id) }}" class="btn btn-danger">Cancel</a>
                                        @endif
                                        <input type="submit" class="btn btn-info" style="margin-left: 50px;">
                                    </dd>

                                </dl>


                            </form>
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