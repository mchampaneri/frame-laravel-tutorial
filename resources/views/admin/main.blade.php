
<!--**
 * Created by PhpStorm.
 * User: Manish Champaneri
 * Date: 25-03-2016
 * Time: 18:15
 */ -->
<!DOCTYPE html>
<!--
Screen Cast Frame Work Admin Page Template
-->


<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Global Comman Css And Preloading Javascripts -->
    @include('admin.layout.head')
    <!-- Navigation Related Componenets  -->
    @include('admin.layout.header')
    <!-- Page Spacific Css and preloading componenets -->
    @yield('preload')

<body>
    @yield('content')

    @yield('postload')

            
    @include('footer')
    <!-- Global Postloading javascripts -->
    @include('foot')
</body>
</html>

