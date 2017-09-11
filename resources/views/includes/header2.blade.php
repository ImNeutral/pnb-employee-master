<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    @yield('extracss')
    @yield('extrajs')

    @yield('extrastyles')
    @yield('extrascripts')
</head>

<body>
@yield('content')
</body>
</html>
