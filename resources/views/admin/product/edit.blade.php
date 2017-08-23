@extends('layouts.admin.layout')
@section('title') Edit Product @endsection
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="{{url('admin')}}">Home</a>
                    </li>

                    <li>
                        <a href="{{ url('admin/product') }}">Product</a>
                    </li>
                    <li class="active">Edit</li>
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
                        Edit Product " {{ $product->name }} "
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
                        {!! Form::open(['method' => 'PUT', 'url' => 'admin/product/'.$product->id, 'files' => true, 'role' => 'form', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name"> Name *</label>
                            <div class="col-sm-9">
                                {!! Form::text('name', $product->name, [ 'class' => 'col-xs-10 col-sm-5', 'placeholder' => $product->name, 'minlength' => "4", 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="category"> Category *</label>
                            <div class="col-sm-9">
                                {!! Form::select('category', $categories, $product->category_id) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="price"> Price *</label>
                            <div class="col-sm-9">
                                {!! Form::number('price', $product->price, [ 'class' => 'col-xs-10 col-sm-5', 'placeholder' => $product->price]) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="sale"> Sale </label>
                            <div class="col-sm-9">
                                {!! Form::number('sale', $product->sale, [ 'class' => 'col-xs-10 col-sm-5', 'placeholder' => $product->sale]) !!}
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="inventorynumber"> Inventory Number </label>
                            <div class="col-sm-9">
                                {!! Form::number('inventorynumber', $product->inventorynumber, [ 'class' => 'col-xs-10 col-sm-5', 'placeholder' => $product->inventorynumber ]) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="thumbnail"> Thumbnail </label>
                            <div class="col-sm-9">
                                {!! Form::file('thumbnail', ["class" => "col-xs-10 col-sm-5", 'accept' => 'image/*' ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="des"> Description </label>
                            <div class="col-sm-9">
                                {!! Form::text('des', $product->des, [ 'class' => 'col-xs-10 col-sm-5', 'placeholder' => $product->des ]) !!}
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