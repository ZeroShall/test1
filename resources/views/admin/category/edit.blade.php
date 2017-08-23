@extends('layouts.admin')
@section('title') Edit Category @endsection
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
                        <a href="{{ url('admin/category') }}">Category</a>
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
                        Edit " {{ $cate->title }} " Category
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        {!! Form::open(['method' => 'PATCH', 'url' => 'admin/category/' . $cate->id, 'role' => 'form']) !!}
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>
                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1"
                                           placeholder="{{ $cate->title }}"
                                           name="title" required=""
                                           class="col-xs-10 col-sm-5"
                                           value="{{ $cate->title }}" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Type</label>
                                <div class="col-sm-9">
                                    <select name="type_id">
                                        <option value="1" @if( $cate->type_id == "1" ) selected @endif >LINK KIỆN MÁY TÍNH</option>
                                        <option value="2" @if( $cate->type_id == "2" ) selected @endif >MÁY TÍNH XÁCH TAY</option>
                                        <option value="3" @if( $cate->type_id == "3" ) selected @endif >MÁY TÍNH ĐỂ BÀN</option>
                                        <option value="4" @if( $cate->type_id == "4" ) selected @endif >GAMEGEAR-COOLING</option>
                                        <option value="5" @if( $cate->type_id == "5" ) selected @endif >GAMES NET</option>
                                        <option value="6" @if( $cate->type_id == "6" ) selected @endif >THIẾT BỊ NGHE NHÌN</option>
                                        <option value="7" @if( $cate->type_id == "7" ) selected @endif >THIẾT BỊ LƯU TRỮ</option>
                                        <option value="8" @if( $cate->type_id == "8" ) selected @endif >THIẾT BỊ MẠNG</option>
                                        <option value="9" @if( $cate->type_id == "9" ) selected @endif >THIẾT BỊ VĂN PHÒNG</option>
                                        <option value="10" @if( $cate->type_id == "10" ) selected @endif >THIẾT BỊ KHÁC</option>
                                    </select>
                                </div>
                            </div>
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