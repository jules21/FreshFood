<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name') }}</title>
    @include('freshfood.partials.headerstyles')
</head>
<body style="background-image: url({{asset('img/bg.png')}});">
<div class="container-fluid mt-1">
    @include('freshfood.partials.header')
    @yield('content')
    @include('freshfood.partials.footer')
    @include('freshfood.partials.footerscripts')
</div>
</body>
</html>