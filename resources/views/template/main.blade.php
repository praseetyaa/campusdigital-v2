<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('template._head')
    @include('template._css')
    @yield('css-extra')
</head>
<body>
    @include('template._header')
    @yield('content')
    @include('template._footer')
    @include('template._js')
    @yield('js-extra')
</body>
</html>
