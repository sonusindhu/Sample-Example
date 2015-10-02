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
                    <a href="#">Edit Profile</a>
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
                            <i class="fa fa-globe"></i>Edit Profile
                        </div>
                    </div>
                    <div class="portlet-body">
                        
                        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('/admin/profile/addpost') }}">
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
                                    <h3>Edit Profile</h3>
                                </div>
                            </div>
                            <input type="hidden" name="id" class="form-control tlt_bx" id="inputId" value="{{ $profile->id }}">
                            
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="title" value="{{ $profile->title }}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">First Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="firstname" value="{{ $profile->firstname }}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="surname" value="{{ $profile->surname }}">
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="email" value="{{ $profile->email }}">
                                    
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