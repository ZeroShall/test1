@extends('layouts.admin.layout')
@section('title')  Create Type  @endsection
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
                    <a href="{{ url('admin/users') }}">User</a>
                </li>
                <li class="active">Create</li>
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

                <div class="ace-settings-box clearfix" id="ace-settings-box">
                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                                <div class="dropdown dropdown-colorpicker"><a data-toggle="dropdown"
                                                                              class="dropdown-toggle"><span
                                            class="btn-colorpicker" style="background-color:#438EB9"></span></a>
                                    <ul class="dropdown-menu dropdown-caret">
                                        <li><a class="colorpick-btn selected" style="background-color:#438EB9;"
                                               data-color="#438EB9"></a></li>
                                        <li><a class="colorpick-btn" style="background-color:#222A2D;"
                                               data-color="#222A2D"></a></li>
                                        <li><a class="colorpick-btn" style="background-color:#C6487E;"
                                               data-color="#C6487E"></a></li>
                                        <li><a class="colorpick-btn" style="background-color:#D0D0D0;"
                                               data-color="#D0D0D0"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                   id="ace-settings-navbar" autocomplete="off">
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                   id="ace-settings-sidebar" autocomplete="off">
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                   id="ace-settings-breadcrumbs" autocomplete="off">
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"
                                   autocomplete="off">
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                   id="ace-settings-add-container" autocomplete="off">
                            <label class="lbl" for="ace-settings-add-container">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>
                    </div><!-- /.pull-left -->

                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"
                                   autocomplete="off">
                            <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"
                                   autocomplete="off">
                            <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"
                                   autocomplete="off">
                            <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                        </div>
                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
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
                    {!! Form::open(['type' => 'POST', 'url' => 'admin/users', 'role' => 'form']) !!}
                    <form class="form-horizontal" id="createForm" role="form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name"> Name *</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" id="name" placeholder="User Name" required minlength="5" class="col-xs-10 col-sm-5">
                            </div>
                        </div><br/><br/>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="email"> Email *</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" id="email" minlength="5" placeholder="Email" class="col-xs-10 col-sm-5" required>
                            </div>
                        </div><br/><br/>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="address"> Address </label>
                            <div class="col-sm-9">
                                <input type="text" name="address" id="address" placeholder="Adress"
                                       class="col-xs-10 col-sm-5">
                            </div>
                        </div><br/><br/>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="phone"> Phone</label>
                            <div class="col-sm-9">
                                <input type="text" name="phone" id="phone" pattern="(\+84|0)\d{9,10}" id="phone" placeholder="Ví dụ: +84969969972 hoặc 0969969972"
                                       class="col-xs-10 col-sm-5" minlength="10" maxlength="13" >
                            </div>
                        </div><br/><br/>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="group_id">Group</label>
                            <div class="col-sm-9">
                                <select name="group_id" id="group_id">
                                    @foreach($group as $k=>$v)
                                    <option value="{{$k}}">{{$v}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br/><br/>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="password">Password *</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" id="password" placeholder="Password" required class="col-xs-10 col-sm-5">
                            </div>
                        </div><br/><br/>
                        
                        <div class="form-group">
                            <div class="col-sm-9">
                                <input type="submit" class="btnSave" value="Save"  />
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