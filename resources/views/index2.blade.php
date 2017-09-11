@extends('includes.header')
@section('content')
    <style>
        .colspan-2 {
            text-align: center !important;
        }
    </style>
    <body class="landing-page landing-page1">
        <nav class="navbar navbar-transparent navbar-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a href="http://www.creative-tim.com">
                        <div class="logo-container">
                            <div class="logo">
                                <img src="assets/img/logo.png" alt="Creative Tim Logo">
                            </div>
                        </div>
                    </a>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="example" >

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                HOME
                            </a>
                        </li>
                        <li>
                            <a href="#about-us">
                                ABOUT US
                            </a>
                        </li>
                        <li>
                            <a href="#plans">
                                PLANS
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-round btn-fill btn-login" href="{{ url('login') }}">
                                LOGIN
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-round btn-fill btn-signup" href="{{ url('signup') }}">
                                SIGNUP
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="wrapper">
            <div id="particles-js"></div>
            <div class="parallax filter-gradient blue" data-color="blue">
                <div class="parallax-background">
                    <img class="parallax-background-image" src="{{ asset('assets/img/template/bg3.jpg') }}" {{--src="{{ asset('images/bg2.jpg') }}--}}">
                </div>
                <div class= "container">
                    <div class="row">
                        <div class="col-md-5 hidden-xs">
                            <div class="parallax-image">
                                <img class="phone" src="{{ asset('assets/img/template/iphone.png') }}" style="margin-top: 20px"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <div class="description">
                                <h2>WELCOME TO CRYPTOWEALTH</h2>
                                <br>
                                <h5>We offer a wide range of services, designed to help Bitcoin miners invest their Bitcoins at great interest rates. We are based in London and have in our employ investment professionals from advanced computer technology to engineering.</h5>
                            </div>
                            <div class="buttons">
                                <a href="{{ url('signup') }}" class="btn btn-neutral btn-lg btn-fill btn-signup"><i class="pe-7s-right-arrow"></i>&nbsp;&nbsp;&nbsp;SIGNUP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-white section-income">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 des">
                            <div class="media-left">
                                <span class="icon icon-lg-2 icon-yellow fa fa-clock-o fa-4x"></span>
                            </div>
                            <div class="media-body">
                                <h5>Earn 3% every 24hrs!</h5>
                                <p>
                                    Enjoy the advantages of financial innovations. Forget the human factor: a computer algorithm strictly pays income every minute!
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 des">
                            <div class="media-left"><span class="icon icon-lg-2 icon-emerland fa fa-users fa-4x"></span></div>
                            <div class="media-body"><h5 class="txt-primary">Generous affiliate program!</h5><p>Our affiliate program is the simplest and most profitable. Upto 6% comission of all the investments you have attracted! Withdraw anytime!</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="section section-gray section-clients">
                <div class="container text-center">
                    <h4 class="header-text">Friends in high places</h4>
                    <p>
                        Build customer confidence by listing your users! Anyone who has used your service and has been pleased with it should have a place here! From Fortune 500 to start-ups, all your app enthusiasts will be glad to be featured in this section. Moreover, users will feel confident seing someone vouching for your product!<br>
                    </p>
                    <div class="logos">
                        <ul class="list-unstyled">
                            <span>We accept: </span>
                            <li ><img src="assets/img/logos/adobe.png"/></li>
                            <li ><img src="assets/img/logos/zendesk.png"/></li>
                            <li ><img src="assets/img/logos/ebay.png"/></i>
                            <li ><img src="assets/img/logos/evernote.png"/></li>
                            <li ><img src="assets/img/logos/airbnb.png"/></li>
                            <li ><img src="assets/img/logos/zappos.png"/></li>
                        </ul>
                    </div>
                </div>
            </div>
            -->
            <section id="about-us">
                <div class="section section-presentation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="description">
                                <h4 class="header-text cs-head">About Us</h4>
                                <p>Founded in 2015, Crypto Wealth Ltd has quickly established itself as a trusted cryptocurrency investment company, offering a comprehensive set of services for Bitcoin holders to make sound investments and safeguard their financial future. Based in London, Crypto Wealth Ltd has invested in a diversified staff of leading professionals across a broad spectrum of specialties, including engineering, advanced computational technology, and cryptocurrency mining techniques.</p>
                                <p>To give our customers a unique advantage, we developed state of the art processes that are enhanced by our extensive infrastructure. Combining both modern and classical applications, we’ve strategically maneuvered ourselves to provide effective Bitcoin mining at a reduced cost to our clients. Because we employ diversified options through Bitcoin growth and mining opportunities, investing is safer than ever and the risk is practically non-existent.</p>
                                <div class="certificate_block">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="http://www.datalog.co.uk/browse/detail.php/CompanyNumber/09865572/CompanyName/CRYPTO+WEALTH+LIMITED" target="_blank">
                                                <img src="assets/img/certificate.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="cs-head">CRYPTOWEALTH LIMITED</h4>
                                            <p><i class="pe-7s-mail"></i> support@cryptowealth.io</p>
                                            <p><i class="pe-7s-medal"></i> Company Number 9865572</p>
                                            <p><i class="pe-7s-home"></i> 1 Wilder Walk, London, United Kingdom, W1B 5AP</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="visible-xs vimeo">
                                <iframe src="https://player.vimeo.com/video/149114040" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 hidden-xs">
                            <div class="row">
                                <div class="col">
                                    <img src="assets/img/hero.svg" style="position: inherit"/>
                                </div>
                                <div class="col">
                                    <iframe src="https://player.vimeo.com/video/149114040" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </section>

            <div class="section section-demo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="description-carousel" class="carousel fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img src="{{ asset('assets/img/template/examples/home_33.jpg') }}" alt="">
                                    </div>
                                    <div class="item active">
                                        <img src="{{ asset('assets/img/template/examples/home_22.jpg') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/img/template/examples/home_11.jpg') }}" alt="">
                                    </div>
                                </div>
                                <ol class="carousel-indicators carousel-indicators-blue">
                                    <li data-target="#description-carousel" data-slide-to="0" class=""></li>
                                    <li data-target="#description-carousel" data-slide-to="1" class="active"></li>
                                    <li data-target="#description-carousel" data-slide-to="2" class=""></li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <h4 class="header-text des">HIGH COMMISSIONS</h4>
                            <p>
                                For every spent amount of the referred users, you can earn a percentage commission for each transaction made by your invites and the for every invites they made. A two-tier affiliate program.
                            </p>
                            <a href="http://www.creative-tim.com/product/awesome-landing-page" id="Demo3" class="btn btn-fill btn-info" data-button="info">Get Free Demo</a>
                        </div>
                    </div>
                </div>
            </div>
            <section id="plans">
                <div class="section section-features">
                    <div class="container">
                        <h4 class="header-text text-center cs-head">INVESTMENT PLANS</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-blue">
                                    <div class="icon">
                                        <i class="pe-7s-coffee"></i>
                                    </div>
                                    <h3 class="cs-head">STARTER</h3>
                                    <h3 class="cs-head cs-head-2">PACKAGE</h3>
                                    <h4>DAILY</h4>
                                    <div class="">
                                        <table class="package">
                                            <tr>
                                                <td>Minimum</td>
                                                <td>0.01BTC</td>
                                            </tr>
                                            <tr>
                                                <td>Maximum</td>
                                                <td>0.05BTC</td>
                                            </tr>
                                            <tr>
                                                <td class="colspan-2" colspan="2">+3% every 24hrs</td>
                                            </tr>
                                            {{--<tr>
                                                <td>Affiliates</td>
                                                <td>0.0009BTC</td>
                                            </tr>
                                            <tr>
                                                <td>0.05BTC</td>
                                                <td>0.00015BTC</td>
                                            </tr>
                                            <tr>

                                            </tr>--}}
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-blue">
                                    <div class="icon">
                                        <i class="pe-7s-rocket"></i>
                                    </div>
                                    <h3 class="cs-head">PRO</h3>
                                    <h3 class="cs-head cs-head-2">PACKAGE</h3>
                                    <h4>DAILY</h4>
                                    <div class="">
                                        <table class="package">
                                            <tr>
                                                <td>Minimum</td>
                                                <td>0.10BTC</td>
                                            </tr>
                                            <tr>
                                                <td>Maximum</td>
                                                <td>0.50BTC</td>
                                            </tr>
                                            <tr>
                                                <td class="colspan-2" colspan="2">+3% every 24hrs</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-blue">
                                    <div class="icon">
                                        <i class="pe-7s-diamond"></i>
                                    </div>
                                    <h3 class="cs-head">PREMIUM</h3>
                                    <h3 class="cs-head cs-head-2">PACKAGE</h3>
                                    <h4>DAILY</h4>
                                    <div class="">
                                        <table class="package">
                                            <tr>
                                                <td>Minimum</td>
                                                <td>1.0BTC</td>
                                            </tr>
                                            <tr>
                                                <td>Maximum</td>
                                                <td>4.0BTC</td>
                                            </tr>
                                            <tr>
                                                <td class="colspan-2" colspan="2">+3% every 24hrs</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--
            <div class="section section-testimonial">
                <div class="container">
                    <h4 class="header-text text-center">What people think</h4>
                    <div id="carousel-example-generic" class="carousel fade" data-ride="carousel">

                        <div class="carousel-inner" role="listbox">
                            <div class="item">
                                <div class="mask">
                                    <img src="assets/img/faces/face-4.jpg">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Jay Z, Producer</p>
                                    <h3>"I absolutely love your app! It's truly amazing and looks awesome!"</h3>
                                </div>
                            </div>
                            <div class="item active">
                                <div class="mask">
                                    <img src="assets/img/faces/face-3.jpg">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Drake, Artist</p>
                                    <h3>"This is one of the most awesome apps I've ever seen! Wish you luck Creative Tim!"</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mask">
                                    <img src="assets/img/faces/face-2.jpg">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Rick Ross, Musician</p>
                                    <h3>"Loving this! Just picked it up the other day. Thank you for the work you put into this."</h3>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators carousel-indicators-blue">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="section section-no-padding">
                <div class="parallax filter-gradient blue" data-color="blue">
                    <div class="parallax-background">
                        <img class ="parallax-background-image" src="assets/img/template/bg3.jpg"/>
                    </div>
                    <div class="info">
                        <h1>Download this landing page for free!</h1>
                        <p>Beautiful multipurpose bootstrap landing page.</p>
                        <a href="http://www.creative-tim.com/product/awesome-landing-page" class="btn btn-neutral btn-lg btn-fill">DOWNLOAD</a>
                    </div>
                </div>
            </div>
            -->
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    HOME
                                </a>
                            </li>
                            <li>
                                <a href="#about-us">
                                    ABOUT US
                                </a>
                            </li>
                            <li>
                                <a href="#plans">
                                    PLANS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    LOGIN
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    SIGNUP
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-area pull-right">
                        <a class="btn btn-social btn-facebook btn-simple">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a class="btn btn-social btn-twitter btn-simple">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social btn-pinterest btn-simple">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </div>
                    <div class="copyright">
                        &copy; 2017 <a href="">CRYPTOWEALTH Ltd.</a>, made with love
                    </div>
                </div>
            </footer>
        </div>

    </body>

@endsection