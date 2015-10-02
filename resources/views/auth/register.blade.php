@extends('layouts.master')

@section('content')

{{-- Included our header section --}}
@include('layouts.header')

<section class="user_sign_in">
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                <div class="col-sm-4 col-md-4 user_left_bx_1">

                    <p class="p_cntent">You will be able to make purchases download free discount and offer vouchers,view account history and much more.....
                    <p>I already  have an account: <a href="/login">Sign in</a>

                </div>
                <div class="col-sm-7 col-md-7 sign_in_form">
                    <form class="form-horizontal" method="post" action="{{ url('/auth/register') }}">
                        
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                                <h3>Sign up</h3>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control tlt_bx" id="inputEmail3" placeholder="Mr or Mrs" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">First name</label>
                            <div class="col-sm-9">
                                <input type="text" name="firstname" value="{{ old('firstname') }}" class="form-control" id="inputEmail4" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Surname</label>
                            <div class="col-sm-9">
                                <input type="text" name="surname" value="{{ old('surname') }}" class="form-control" id="inputsurname5" placeholder="">

                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail6" placeholder="This will be your Username to sign in">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Confirm </label>
                            <div class="col-sm-9">
                                <input type="email" name="email_confirmation" value="{{ old('email_confirmation') }}" class="form-control" id="inputPassword7" placeholder="Confirm Email">

                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="inputPassword8" placeholder="">

                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Confirm</label>
                            <div class="col-sm-9">
                                <input type="password" name="password_confirmation" class="form-control" id="inputEmail9" placeholder="Confirm password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label"></label>
                            <div class="col-sm-9 chk_bx">
                                <div class="checkbox ">
                                    <label>
                                        <input name="subscribe" type="checkbox"> I would like to receive Club Vouchers discount & offers,<br> I understand can unsubscribe at any time.
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-sm-3 control-label"></label>
                            <div class="col-sm-9 m_tp_1">
                                <div class="checkbox ">
                                    <label>
                                        <input name="accept" type="checkbox"> Your Information is safe with us, <br>I agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy policy</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-10 m_tp_2">
                                <button type="submit" class="btn btn-default">Sign Up</button>

                                <label class="lbl_class">
                                    <input name="keepsign" type="checkbox" style="padding-left:10px;">Keep me signed in on this computer
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