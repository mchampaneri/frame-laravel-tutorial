<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>@yield('title')</title>
    @yield('preload')
    @include('front.layout.head')
</head>
<body data-spy="scroll" data-target="#menu-section">


        @yield('content')

        @include('front.layout.footer')
        @yield('postload')
        @include('front.layout.foot')
</body>
</html>