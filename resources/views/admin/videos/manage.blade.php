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
                    <a href="/admin/videos">Manage</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Managed Videos</a>
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
                            <i class="fa fa-globe"></i>Managed Videos
                        </div>

                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a href="/admin/videos/add" id="sample_editable_1_new" class="btn green">
                                            Add New Video <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="table-checkbox">
                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    </th>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Thumb</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $video)
                                <tr class="odd gradeX">
                                    <td> 
                                        <input type="checkbox" class="checkboxes" value="{{$video->id }}" />
                                    </td>
                                    <td>{{$video->id}}</td>
                                    <td>{{$video->title}}</td>
                                    <td>{{$video->embed }}</td>
                                    <td>{{$video->created_at }}</td>
                                    <td>
                                        @if ($video->status)
                                        <a href="/admin/videos/update/{{$video->id}}/0">
                                        <span class="label label-sm label-success" style="cursor: pointer">Publish </span>
                                        </a>
                                        @else
                                        <a href="/admin/videos/update/{{$video->id}}/1">
                                        <span class="label label-sm label-warning" style="cursor: pointer">Un-Publish </span>
                                        </a>
                                        @endif
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Are you sure?')" href="/admin/videos/delete/{{$video->id}}" class="btn btn-xs red">
                                            <i class="fa fa-times"></i>
                                        </a>
                                        
                                        
                                        <a href="/admin/videos/edit/{{$video->id}}" class="btn btn-xs green">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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