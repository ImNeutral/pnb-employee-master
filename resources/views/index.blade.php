@include('includes.header')
<style>
    .alert-danger {
        color:red;
    }
    *, .button {
        font-family: 'Montserrat', sans-serif;
    }
    .box {
        background: #1a3848 url({{ asset('images/bg2.jpg') }}) no-repeat center top;
        background-size: cover;
        min-height: 670px;
        width: 100%;
        z-index: 999;
    }
    #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        background-position: 50% 50%;
        background-repeat: no-repeat;
    }
    .box1 {
        height: 100%;
        margin: 0 auto;
        overflow: hidden;
        display: table;
        z-index: 999;
        width: 80%;
    }
    .box1 .header {
        text-align: center;
    }
    input, button, h1, h2 {
        font-family: 'Montserrat', sans-serif !important;
    }
    .head,.box .body  {
        width: 90%;
        margin: 0 auto;
    }
    nav {
        z-index: 999;
        /* width: 1200px; */
        width: 100%;
        margin: 0 auto;
        padding-top: 35px;
        display: block;

    }
    nav h2 {
        font-family: 'Montserrat', sans-serif;
        color: white;
        text-transform: uppercase;
        float: left;
    }
    nav .nav-buttons {
        float: right;
    }
    .clear {
        clear: both;
    }
    .form-item {
        margin-bottom: 1rem;
    }
    .box .body {
        padding-top: 0rem;
    }
    figure {
        width: 85%;
        border-radius: 2px;
    }
    h1 {
        color: white;
    }
    .item {
        padding: 1rem;
    }
    .item .fa {
        color: #fbc801;
    }
    h1.item {
        margin-bottom: 0;
        padding-bottom: 0;
    }
    h2.item {
        padding: 0 0 0 1rem;
        margin-bottom: 0;
    }
    nav .logo {
        width: 320px;
        height: 45px;
        display: inline-block;
        float: left;
    }
    nav .logo span {
        float: left;
        margin-left: 1rem;
        color: #fff;
        font-size: 24px;
        line-height: 45px;
    }
    nav .logo img {
        width: 15%;
        float: left;
    }
    nav {
        z-index: 999;
    }
    #top {
        min-height: 100vh;
        width: 80%;
        margin: 0 auto;
        overflow: hidden;
        display: table;
        z-index: 999;
        position: relative;
    }
    iframe {
        border: 4px solid white;
        -webkit-border-radius:2px;
        -moz-border-radius:2px;
        border-radius:2px;
    }
    #top .form {
        margin-top: 2rem;
    }
    .section-padding {
        padding-top: 100px;
        padding-bottom: 50px;
    }
    .display-2 {
        font-size: 4rem !important;
        font-weight: 600;
        letter-spacing: 0px;
        font-family: 'Montserrat', sans-serif;
        color: #01a5ff;
    }
    .header h2 {
        color: #778084;
    }
    .come-in {
        transform: translateY(150px);
        animation: come-in 0.8s ease forwards;
    }
    @keyframes come-in {
        to { transform: translateY(0); }
    }
    #register .form-div {
        width: 50%;
        margin: 0 auto;
    }
    footer {
        width: 100%;
        display: block;
        background: #17333f;
        margin-bottom: 0;
    }
    .foot {
        margin: 0 auto;
        width: 80%;
    }
    .info {
        font-size: 14px;
        line-height: 70px;
        font-family: 'Montserrat', sans-serif;
        color: whitesmoke;
    }
    .info p {
        margin: 0;
    }
    .body h2 {
        color: white;
    }
