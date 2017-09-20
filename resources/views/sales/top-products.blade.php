@extends('includes.dashboard-header')
@include('vendor.employee.view-employee-details')
@section('title')
    Sales Analytics | Top Products
@endsection
@section('extrastyle')
    <link href="{{ asset('assets/css/extrastyle-sales.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/morris/morris.css') }}" rel="stylesheet" />
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
                                <h4 class="title">Sales</h4>
                                <ol class="breadcrumb">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="active">Top Products</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <ul class="nav nav-pills" style="float: right;">
                            <li ><a href="{{ url('/sales') }}">
                                    Sales</a>
                            </li>
                            <li class="active"><a href="{{ url('/top-products') }}">
                                    Top Products</a>
                            </li>
                        </ul>
                    </div>

                    <div class="content table-responsive">
                        <ul class="nav nav-pills" style="float: left;">
                            <li style="float: left;">

                                <select name="year" id="year" class="form-control">
                                    @foreach($years as $year)
                                    <option value="{{ $year['year'] }}">{{ $year['year'] }}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li style="float: left;">

                                <select name="month" id="month" class="form-control">
                                    <option value="0" selected disabled>-- Select Month --</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </li>

                            <li style="float: left;" >

                                <select name="day" id="day" class="form-control hidden">
                                    <option value="0" selected disabled>-- Select Day --</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </li>
                        </ul>

                        <div class="content"  style="margin-top: 80px;">

                            <div id="graph"></div>
                            <p class="text-center" id="head"><strong>Annual</strong></p>

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
    <script src="{{ asset('assets/js/now-ui-kit.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/morris/morris.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/extrajs-top-products.js') }}" type="text/javascript"></script>
    <script type="text/javascript">

    </script>
@endsection