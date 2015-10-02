@extends('layouts.master')

@section('content')

{{-- Included our header section --}}
@include('layouts.header')

<style>
    .user_left_bx p{ margin: 10px; }
</style>
<section class="user_sign_in">
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                <div class="col-sm-4 col-md-4 user_left_bx">

                    <p>Don't have an account: <a href="/signup">Sign Up</a>
                    <p>Already have an account: <a href="/login">Sign in</a>

                </div>
                <div class="col-sm-7 col-md-7 sign_in_form">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/forget') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

@stop