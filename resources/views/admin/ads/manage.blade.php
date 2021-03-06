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
                    <a href="/admin/contacts">Manage</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Manage Contact Request</a>
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
                            <i class="fa fa-globe"></i>Manage Contact Request
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="table-checkbox">
                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    </th>
                                    <th>ID</th>
                                    <th>Position</th>
                                    <th>Code</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ads as $ad)
                                <tr class="odd gradeX">
                                    <td> 
                                        <input type="checkbox" class="checkboxes" value="{{$ad->id }}" />
                                    </td>
                                    <td>{{$ad->id}}</td>
                                    <td>{{$ad->position }}</td>
                                    <td>{{$ad->code}}</td>
                                    <td>{{$ad->created_at }}</td>
                                    <td>
                                        @if ($ad->status)
                                        <a href="/admin/ads/update/{{$ad->id}}/0">
                                        <span class="label label-sm label-success" style="cursor: pointer">Publish </span>
                                        </a>
                                        @else
                                        <a href="/admin/ads/update/{{$ad->id}}/1">
                                        <span class="label label-sm label-warning" style="cursor: pointer">Un-Publish </span>
                                        </a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/admin/ads/edit/{{$ad->position}}" class="btn btn-xs green">
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