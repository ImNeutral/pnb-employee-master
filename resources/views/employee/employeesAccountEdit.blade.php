@extends('includes.dashboard-header')
@include('vendor.employee.view-employee-details')
@section('title')
    Employee | Edit
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
                                <h4 class="title">Employee Account Edit</h4>
                                <ol class="breadcrumb">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/employees') }}">Employees</a></li>
                                    <li class="active">Account Edit</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <form class="form-horizontal" action="{{ url('employees-account/' . $account->employee_id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            @if(isset($message))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-right: 20px; margin-top: 10px;"><span aria-hidden="true">&times;</span></button>
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
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

                            @if($newAccount == '0')
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="username" name="username" value="{{ $account->username }}" placeholder="Username" required>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <a href="#" id="change-password"><u>Get Change Password Code</u></a>
                                        <p id="change-password-code" class="hidden">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please wait....</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="status" class="col-sm-2 control-label">Account Status</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" id="status" name="active" required>
                                            <option selected disabled>-- Please select --</option>
                                            <option value="1" {{ $account->active=='1'? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ $account->active=='0'? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="last-name" class="col-sm-2 control-label">Account Access</label>
                                    <div class="col-sm-8">
                                        <div data-toggle="buttons">
                                            <label class="btn btn-primary {{ isset($accessType) && in_array('employee', $accessType)? 'active' : '' }} toggleButtonsRadius">
                                                <input type="checkbox" autocomplete="off" name="account_access[]" value="employee" {{ isset($accessType) && in_array('employee', $accessType)? 'checked' : '' }}>
                                                EMPLOYEE
                                            </label>
                                            <label class="btn btn-primary {{ isset($accessType) && in_array('inventory', $accessType)? 'active' : '' }} toggleButtonsRadius">
                                                <input type="checkbox" autocomplete="off" name="account_access[]" value="inventory" {{ isset($accessType) && in_array('inventory', $accessType)? 'checked' : '' }}>
                                                INVENTORY
                                            </label>
                                            <label class="btn btn-primary {{ isset($accessType) && in_array('waiter', $accessType)? 'active' : '' }} toggleButtonsRadius">
                                                <input type="checkbox" autocomplete="off" name="account_access[]" value="waiter" {{ isset($accessType) && in_array('waiter', $accessType)? 'checked' : '' }}>
                                                WAITER
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($newAccount == '1')
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" placeholder="Username" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="last-name" class="col-sm-2 control-label">New Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="password" name="password"  placeholder="New Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="last-name" class="col-sm-2 control-label">Confirm Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="password" name="password2"  placeholder="Confirm Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="status" class="col-sm-2 control-label">Account Status</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" id="status" name="active" required>
                                            <option selected disabled>-- Please select --</option>
                                            <option value="1" {{ old('active')=='1'? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('active')=='0'? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="last-name" class="col-sm-2 control-label">Account Access</label>
                                    <div class="col-sm-8">
                                        <div data-toggle="buttons">
                                            <label class="btn btn-primary {{ old('account_access') && in_array('employee', old('account_access'))? 'active' : '' }} toggleButtonsRadius">
                                                <input type="checkbox" autocomplete="off" name="account_access[]" value="employee" {{ old('account_access') && in_array('employee', old('account_access'))? 'checked' : '' }}>
                                                EMPLOYEE
                                            </label>
                                            <label class="btn btn-primary {{ old('account_access') && in_array('inventory', old('account_access'))? 'active' : '' }} toggleButtonsRadius">
                                                <input type="checkbox" autocomplete="off" name="account_access[]" value="inventory" {{ old('account_access') && in_array('inventory', old('account_access'))? 'checked' : '' }}>
                                                INVENTORY
                                            </label>
                                            <label class="btn btn-primary {{ old('account_access') && in_array('waiter', old('account_access'))? 'active' : '' }} toggleButtonsRadius">
                                                <input type="checkbox" autocomplete="off" name="account_access[]" value="waiter" {{ old('account_access') && in_array('waiter', old('account_access'))? 'checked' : '' }}>
                                                WAITER
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <br />

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Save Changes</button>
                                    <a class="btn btn-danger col-sm-offset-1" href="{{ url('/employees') }}">Back</a>
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

    <script type="text/javascript">
        $('#change-password').click(function(){
            $changePasswordCode = $('#change-password-code');
            $changePasswordCode.html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please wait....');
            $changePasswordCode.removeClass('hidden');

            $.ajax({
                url : '/employees-account/getChangePasswordCode/' + {{ $account->employee_id }},
                type: 'GET',
                success: function (response) {
                    $changePasswordCode.html('Use this code: ' + response['code']);
                },
                error: function (response) {
                }
            })


        });
    </script>
@endsection