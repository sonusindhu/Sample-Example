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
                    <a href="/admin/profile">Profile</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Edit Password</a>
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
                            <i class="fa fa-globe"></i>Edit Password
                        </div>
                    </div>
                    <div class="portlet-body">
                        
                        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('/admin/profile/passwordpost') }}">
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
                                    <h3>Edit Password</h3>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" >
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password_confirmation" >
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-10 m_tp_2">
                                    <button type="submit" class="btn btn-default btn green">Update</button>
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