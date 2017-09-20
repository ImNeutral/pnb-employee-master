@extends('includes.dashboard-header')
@include('vendor.employee.view-employee-details')
@section('title')
    Sales Analytics
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
                                    <li class="active">Sales</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <ul class="nav nav-pills" style="float: right;">
                            <li class="active"><a href="{{ url('/sales') }}">
                                    Sales</a>
                            </li>
                            <li><a href="{{ url('/top-products') }}">
                                    Top Products</a>
                            </li>
                        </ul>
                    </div>

                    <div class="content table-responsive">
                        <div class="content"  style="margin-top: 80px;">

                            <div id="annual"></div>
                            <p class="text-center" id="annualHead"><strong>Annual</strong></p>

                            <div id="monthly"></div>
                            <p class="text-center hidden" id="monthlyHead"><strong>Months on 2017</strong></p>

                            <div id="daily"></div>
                            <p class="text-center hidden" id="weeklyHead"><strong>Days on 2017 - April</strong></p>

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
    <script src="{{ asset('assets/js/extrajs-sales.js') }}" type="text/javascript"></script>
@endsection