@extends('includes.dashboard-header')
@section('title')
    CRYPTOWEALTH LIMITED - REFERRALS
@endsection
@section('body')
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            @include('includes.dashboard-sidebar')
        </div>

        <div class="main-panel">
            @include('includes.dashboard-nav')
            <div class="content breadcrumb-content">
                <ol class="breadcrumb">
                    <li><a href="{{ url('referrals') }}">Referrals</a></li>
                    <li><a href="{{ url('referrals/'.$username) }}">{{ $username }}</a></li>
                </ol>
                <div class="container-fluid">
                    <div class="row user-infor">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-3"><h3 class="title">Username: adam</h3></div>
                                        <div class="col-md-7"><h3 class="title">Fullname: Adam Brylle Sta. Isabel</h3></div>
                                        <div class="col-md-2"><h3 class="title">Level: 1</h3></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <h4 class="title">Earnings History</h4>
                                            <p class="category">List of all earnings of the referred user</p>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 earnings-div">
                                            <h4 class="title left">Total Earnings: <span class="earnings">1.0BTC</span></h4>
                                            <h4 class="title right">Total Earnings: <span class="earnings">1.0BTC</span></h4>
                                        </div>
                                        {{--<div class="col-lg-6 col-sm-6 withdraw-button">
                                            <button type="submit" class="btn btn-primary btn-round left">WITHDRAW</button>
                                            <button type="submit" class="btn btn-primary btn-round right">WITHDRAW</button>
                                        </div>--}}
                                    </div>
                                </div>
                                <div class="content table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr><th>ID</th>
                                            <th>Amount Spent</th>
                                            <th>Date & Time</th>
                                            <th>% Comission</th>
                                            <th>Comission</th>
                                        </tr></thead>
                                        <tbody>
                                        <tr>
                                            <td>17854</td>
                                            <td>1.005BTC</td>
                                            <td>Jun 25, 2017 08:30AM</td>
                                            <td>5.0%</td>
                                            <td>0.05025BTC</td>

                                        </tr>
                                        <tr>
                                            <td>17543</td>
                                            <td>1.005BTC</td>
                                            <td>Jun 25, 2017 08:30AM</td>
                                            <td>5.0%</td>
                                            <td>0.05025BTC</td>
                                        </tr>
                                        <tr>
                                            <td>17540</td>
                                            <td>1.005BTC</td>
                                            <td>Jun 25, 2017 08:30AM</td>
                                            <td>5.0%</td>
                                            <td>0.05025BTC</td>
                                        </tr>

                                        </tbody>
                                    </table>
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
            $('.navbar-brand').html('Referrals - '+{{ $username }});
            $('#referrals').addClass('active');
            $('input').on('click', function() {
                $(this).select();
            });
            $('.referral-link .right, .referral-link-mobile button').on('click', function () {
                $('input').select();
                document.execCommand("copy");
            });
        });
    </script>
@endsection