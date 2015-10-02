@extends('layouts.master')

@section('content')

{{-- Included our header section --}}
@include('layouts.header')

<section class="user_sign_in">
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                <div class="col-sm-4 col-md-4 user_left_bx">

                    <p>Don't have an account: <a href="/signup">Sign Up</a>

                </div>
                <div class="col-sm-7 col-md-7 sign_in_form">
                    <form class="form-horizontal" method="post" action="{{ url('/auth/login') }}">

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"></label>
                            <div class="col-sm-9">
                                <h3>Sign In</h3>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                <a href="{{ url('/forget') }}">Forgot Your Password?</a>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-default">Sign in</button>

                                <label class="lbl_class">
                                    <input type="checkbox" name="remember" style="padding-left:10px;">Keep me signed in on this computer
                                </label>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

@stop
