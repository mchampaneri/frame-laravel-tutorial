
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
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Global Comman Css And Preloading Javascripts -->
    @include('admin.layout.head')
    <!-- Page Spacific Css and preloading componenets -->
    @yield('preload')

<body class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">
        <!-- Navigation Bar starts Here -->
        @include('admin.layout.header')
        <!-- Navigation Bar Completes -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content-header')
            </section>
            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
        </div>



        @include('admin.layout.footer')
        @yield('postload')
        <!-- Global Postloading javascripts -->
        @include('admin.layout.foot')
    </div>
</body>
</html>