</style>
<link href="{{ asset('/css/mobile.css') }}" rel="stylesheet">
<div class="row auto">
    <div class="box">
        <div id="particles-js"></div>
        <div id="top">
            <div class="head">
                <nav>
                    <h1>
                        <a href="/" class="logo">
                            <img src="{{ asset('images/logo.png') }}" alt="">
                            <span>CRYPTOWEALTH</span>
                        </a>
                    </h1>
                    <div class="nav-buttons">
                        <a href="#register" class="button round outline">Sign Up</a>
                    </div>
                </nav>
            </div>
            <p class="clear"></p>
            <div class="body">
                <div class="row gutters">
                    <div class="col col-7">
                        <div class="row">
                            <figure>
                                <div class="video-container">
                                    <iframe src="https://player.vimeo.com/video/149114040" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    <p><a href="https://vimeo.com/149114040">CRYPTOWEALTH</a> from <a href="https://vimeo.com/user3971954">Terry Ortman</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                                </div>
                            </figure>
                        </div>
                        <div class="row">
                            <h2 class="item"><i class="fa fa-check-square-o" aria-hidden="true"></i> +100% Investment<br><span></span></h2>
                        </div>
                        {{--<div class="row">
                            <h2 class="item">30$ - 10,000$</h2>
                        </div>--}}
                        <div class="row">
                            <h2 class="item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Instant Cashout<br><span></span></h2>
                        </div>
                        <div class="row">
                            <h2 class="item"><i class="fa fa-check-square-o" aria-hidden="true"></i> SSL Encryption<br><span></span></h2>
                        </div>
                    </div>
                    <div class="col col-5">
                        <h2>Sign In</h2>
                        <form class="form" role="form" method="POST" action="{{ url('login') }}">
                            {{ csrf_field() }}
                            <div class="form-item">
                                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="off" class="big" placeholder="Email address">
                            </div>
                            <div class="form-item">
                                <input type="password" autocomplete="off" class="big" name="password" required placeholder="Password">
                            </div>
                            <div class="form-item">
                                <button class="button w100 big">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <section id="register" class="box1 section-padding">
        <div class="header">
            <h1 class="display-2 come-in">Invest with Us</h1>
            <h2>Sign Up</h2>
        </div>

        <div class="form-div">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" class="form" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="row gutters">
                    <div class="col col-6">
                        <div class="form-item">

                            <input type="text" name="firstname" placeholder="First Name *" oninvalid="this.setCustomValidity('Please enter your first name')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                    <div class="col col-6">
                        <div class="form-item">
                            <input type="text" name="lastname" placeholder="Last Name *" oninvalid="this.setCustomValidity('Please enter your last name')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                </div>
                <div class="row gutter">
                    <div class="col col-12">
                        @if ($errors->has('email'))
                            <label><span class="error">{{ $errors->first('email') }}</span></label>
                        @endif
                        <div class="form-item">
                            <input type="email" name="email" placeholder="Email Address *" oninvalid="this.setCustomValidity('Please enter your email address')" oninput="setCustomValidity('')" required>
                        </div>

                    </div>
                </div>
                <div class="row gutter">
                    <div class="col col-12">
                        <div class="form-item">
                            <input type="email" name="r-email" placeholder="Repeat Email Address *" oninvalid="this.setCustomValidity('Please confirm your email address')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                </div>
                <div class="row gutter">
                    <div class="col col-12">
                        <div class="form-item">
                            <input type="password" name="password" placeholder="Password *" oninvalid="this.setCustomValidity('Please enter your desired password')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                </div>
                <div class="row gutter">
                    <div class="col col-12">
                        <div class="form-item">
                            <input type="password" name="password_confirmation" placeholder="Repeat Password *" oninvalid="this.setCustomValidity('Please confirm your desired password')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                </div>
                {{--<div class="row gutter">
                    <div class="col col-12">
                        <div class="form-item">
                            <input type="text" name="bitcoin" placeholder="BitCoin *" oninvalid="this.setCustomValidity('Please enter your bitcoin id')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                </div>--}}
                <div class="row gutter">
                    <div class="col col-12">
                        <div class="form-item">
                            <label class="checkbox"><input required type="checkbox" required> I agree with the <a href="terms-and-conditions" target="_blank">Terms and conditions</a></label>
                        </div>
                    </div>
                </div>
                <div class="form-item">
                    <button class="button w100">Sign Up</button>
                </div>
            </form>
        </div>
    </section>
</div>
<footer>
    <div class="foot">
        <div class="info">
            <p>Copyright&nbsp;© 2017&nbsp;CRYPTOWEALTH Ltd.</p>
        </div>
    </div>
</footer>
<script src="{{ asset('js/particles.min.js') }}"></script>
<script>
    particlesJS.load('particles-js', "{{ asset('particlesjs-config.json') }}", function() {
        console.log('callback - particles.js config loaded');
    });
</script>
<script>
    $(document).ready(function() {
        var ids = ['firstname', 'lastname', 'username', 'email', 'r-email', 'password', 'password_confirmation', 'bitcoin'];
        function success(e) {
            $(e).removeClass('error');
            $(e).addClass('success');
        }
        function error(e){
            $(e).removeClass('success');
            $(e).addClass('error');
        }
        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
        $('a').on('click', function(e){
            e.preventDefault();
            $('html, body').stop().animate({
                scrollTop: $('#register').offset().top
            }, 1000);
        });
        $('#register input').on('blur', function () {
            ($(this).val()!='')? success(this) : error(this);
            /*for(i=$.inArray($(this).attr('name'), ids)-1; i>=0; i--){
                console.log(ids[i]);
                if(ids[i]!='email' && ids[i]!='r-email' && $('input[name='+ids[i]+']').val()=='')
                    error($('input[name='+ids[i]+']'));
                else if(ids[i]=='email' || ids[i]=='r-email' && $('input[name='+ids[i]+']').hasClass('success')){
                    error($('input[name='+ids[i]+']'));
                }
            }*/
        });
        $('input[name="r-email"], input[name="email"]'  ).on('blur', function() {
            (validateEmail($(this).val())) ? success(this) : error(this);
        });
        $('input[name="r-email"]').on('blur', function () {
            ($('input[name="r-email"]').val()!='' ) ? error(this) : success(this);
            ($('input[name="r-email"]').val()!=$('input[name="email"]').val()) ? error(this) : success(this);
        });
        $('input[name="password"], input[name="password_confirmation"]').on('blur', function() {
                ($('input[name="password_confirmation').val()!=$('input[name="password').val()) ? error($('input[name="password_confirmation')) : success($('input[name="password_confirmation'));
        });
    });
</script>
</body>