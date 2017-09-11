@extends('includes.dashboard-header')
@section('title')
    CRYPTOWEALTH LIMITED - DASHBOARD
@endsection
@section('body')
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            @include('includes.dashboard-sidebar')
        </div>

        <div class="main-panel">
            @include('includes.dashboard-nav')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-warning text-center">
                                                <i class="ti-server"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Balance</p>
                                                105.0BTC
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-reload"></i> Updated now
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-success text-center">
                                                <i class="ti-wallet"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Revenue</p>
                                                1,345BTC
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-calendar"></i> Jan 26, 2017 12:00AM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-danger text-center">
                                                <i class="ti-share-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Withdrawn</p>
                                                1,240.0BTC
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-timer"></i> Jan 25, 2017 12:30PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-info text-center">
                                                <i class="ti-import"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Deposited</p>
                                                45.0BTC
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-reload"></i> Jan 20, 2017 08:24AM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row referral-link-mobile">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-12 top">
                                            <h4 class="title">Referral Link</h4>
                                        </div>
                                        <div class="col-md-12 center">
                                            <input type="text" id="referral-link" value="https://cryptowealthltd.com/ref/{{ Auth::user()->username }}">
                                        </div>
                                        <div class="col-md-12 bottom">
                                            <h4 class="title"><button type="submit" class="btn btn-primary btn-round right"><i class="ti-files"></i> Copy</button></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row referral-link">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="content">
                                    <div class="left"><h4 class="title">Referral Link</h4></div>
                                    <input type="text" id="referral-link" value="https://cryptowealthltd.com/ref/{{ Auth::user()->username }}">
                                    <div class="right"><i class="ti-files"></i> Copy</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Active Deposits</h4>
                                    <p class="category">List of all active deposits</p>
                                </div>
                                <div class="content table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr><th>ID</th>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                            <th>City</th>
                                        </tr></thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>$36,738</td>
                                            <td>Niger</td>
                                            <td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minerva Hooper</td>
                                            <td>$23,789</td>
                                            <td>Curaçao</td>
                                            <td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sage Rodriguez</td>
                                            <td>$56,142</td>
                                            <td>Netherlands</td>
                                            <td>Baileux</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                            <td>Overland Park</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Doris Greene</td>
                                            <td>$63,542</td>
                                            <td>Malawi</td>
                                            <td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Mason Porter</td>
                                            <td>$78,615</td>
                                            <td>Chile</td>
                                            <td>Gloucester</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="footer">
                                        <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Open
                                            <i class="fa fa-circle text-danger"></i> Click
                                            <i class="fa fa-circle text-warning"></i> Click Second Time
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="ti-reload"></i> Updated 3 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">

                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script> <a href="">CRYPTOWEALTH Ltd.</a>, made with <i class="fa fa-heart heart"></i> by <a href="http://facebook.com/siegfred.pags">Siegfred Pagador</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
@section('extrajs')
<script type="text/javascript">
    $(document).ready(function() {
        $('.navbar-brand').html('Dashboard');
        $('#dashboard').addClass('active');
        $.notify({
            icon: 'ti-gift',
            message: "Welcome <b>{{ Auth::user()->fullname }}</b> to <b>CRYPTOWEALTH Ltd.</b> - designed to help Bitcoin miners invest their Bitcoins at great interest rates."

        }, {
            type: 'success',
            timer: 4000
        });
    });
</script>
@endsection