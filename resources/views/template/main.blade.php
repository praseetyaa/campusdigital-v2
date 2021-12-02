<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('template._head')
    @yield('css-extra')
</head>
<body id="spandiv">
    @include('template._header')
    @yield('content')
    @include('template._footer')
    @include('template._js')
    @yield('js-extra')
</body>
</html>
