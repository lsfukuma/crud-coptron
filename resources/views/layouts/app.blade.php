<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/9cd5be54d3.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('../partials.menu')
    @yield('content')
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
</body>

</html>