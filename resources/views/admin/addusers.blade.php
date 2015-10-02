@extends('layouts_admin.master')

@section('content')


<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">


        <!-- BEGIN PAGE HEADER-->

        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/admin">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="/admin/users">Users</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Add User</a>
                </li>
            </ul>

        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box grey-cascade">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-globe"></i>Add New User
                        </div>

                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a href="/admin/users" id="sample_editable_1_new" class="btn green">
                                            Manage Users
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <form class="form-horizontal" method="post" action="{{ url('/admin/users/addpost') }}">
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
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>

        <!-- END PAGE CONTENT-->
    </div>
</div>
<!-- END CONTENT -->



@stop