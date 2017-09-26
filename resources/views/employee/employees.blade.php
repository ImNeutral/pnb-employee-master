@extends('includes.dashboard-header')
@include('vendor.employee.view-employee-details')
@section('title')
    Employee | All
@endsection
@section('extrastyle')
    <link href="{{ asset('assets/css/extrastyle-employee.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/extrastyle-pagination.css') }}" rel="stylesheet" />
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
                                <h4 class="title">Employees</h4>
                                <ol class="breadcrumb">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="active">Employees</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="content table-responsive">



                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills" style="float: left;">
                                <li style="float: left;">
                                    <form role="search">
                                        <div class="input-group ">
                                            <input type="hidden" name="page" value="1">
                                            <input type="text" class="form-control" name="search" placeholder="Search for...">
                                            <input type="hidden" name="key" value="{{ isset($_GET['key'])? $_GET['key'] : 'all'}}">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit" style="margin-left: -58px; padding-top:12px;padding-bottom:12px; border: 0px;">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                            <ul class="nav nav-pills" style="float: right;">

                                <li style="margin-right: 20px;">
                                    <a href="{{ url('/employee/create') }}" style="padding-top: 0px;">
                                    <button class="btn btn-default tooltip-employee glyphicon-plus" id="view-details" data-placement="top" title="Add New Employee">
                                        Add New
                                    </button>
                                    </a>
                                </li>
                                <li class="{{ isset($_GET['key']) && $_GET['key']=='all'? 'active' : ''  }}"><a href="{{ url('employee/?page=1&search=&key=all') }}" >
                                        All Employees</a>
                                </li>
                                <li class="{{ isset($_GET['key']) && $_GET['key']=='active'? 'active' : ''  }}"><a href="{{ url('employee/?page=1&search=&key=active') }}">
                                        Active Employees</a>
                                </li>
                                <li class="{{ isset($_GET['key']) && $_GET['key']=='inactive'? 'active' : '' }}"><a href="{{ url('employee/?page=1&search=&key=inactive') }}">
                                        Inactive Employees</a>
                                </li>
                            </ul>

                            @if(isset($_GET['search']) && $_GET['search'] > ' ')
                                <div id="searching" >
                                    <br />
                                    <br />
                                    <br />
                                    <!-- Tab panes -->
                                    <i style="font-size: 14px;">You are trying to look for <strong>{{ $_GET['search'] }}"</strong></i>
                                    <br />
                                    <i style="font-size: 14px;">Found <strong>{{ $count }}</strong> result(s) </i>
                                    <br />
                                </div>
                            @endif

                            <div class="tab-pane fade active in" id="active-employees">
                                    <table class="table table-striped text-center">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Position</th>
                                            <th class="text-center">Employee Status</th>
                                            <th class="text-center">Account Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                            <?php $counter = $entriesFrom; ?>
                                            @foreach($employees as $employee)
                                                <tr>
                                                    <td>{{ $counter++ }}</td>
                                                    <td id="name">{{ $employee->first_name . ' ' . $employee->middle_name . ' ' . $employee->last_name }}</td>
                                                    <td id="position">{{ $employee->position }}</td>

                                                    <td><p class="glyphicon glyphicon-{{ ($employee->active)? 'ok' : 'remove' }} tooltip-employee" style='color: {{ ($employee->active)? 'forestgreen' : 'orangered'  }};' data-toggle="tooltip" data-placement="top" title="{{  ($employee->active)? 'Active' :  'Inactive' }}"></p></td>
                                                    @if(isset($employee->account()->first()->username))
                                                        <td><p class="glyphicon glyphicon-{{ ($employee->account()->first()->active)? 'ok' : 'remove' }} tooltip-employee" style='color: {{ ($employee->account()->first()->active)? 'forestgreen' : 'orangered'  }};' data-toggle="tooltip" data-placement="top" title="{{ ($employee->account()->first()->active)? 'Active' :  'Inactive'}}"></p></td>
                                                    @else
                                                        <td>No Account</td>
                                                    @endif

                                                    <td>
                                                        <button class="btn btn-default btn-sm tooltip-employee" id="view-details" data-toggle="modal" data-target="#view-employee-details" data-toggle="tooltip" data-placement="top" title="View Full Employee details."><span class="glyphicon glyphicon-eye-open" ></span></button>
                                                        <a href="{{ url('employee/' . $employee->id . '/edit') }}" class="btn btn-primary btn-sm tooltip-employee" data-toggle="tooltip" data-placement="top" title="Edit Employee Details."><span class="glyphicon glyphicon-pencil"></span></a>
                                                        <a href="{{ url('employee-account/' . $employee->id . '/edit') }}" class="btn btn-warning btn-sm tooltip-employee" data-toggle="tooltip" data-placement="top" title="Edit Employee Account and Account Access."><span class="glyphicon glyphicon-log-in"></span></a>
                                                        <a href="{{ url('employee/schedule/' . $employee->id) }}" class="btn btn-danger btn-sm tooltip-employee" data-toggle="tooltip" data-placement="top" title="Employee Duty Schedule"><span class="glyphicon glyphicon-list-alt"></span></a>
                                                    </td>

                                                    {{--visible columns ends here--}}

                                                    <td id="sex" class="hidden"> {{ $employee->sex }}</td>
                                                    <td id="civil_status" class="hidden">{{ $employee->civil_status }}</td>
                                                    <td id="birthdate" class="hidden">{{ date_format($employee->birthdate, "M d, Y") }}</td>
                                                    <td id="age" class="hidden">{{ $employee->getAge() }}</td>
                                                    <td id="contact_number" class="hidden">{{ $employee->contact_number }}</td>
                                                    <td id="address" class="hidden">{{ $employee->address }}</td>
                                                    <td id="active" class="hidden">{{ $employee->active }}</td>

                                                    @if(isset($employee->account()->first()->username))
                                                        <td id="username" class="hidden">{{ $employee->account()->first()->username }}</td>
                                                        <td id="account_active" class="hidden">{{ $employee->account()->first()->active }}</td>
                                                        <td id="account_access" class="hidden">
                                                            @foreach ($employee->account()->first()->accessType()->get() as $accessType)
                                                                {{  $accessType->access_type . ', '}}
                                                            @endforeach
                                                        </td>
                                                        <td id="have_account" class="hidden">1</td>
                                                    @else
                                                        <td id="have_account" class="hidden">0</td>
                                                    @endif
                                                </tr>
                                            @endforeach

                                            @if($count <= 0 && isset($_GET['key']) && ($_GET['key'] == 'active' || $_GET['key'] == 'inactive' || $_GET['key'] == 'all') )
                                                <tr class="text-center"><td colspan="6">No employees found.</td></tr>
                                            @endif


                                        </tbody>
                                    </table>
                            </div>

                            {{--@if($count > 0)--}}
                            {{--<ul class="btn-group btn-group-xs" role="group" aria-label="...">--}}
                                {{--<a class="btn btn-default" href="{{ $currentPage == '1'? '#' : url('employee/?page=' . ($currentPage-1) . $getInputs) }}" {{ $isFirstPage  }} data-toggle="tooltip" data-placement="top" title="Previous Page"><</a>--}}
                                {{--@for($roll = 1; $roll <= $allPages; $roll++)--}}
                                    {{--<a type="button" class="btn btn-default" href="{{ $currentPage == $roll? '#' : url('employee/?page=' . ($roll) . $getInputs ) }}" {{ $currentPage == $roll? 'disabled' : ''}} data-toggle="tooltip" data-placement="top" title="Page {{ $roll }}">{{ $roll }}</a>--}}
                                {{--@endfor--}}
                                {{--<a class="btn btn-default" href="{{ $isLastPage == 'disabled'? '#' : url('employee/?page=' . ($currentPage + 1)  . $getInputs) }}" {{ $isLastPage  }} data-toggle="tooltip" data-placement="top" title="Next Page">></a>--}}
                                {{--<br />--}}
                                {{--<br />--}}
                                {{--<p style="font-size: 12px;">Showing {{ $entriesFrom }} to {{  $counter-1 }} of {{ $count }} employee(s)</p>--}}
                            {{--</ul>--}}
                            {{--@endif--}}

                            @if($count > 0)
                            <div class="pagination-container text-center">
                                <ul class="pagination pagination-primary">
                                    <li class="page-item arrow-margin-left {{ $isFirstPage }}">
                                        <a class="page-link" href="{{ $currentPage == '1'? '#' : url('employee/?page=' . ($currentPage-1) . $getInputs) }}" aria-label="Previous">
                                            <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                                        </a>
                                    </li>

                                    @for($roll = 1; $roll <= $allPages; $roll++)
                                    <li class="page-item {{ $currentPage == $roll? 'active' : ''}}">
                                        <a class="page-link" href="{{ $currentPage == $roll? '#' : url('employee/?page=' . ($roll) . $getInputs ) }}">
                                            <span>{{ $roll }}</span>
                                        </a>
                                    </li>
                                    @endfor

                                    <li class="page-item arrow-margin-right {{ $isLastPage }}">
                                        <a class="page-link" href="{{ $isLastPage == 'disabled'? '#' : url('employee/?page=' . ($currentPage + 1)  . $getInputs) }}" aria-label="Next">
                                            <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            @endif

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
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/now-ui-kit.js') }}" type="text/javascript"></script>
@endsection