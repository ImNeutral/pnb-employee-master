@extends('includes.dashboard-header')
@include('vendor.employee.view-employee-details')
@section('title')
    Sales Analytics | Top Products
@endsection
@section('extrastyle')
    <link href="{{ asset('assets/css/extrastyle-print-sales.css') }}" rel="stylesheet" />

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
                            <li ><a href="{{ url('/top-products') }}">
                                    Top Products</a>
                            </li>
                            <li class="active"><a href="{{ url('/sales-print') }}">
                                    Sales Report</a>
                            </li>
                        </ul>
                    </div>

                    <div class="content table-responsive">

                        <div class="content"  >
                            <br/>
                            <div class="alert alert-danger hidden" role="alert" id="dateError">
                            </div>
                        <div class="form-horizontal col-lg-offset-1" >
                            <form action="">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="birthdate" class="col-sm-2 control-label">From</label>
                                            <div class="col-sm-6">
                                                <input type="text" id="fromDate" class="form-control date-picker" data-datepicker-color="primary"  name="fromDate" value="{{ isset($_GET['fromDate'])? $_GET['fromDate']:'' }}" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="birthdate" class="col-sm-2 control-label">To</label>
                                            <div class="col-sm-6">
                                                <input type="text" id="toDate" onclick="" class="form-control date-picker" data-datepicker-color="primary" name="toDate" value="{{ isset($_GET['toDate'])? $_GET['toDate']:'' }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info col-lg-offset-1" id="viewPrintReport" disabled><span class="glyphicon glyphicon-eye-open"> </span> Show</button>
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div class="text-center">
                            @if(count($allProducts) > 0)
                                <button class="btn btn-info" id="print" onclick="clickPrint()"><span class="glyphicon glyphicon-print"> </span> Print</button>
                            @endif
                        </div>
                        <div id="salesPrint" style="">

                            <table class="table table-bordered" style="border-collapse: collapse;">
                                <h5 style="text-align: center; font-size: 18px;">Pares Ni Bastie</h5>
                                @if(isset($_GET['fromDate']) && isset($_GET['toDate']) && $_GET['fromDate'] == $_GET['toDate'])
                                    <p  style="text-align: center" class="text-center">Sales Report on {{ date_format(date_create($_GET['fromDate']), 'M d, Y') }}</p>
                                @elseif (isset($_GET['fromDate']) && isset($_GET['toDate']) && $_GET['fromDate'] != $_GET['toDate'])
                                    <p  style="text-align: center" class="text-center">Sales Report on {{ date_format(date_create($_GET['fromDate']), 'M d, Y') }} to {{ date_format(date_create($_GET['toDate']), 'M d, Y') }}</p>
                                @endif
                                <thead>
                                <tr>
                                    <th width="8%" style="border: 1px grey solid; padding-right: 10px">#</th>
                                    <th width="25%" style="border: 1px grey solid">Food Name</th>
                                    <th width="17%" style="border: 1px grey solid">Price</th>
                                    <th width="10%" style="border: 1px grey solid">Quantity</th>
                                    <th width="20%" style="border: 1px grey solid">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($allProducts) == 0)
                                    <tr>
                                        <td colspan="5" class="text-center">No Sales on the specified date.</td>
                                    </tr>
                                @endif
                                <?php $counter = 1; ?>
                                @foreach($allProducts as $product)
                                    <tr>
                                        <td style="text-align: center; border-bottom: 1px grey solid; border-left: 1px grey solid">{{ $counter++ }}</td>
                                        <td style="border-bottom: 1px grey solid">{{ $product->name }}</td>
                                        <td style="text-align: right;border-bottom: 1px grey solid">₱ {{ number_format($product->price, 2) }}</td>
                                        <td style="text-align: right;border-bottom: 1px grey solid">{{ $product->quantity }}</td>
                                        <td style="text-align: right;border-bottom: 1px grey solid; border-right: 1px grey solid; padding-right: 10px;">₱ {{ number_format($product->total, 2) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <p   style="font-size: 12; text-align: center">Generated on: {{ date('M d, Y') }}</p>
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
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/extrajs-sales-print.js') }}" type="text/javascript"></script>
    <script>

        $('input.date-picker').on('click', function() {
            $(this).select();
        });

        $('#fromDate').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: 1,
        });
        $('#toDate').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: 1,
        });
    </script>
@endsection
