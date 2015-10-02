<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Admin Panel</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="/../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="/../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="/../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <link href="/../../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <link href="/../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
        <link href="/../../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
        <link href="/../../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN PAGE STYLES -->
        <link href="/../../assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE STYLES -->
        
        <!-- BEGIN THEME STYLES -->
        <link href="/../../assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="/../../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="/../../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="/../../assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="/../../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->

    <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">

        @include('layouts_admin.header')


        <!-- BEGIN CONTAINER -->
        <div class="page-container">

            @include('layouts_admin.nav')

            @yield('content')

        </div>
        <!-- END CONTAINER -->


        {{-- Included our footer section --}}
        @include('layouts_admin.footer')