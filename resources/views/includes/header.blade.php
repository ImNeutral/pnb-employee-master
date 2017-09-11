<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>CRYPTOWEALTH LIMITED</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/landing-page.css') }}" rel="stylesheet"/>

    {{--<!--     Fonts and icons     -->--}}
    {{--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">--}}
    {{--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>--}}
    {{--<link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">--}}
</head>

@yield('content')
<script src="{{ asset('js/particles.min.js') }}"></script>
<script>
    particlesJS.load('particles-js', "{{ asset('particlesjs-config.json') }}", function() {
        console.log('callback - particles.js config loaded');
    });
</script>
<script src="{{ asset('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
<script src="{{ asset('assets/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/awesome-landing-page.js') }}" type="text/javascript"></script>
</html>