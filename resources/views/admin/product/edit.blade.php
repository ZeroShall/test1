@extends('layouts.admin')
@section('title') Edit Product @endsection
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
                        <a href="{{ url('admin/product') }}">Product</a>
                    </li>
                    <li class="active">Edit</li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input"
                                           id="nav-search-input" autocomplete="off">
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="ace-icon fa fa-cog bigger-130"></i>
                    </div>


                </div><!-- /.ace-settings-container -->

                <div class="page-header">
                    <h1>
                        Edit " {{ $product->name }} " Product
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        {!! Form::model( $product, ['method' => 'PATCH', 'url' => ['admin/product', $product->id], 'files' => true, 'role' => 'form']) !!}
                            @include('admin.product.form')
                        {!! Form::close() !!}

                        <div class="space-4"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection