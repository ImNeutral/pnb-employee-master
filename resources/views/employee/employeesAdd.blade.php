@extends('includes.dashboard-header')
@include('vendor.employee.view-employee-details')
@section('title')
    Employee | Add
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
                                <h4 class="title">Add New Employee</h4>
                                <ol class="breadcrumb">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/employees') }}">Employees</a></li>
                                    <li class="active">Add</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        @if(session('successAdd') && session('successAdd') == '1')
                            @if(session('message'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-right: 20px; margin-top: 10px;"><span aria-hidden="true">&times;</span></button>
                                    <p>{{ session('message') }}</p>
                                </div>
                            @endif

                            <div class="content col-sm-offset-1">
                                <dl class="dl-horizontal">
                                    <dt>Firstname</dt>
                                    <dd>{{ old('first_name') }}</dd>

                                    <dt>Middlename</dt>
                                    <dd>{{ old('middle_name') }}</dd>

                                    <dt>Lastname</dt>
                                    <dd>{{ old('last_name') }}</dd>

                                    <dt>Sex</dt>
                                    <dd>{{ old('sex') }}</dd>

                                    <dt>Civil Status</dt>
                                    <dd>{{ old('civil_status') }}</dd>

                                    <dt>Birthdate</dt>
                                    <dd>{{ date_format(date_create(old('birthdate')), "M d, Y") }}</dd>

                                    <dt>Contact #</dt>
                                    <dd>{{ old('contact_number') }}</dd>

                                    <dt>Address</dt>
                                    <dd>{{ old('address') }}</dd>

                                    <dt>Position</dt>
                                    <dd>{{ old('position') }}</dd>

                                    <dt>Status</dt>
                                    <dd>{{ old('active') == '1'? 'Active' : 'Inactive'}}</dd>

                                    <br />
                                    <br />
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <a class="btn btn-sm btn-primary" href="{{ url('/employees') }}">Ok</a>
                                        <a class="btn btn-sm btn-danger col-sm-offset-1" href="{{ url('employees-account/' . session('employeeId') . '/edit') }}">Create Account</a>
                                    </div>
                                </dl>
                            </div>
                        @else
                            <form class="form-horizontal" action="{{ url('/employees') }}" method="POST">
                                {{ csrf_field() }}
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
                                    <label for="first-name" class="col-sm-2 col-sm-offset-1"><strong style="color: red;">* All fields are required!</strong></label>
                                </div>

                                <div class="form-group">
                                    <label for="first-name" class="col-sm-2 control-label">Firstname</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="first-name" name="first_name" value="{{ old('first_name') }}" placeholder="Firstname" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="col-sm-2 control-label">Middlename</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="middle-name" name="middle_name" value="{{ old('middle_name') }}" placeholder="Middlename" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="last-name" class="col-sm-2 control-label">Lastname</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="last-name" name="last_name" value="{{ old('last_name') }}" placeholder="Lastname" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sex" class="col-sm-2 control-label">Sex</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" id="sex" name="sex" required>
                                            <option selected disabled>-- Please Select --</option>
                                            <option value="M" {{ old('sex')=='M'? 'selected' : '' }}>Male</option>
                                            <option value="F" {{ old('sex')=='F'? 'selected' : '' }}>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="civil-status" class="col-sm-2 control-label">Civil Status</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="civil_status" id="civil-status" required>
                                            <option selected disabled>-- Please Select --</option>
                                            <option value="SINGLE"  {{ old('civil_status')=='SINGLE'? 'selected' : '' }}>Single</option>
                                            <option value="MARRIED" {{ old('civil_status')=='MARRIED'? 'selected' : '' }}>Married</option>
                                            <option value="WIDOWED" {{ old('civil_status')=='WIDOWED'? 'selected' : '' }}>Widowed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="birthdate" class="col-sm-2 control-label">Birthdate</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" data-datepicker-color="primary" id="birthdate" name="birthdate" value="{{ old('birthdate') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="contact-number" class="col-sm-2 control-label">Contact #</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="contact-number" name="contact_number" value="{{ old('contact_number') }}" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="position" class="col-sm-2 control-label">Position</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" id="position" name="position"  required>
                                            <option selected disabled>-- Please Select --</option>
                                            <option value="WAITER"  {{ (old('position') == 'WAITER')? 'selected' : '' }}>Waiter</option>
                                            <option value="MANAGER" {{ (old('position') == 'MANAGER')? 'selected' : '' }}>Manager</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" id="status" name="active" required>
                                            <option selected disabled>-- Please Select --</option>
                                            <option value="1" {{ (old('active') == '1')? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ (old('active') == '0')? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <a class="btn btn-danger col-sm-offset-1" href="{{ url('/employees') }}">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        @endif
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
@endsection