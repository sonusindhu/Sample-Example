<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Admin Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="/css/login3.css" rel="stylesheet" type="text/css"/>
        <link href="/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img src="/img/logo.png" alt=""/>
            </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="menu-toggler sidebar-toggler">
        </div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->

          

            <form class="login-form" action="{{ url('/admin/login') }}" method="post">

                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                <h3 class="form-title">Login to your account</h3>

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                @if (session('error')=='login')
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span>Please login to access this page!</span>
                </div>
                @endif

                @if (session('error')=='unauthorized')
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span>You are not authorized to access this page!</span>
                </div>

                @endif
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" value="{{ old('email') }}" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
                    </div>
                </div>
                <div class="form-actions">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1"/> Remember me </label>
                    <button type="submit" class="btn green-haze pull-right">
                        Login <i class="m-icon-swapright m-icon-white"></i>
                    </button>
                </div>
              
                <div class="forget-password">
                    <h4>Forgot your password ?</h4>
                    <p>
                        no worries, click <a href="javascript:;" id="forget-password">
                            here </a>
                        to reset your password.
                    </p>
                </div>
          
            </form>
            <!-- END LOGIN FORM -->

        </div>
        <div class="copyright">
            2015 &copy; Laravel Admin Dashboard Template.
        </div>
    </body>
    <!-- END BODY -->
</html>

