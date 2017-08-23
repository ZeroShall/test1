@extends('layouts.admin.layout')
@section('title')  Create User  @endsection
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="{{ url('admin') }}">Home</a>
                    </li>

                    <li>
                        <a href="{{ url('admin/user') }}">User</a>
                    </li>
                    <li class="active">Create</li>
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
                        Create User
                    </h1>
                </div><!-- /.page-header -->

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        {!! Form::open(['type' => 'POST', 'url' => 'admin/user', 'role' => 'form', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name"> Name *</label>
                            <div class="col-sm-9">
                                {!! Form::text('name', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Name', 'minlength' => '4', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="email"> Email *</label>
                            <div class="col-sm-9">
                                {!! Form::email('email', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Email', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="address"> Address </label>
                            <div class="col-sm-9">
                                {!! Form::text('address', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Adress']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="phone"> Phone</label>
                            <div class="col-sm-9">
                                {!! Form::text('phone', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'phone', 'minlength' => '10', 'maxlength' => '13', 'pattern' => '(\+84|0)\d{9,10}']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="group">Group</label>
                            <div class="col-sm-9">
                                {!! Form::select('group', $groups) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="password">Password *</label>
                            <div class="col-sm-9">
                                {!! Form::password('password', ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Password', 'required', ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 center">
                                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        <div class="space-4"></div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection