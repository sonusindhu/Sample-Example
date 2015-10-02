<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Principal Skills</title>

        <!-- Bootstrap -->
        <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('css/responsive.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('css/font-awesome.css')}}" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--add start -->
        <div class="add"> <img src="/img/add.png" class="img-responsive" /> </div>
        <!--add closed --> 

        @yield('content')



        {{-- Included our footer section --}}
        @include('layouts.footer')