@extends('layouts.admin.layout')
@section('title') Edit Group @endsection
@section('content')
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="{{ url('admin/group') }}">Group</a>
                </li>
                <li class="active">Edit</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>

                @include('patials.admin.ace-settings')
                <!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <div class="page-header">
                <h1>
                    Edit  group " {{ $group->title }} "
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    {!! Form::open(['method' => 'PUT', 'url' => 'admin/group/' . $group->id, 'role' => 'form']) !!}
                    <div class="form-group">
                        <label>Id</label>
                        {!! Form::text('id', $group->id, ['class' => 'form-control', 'placeholder' => $group->id, 'disabled']) !!}
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        {!! Form::text('title', $group->title, ['class' => 'form-control', 'placeholder' => $group->title]) !!}
                    </div>
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection