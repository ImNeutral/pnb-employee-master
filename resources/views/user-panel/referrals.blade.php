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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-danger text-center">
                                                <i class="ti-server"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Comissions</p>
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
                        {{--<div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-info text-center">
                                                <i class="ti-share-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Withdrawn</p>
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
                        </div>--}}
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-warning text-center">
                                                <i class="ti-medall"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Direct Referrals</p>
                                                8
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
                                                <i class="ti-medall-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Indirect Referrals</p>
                                                5
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
                                            <input type="text" id="referral-link" value="https://cryptowealthltd.com/r/{{ Auth::user()->username }}">
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
                                    <input type="text" id="referral-link" value="https://cryptowealthltd.com/r/{{ Auth::user()->username }}">
                                    <div class="right"><i class="ti-files"></i> Copy</div>
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
                                            <h4 class="title">Referred Users</h4>
                                            <p class="category">List of all referred users both level 1 and level 2</p>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 withdraw-button">
                                            <button type="submit" class="btn btn-primary btn-round left">WITHDRAW</button>
                                            <button type="submit" class="btn btn-primary btn-round right">WITHDRAW</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="content table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr><th>ID</th>
                                            <th>Username</th>
                                            <th>Fullname</th>
                                            <th>Level</th>
                                            <th>Date & Time</th>
                                            <th>Inviter</th>
                                            <th>Comission</th>
                                            <th>&nbsp;</th>
                                        </tr></thead>
                                        <tbody>
                                        <tr>
                                            <td>17854</td>
                                            <td>siegfp</td>
                                            <td>Siegfred Pagador</td>
                                            <td>Level 1</td>
                                            <td>Jun 25, 2017 08:30AM</td>
                                            <td>siegfp</td>
                                            <td>1.0005BTC</td>
                                            <td><a href="{{ url('referrals/17854') }}" title="View history of earnings"><i class="ti-new-window"></i> </a></td>
                                        </tr>
                                        <tr>
                                            <td>17543</td>
                                            <td>adam</td>
                                            <td>Adam Brylle Sta. Isabel</td>
                                            <td>Level 1</td>
                                            <td>Jun 25, 2017 03:30PM</td>
                                            <td>siegfp</td>
                                            <td>0.0005BTC</td>
                                            <td><a href="{{ url('referrals/17543') }}" title="View history of earnings"><i class="ti-new-window"></i> </a></td>
                                        </tr>
                                        <tr>
                                            <td>17540</td>
                                            <td>leocyl</td>
                                            <td>Leo Cyl Unduna</td>
                                            <td>Level 2</td>
                                            <td>Jun 26, 2017 12:00AM</td>
                                            <td>adam</td>
                                            <td>0.002BTC</td>
                                            <td><a href="{{ url('referrals/17540') }}" title="View history of earnings"><i class="ti-new-window"></i> </a></td>
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
            $('.navbar-brand').html('Referrals');
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