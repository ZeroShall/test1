@extends('layouts.master')
@section('title') Product | Thế Giới Phụ Kiện @endsection
@section('slider')
    <section id="advertisement">
        <div class="container">
            <img src="source/images/shop/advertisement.jpg" alt="">
        </div>
    </section>
@endsection
@section('danhmuc') @include('layouts.danhmuc') @endsection
@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Sản phẩm mới</h2>
            <h5>{{count($new_product)}} sản phẩm mới</h5>
            @foreach($new_product as $new)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="uploads/product/{{ $new -> thumbnail }}" alt="">
                                <h2>{{ number_format($new->price) }}</h2>
                                <p>{{ $new->name }}</p>
                                <a href="{{ url('cart') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Kiểm
                                    tra đơn hàng</a>
                            </div>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <h2>{{ number_format($new->price) }}</h2>
                                    <p>{{ $new->name }}</p>
                                    <a href="{{ url('product_detail/'.$new->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Chi Tiết Sản Phẩm</a>
                                </div>
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href=""><i class="fa fa-plus-square"></i>Yêu Thích</a></li>
                                <li><a href="{{ url('cart/add/'.$new->id) }}"><i class="fa fa-plus-square"></i>Thêm vào giỏ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!--features_items-->
        <div class="row">{{$new_product->links()}}</div>

        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Sản Phẩm Nổi Bật</h2>
            <h5>{{count($d_product)}} sản phẩm Nổi Bật</h5>
            @foreach($d_product as $item)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="uploads/product/{{ $item -> thumbnail }}" alt="">
                                <h2>{{ number_format($item->price) }}</h2>
                                <p>{{ $item->name }}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Kiểm
                                    tra
                                    đơn hàng</a>
                            </div>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <h2>{{ number_format($item->price) }}</h2>
                                    <p>{{ $item->name }}</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Kiểm
                                        tra đơn hàng</a>
                                </div>
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href=""><i class="fa fa-plus-square"></i>Yêu Thích</a></li>
                                <li><a href="{{ url('cart/add/'.$item->id) }}"><i class="fa fa-plus-square"></i>Thêm vào
                                        giỏ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!--features_items-->
        <div class="row">{{$d_product->links()}}</div>
    </div>

@endsection