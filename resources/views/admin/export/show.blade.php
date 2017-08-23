@extends('layouts.admin.layout')
@section('title') Export Invoice | Shop Computer @endsection
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="{{url('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/export') }}">Export Invoice List</a>
                    </li>
                </ul><!-- /.breadcrumb -->
                {!! Form::open(['method' => 'GET', 'url' => 'admin/export']) !!}
                <div class="nav-search" id="nav-search">
                    <form class="form-search">
                        <span class="input-icon">
                            <input type="text"
                                name="keyword"
                                @if(Request::has('keyword'))
                                value="{{ Request::get('keyword') }}"
                                @endif
                                class="nav-search-input"
                                id="nav-search-input"
                                placeholder="Search ..."
                            />
                            <i class="ace-icon fa fa-search nav-search-icon"></i>
                            <button type="submit" id="btnSearch">Search</button>
                        </span>
                    </form>
                </div>
                <!-- /.nav-search -->
                {!! Form::close() !!}
            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        Export Invoice List
                    </h1>
                </div><!-- /.page-header -->

                @if(Session::has('success'))
                    <div class="alert alert-block alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                        </button>

                        <p>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                {{ Session::get('success') }}
                            </strong>
                        </p>
                    </div>
                @endif
                <div class="row">
                    <a href="{{ url('admin/export/create') }}" style="font-size: 15px ; margin-left: 15px">Create
                        New</a>
                    <br/><br/>
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="simple-table" class="table  table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace">
                                                <span class="lbl"></span>
                                            </label>
                                        </th>
                                        <th class="detail-col">ID</th>
                                        <th>User</th>
                                        <th>Trade_Date</th>
                                        <th>Total</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($abc)
                                        @foreach($abc as $item)
                                            <tr>
                                                <td>
                                                    <input type="checkbox"/>
                                                </td>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->user_id}}</td>
                                                <td>{{ $item->trade_date }}</td>
                                                <td>{{ $item->total }}</td>
                                                <td>{!! Form::open([ 'method'=>'DELETE' , 'url' =>'admin/export/'.$item->id,'role'=>'from' ]) !!}
                                                    <a href="{{ url('admin/export/'.$item->id.'/edit') }}"
                                                       class="btn">Edit</a>
                                                    <button type="submit" value="DELETE"
                                                            onclick="return confirm('Are you sure?');">DELETE
                                                    </button>
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div><!-- /.span -->
                        </div><!-- /.row -->


                        <div id="modal-table" class="modal fade" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header no-padding">
                                        <div class="table-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                <span class="white">×</span>
                                            </button>
                                            Results for "Latest Registered Domains
                                        </div>
                                    </div>

                                    <div class="modal-body no-padding">
                                        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                            <thead>
                                            <tr>
                                                <th>Domain</th>
                                                <th>Price</th>
                                                <th>Clicks</th>

                                                <th>
                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                    Update
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#">ace.com</a>
                                                </td>
                                                <td>$45</td>
                                                <td>3,330</td>
                                                <td>Feb 12</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a href="#">base.com</a>
                                                </td>
                                                <td>$35</td>
                                                <td>2,595</td>
                                                <td>Feb 18</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a href="#">max.com</a>
                                                </td>
                                                <td>$60</td>
                                                <td>4,400</td>
                                                <td>Mar 11</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a href="#">best.com</a>
                                                </td>
                                                <td>$75</td>
                                                <td>6,500</td>
                                                <td>Apr 03</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a href="#">pro.com</a>
                                                </td>
                                                <td>$55</td>
                                                <td>4,250</td>
                                                <td>Jan 21</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="modal-footer no-margin-top">
                                        <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                                            <i class="ace-icon fa fa-times"></i>
                                            Close
                                        </button>

                                        <ul class="pagination pull-right no-margin">
                                            <li class="prev disabled">
                                                <a href="#">
                                                    <i class="ace-icon fa fa-angle-double-left"></i>
                                                </a>
                                            </li>

                                            <li class="active">
                                                <a href="#">1</a>
                                            </li>

                                            <li>
                                                <a href="#">2</a>
                                            </li>

                                            <li>
                                                <a href="#">3</a>
                                            </li>

                                            <li class="next">
                                                <a href="#">
                                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div>
@endsection