@extends('includes.dashboard-header')
@include('vendor.employee.view-employee-details')
@section('title')
    Employee | Edit
@endsection
@section('extrastyle')
    <link href="{{ asset('assets/css/extrastyle-employee.css') }}" rel="stylesheet" />
    <style type="text/css">
        form {
            font-size: 13px;
        }
        .control-label {
            font-size: 13px;
        }
    </style>
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
                                <h4 class="title">Employee Edit</h4>
                                <ol class="breadcrumb">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/employee') }}">Employees</a></li>
                                    <li class="active">Edit</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <form class="form-horizontal" action="{{ url('employee/' . $employee->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            @if(session('message'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-right: 20px; margin-top: 10px;"><span aria-hidden="true">&times;</span></button>
                                    <p>{{ session('message') }}</p>
                                </div>
                            @endif

                            @if(!$errors->isEmpty())
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-right: 20px; margin-top: 10px;"><span aria-hidden="true">&times;</span></button>
                                    <p>Failed to save changes!</p>
                                        @foreach($errors->all() as $error)
                                        * {{ $error }} <br />
                                        @endforeach
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="first-name" class="col-sm-2 control-label">Firstname</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="first-name" name="first_name" value="{{ $employee->first_name }}" placeholder="Firstname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="col-sm-2 control-label">Middlename</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="middle-name" name="middle_name" value="{{ $employee->middle_name }}" placeholder="Middlename">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last-name" class="col-sm-2 control-label">Lastname</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="last-name" name="last_name" value="{{ $employee->last_name }}" placeholder="Lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sex" class="col-sm-2 control-label">Sex</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="sex" name="sex">
                                        <option value="M" {{ $employee->sex=='M'? 'selected' : '' }}>Male</option>
                                        <option value="F" {{ $employee->sex=='F'? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="civil-status" class="col-sm-2 control-label">Civil Status</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="civil_status" id="civil-status">
                                        <option value="SINGLE"  {{ $employee->civil_status=='SINGLE'? 'selected' : '' }}>Single</option>
                                        <option value="MARRIED" {{ $employee->civil_status=='MARRIED'? 'selected' : '' }}>Married</option>
                                        <option value="WIDOWED" {{ $employee->civil_status=='WIDOWED'? 'selected' : '' }}>Widowed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="birthdate" class="col-sm-2 control-label">Birthdate</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control date-picker" data-datepicker-color="primary" id="birthdate" name="birthdate" value="{{ date_format($employee->birthdate, "Y-m-d") }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-number" class="col-sm-2 control-label">Contact #</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="contact-number" name="contact_number" value="{{ $employee->contact_number }}" placeholder="Contact Number"  pattern="\d*" title="Please input number only">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="address" name="address" value="{{ $employee->address }}" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="position" class="col-sm-2 control-label">Position</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="position" name="position" >
                                        <option value="WAITER" {{  ($employee->position == 'WAITER')? 'selected' : '' }}>Waiter</option>
                                        <option value="MANAGER" {{ ($employee->position == 'MANAGER')? 'selected' : '' }}>Manager</option>
                                        <option value="CASHIER" {{ ($employee->position == 'CASHIER')? 'selected' : '' }}>Cashier</option>
                                        <option value="OWNER" {{   ($employee->position == 'OWNER')? 'selected' : '' }}>Owner</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="status" name="active" >
                                        <option value="1" {{ ($employee->active)? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ ($employee->active)? '' : 'selected' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Save Changes</button>
                                    @if(session('message'))
                                        <a class="btn btn-danger col-sm-offset-1" href="{{ url('/employee') }}">View Employee List</a>
                                    @else
                                        <a class="btn btn-danger col-sm-offset-1" href="{{ url('/employee') }}">Back</a>
                                    @endif
                                </div>
                            </div>
                        </form>

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
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/now-ui-kit.js') }}" type="text/javascript"></script>
    <script>
        $('input.date-picker').on('click', function() {
            $(this).select();
        });

        $('.date-picker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-36670d',
            endDate: '-3667d',
        });
    </script>
@endsection