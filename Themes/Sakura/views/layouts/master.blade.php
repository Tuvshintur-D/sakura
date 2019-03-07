<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="current-locale" content="{{\App::getLocale()}}" >
    <title>{{$page->title}} | @setting('core::site-name')</title>
    <link href="{{asset('/css/web.css')}}" rel="stylesheet">
    <link href="{{asset('/css/ztyle.css')}}" rel="stylesheet">
    <link href="{{asset('/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('/css/slick.theme.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,500i,700,900" rel="stylesheet">
    <script src="{{asset('/js/jquery.js')}}"></script>
</head>
<body>
    @yield('content')
    <script src="{{asset('/js/web.js')}}"></script>
    <script src="{{asset('/js/slick.min.js')}}"></script>

    @yield('js')
</body>
</html>
