@extends('layouts.admin.layout')
@section('name') Edit User @endsection
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
                <li class="active">Edit</li>
            </ul>
            <!-- /.breadcrumb -->
            
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
                    Edit user "{{ $user->name }}" 
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    {!! Form::open(['method' => 'PATCH', 'url' => 'admin/user/' . $user->id, 'role' => 'form', 'class' => 'form-horizontal']) !!}
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name"> Name </label>
                            <div class="col-sm-9">
                                {!! Form::text('name', is_null($user->name) ? null:$user->name, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => $user->name, 'minlength' => '4', 'required']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="email"> Email </label>
                            <div class="col-sm-9">
                                {!! Form::email('email', is_null($user->email) ? null:$user->email, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => $user->email, 'required']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="address"> Address </label>
                            <div class="col-sm-9">
                                {!! Form::text('address', is_null($user->address) ? null:$user->address, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => is_null($user->address) ? 'Address':$user->address]) !!}
                            </div>
                        </div>
                            
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="phone"> Phone </label>
                            <div class="col-sm-9">
                                {!! Form::text('phone', is_null($user->phone) ? null:$user->phone, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => is_null($user->phone) ? 'Phone':$user->phone, 'minlength' => '10', 'maxlength' => '13', 'pattern' => '(\+84|0)\d{9,10}']) !!}
                            </div>
                        </div>
                            
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="group">Type</label>
                            <div class="col-sm-9">
                                {!! Form::select('group', $groups) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-9 center">
                                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                        <div class="space-4"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection