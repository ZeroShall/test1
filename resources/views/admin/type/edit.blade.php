@extends('layouts.admin.layout')
@section('name') Edit Type @endsection
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
                <li class="active">Edit</li>
            </ul>
            <!-- /.breadcrumb -->
            
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
                    Edit " {{ $user->name }} " User
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    {!! Form::open(['method' => 'PATCH', 'url' => 'admin/users/' . $user->id, 'role' => 'form']) !!}
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name"> Name </label>
                            <div class="col-sm-9">
                                <input type="text" id="name"
                                       placeholder="{{ $user->name }}"
                                       name="name" minlength="5"
                                       class="col-xs-10 col-sm-5"
                                       value="{{ $user->name != null ? $user->name:"3 ký tự trở lên." }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="email"> Email </label>
                            <div class="col-sm-9">
                                <input type="email" id="email"
                                       placeholder="{{ $user->email }}"
                                       name="email" minlength=""
                                       class="col-xs-10 col-sm-5"
                                       value="{{ $user->email }}" />
                            </div>
                        </div>
                        <br/><br/>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>
                            <div class="col-sm-9">
                                <input type="text" id="form-field-1"
                                       placeholder="{{ $user->address }}"
                                       name="address"
                                       class="col-xs-10 col-sm-5"
                                       value="{{ $user->address }}" />
                            </div>
                        </div>
                        <br/><br/>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Phone </label>
                            <div class="col-sm-9">
                                <input type="text" id="form-field-1"
                                       placeholder="{{ $user->phone != null ? $user->phone:"Ví dụ: +84969969972 hoặc 0969969972" }}"
                                       name="phone" pattern="(\+84|0)\d{9,10}" minlength="10" maxlength="13"
                                       class="col-xs-10 col-sm-5"
                                       value="{{ $user->phone }}" />
                            </div>
                        </div>
                        <br/><br/>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="group">Type</label>
                            <div class="col-sm-9">
                                <select name="group_id" id="group">
                                    @foreach($group as $k=>$v)
                                    <option value="{{$k}}" {{ ($k==$user->group_id) ? "selected" : " " }}>{{$v}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br/><br/>
                        
                        <div class="form-group">
                            <div class="col-sm-9">
                                <input type="submit" class="btnSave" value="Update"/>
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