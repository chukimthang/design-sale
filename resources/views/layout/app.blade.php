<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shop mua sắm trực tuyến</title>

    <link rel="stylesheet" href="{{ asset('css/user.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}">
    </script>
</head>
<body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
    
    <script src="{{ asset('js/user.js') }}"></script>
</body>
</html>
