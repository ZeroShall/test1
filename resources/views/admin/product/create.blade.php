@extends('layouts.admin.layout')
@section('title') Create Product  @endsection
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
                    <a href="{{ url('admin/product') }}">Product</a>
                </li>
                <li class="active">Create</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>

            @include('patials.admin.ace-settings')<!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <div class="page-header">
                <h1>
                    Create Product
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    {!! Form::open(['method' => 'POST', 'url' => 'admin/product', 'files' => true, 'role' => 'form', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="name"> Name *</label>
                        <div class="col-sm-9">
                            {!! Form::text('name', null, [ 'class' => 'col-xs-10 col-sm-5', 'placeholder' => "Name", 'minlength' => "4", 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="category"> Category *</label>
                        <div class="col-sm-9">
                            {!! Form::select('category', $categories) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="price"> Price *</label>
                        <div class="col-sm-9">
                            {!! Form::number('price', null, [ 'class' => 'col-xs-10 col-sm-5', 'placeholder' => "Price"]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="sale"> Sale </label>
                        <div class="col-sm-9">
                            {!! Form::number('sale', null, [ 'class' => 'col-xs-10 col-sm-5', 'placeholder' => "Sale"]) !!}
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="inventorynumber"> Inventory number </label>
                        <div class="col-sm-9">
                            {!! Form::number('inventorynumber', null, [ 'class' => 'col-xs-10 col-sm-5', 'placeholder' => "Inventory number"]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="thumbnail"> Thumbnail </label>
                        <div class="col-sm-9">
                            {!! Form::file('thumbnail', ["class" => "col-xs-10 col-sm-5", 'accept' => 'image/*']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="des"> Description </label>
                        <div class="col-sm-9">
                            {!! Form::text('des', null, [ 'class' => 'col-xs-10 col-sm-5', 'placeholder' => "description"]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 center">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
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