@extends('layouts.master')
@section('title') Home | Thế Giới Phụ Kiện @endsection
@section('slider')
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class=""></li>
                            <li data-target="#slider-carousel" data-slide-to="1" class=""></li>
                            <li data-target="#slider-carousel" data-slide-to="2" class="active"></li>
                        </ol>

                        <div class="carousel-inner">
                            @foreach($slider as $item)
                                <div class="item">

                                    <div class="col-sm-12">
                                        <img src="uploads/slider/{{ $item->image }}" class="girl img-responsive"
                                             alt="">
                                    </div>
                                </div>
                            @endforeach
                            <div class="item active">

                                <div class="col-sm-12">
                                    <img src="uploads/slider/slider2.jpg" class="girl img-responsive" alt="">
                                </div>
                            </div>
                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('danhmuc')
    @include('layouts.danhmuc')
@endsection
@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Sản Phẩm Nổi Bật</h2>
            @foreach($product as $item)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                <h2>{{ number_format($item->price) }}</h2>
                                <p>{{ $item->name }}</p>
                                <a href="{{ url('product_detail/'.$item->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                                    Chi Tiết Sản Phẩm</a>
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="#"><i class="fa fa-plus-square"></i>Yêu Thích</a></li>
                                <li><a href="{{ url('cart/add/'.$item->id) }}"><i class="fa fa-plus-square"></i>Thêm Vào Giỏ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!--features_items-->
        <div class="row">{{$product->links()}}</div>

        <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tshirt" data-toggle="tab">Sản Phẩm Mới</a></li>
                    <li><a href="#blazers" data-toggle="tab">Sản Phẩm Khuyến Mãi</a></li>
                    <li><a href="#sunglass" data-toggle="tab">Sản Phẩm Được Mua Nhiều</a></li>
                    <li><a href="#kids" data-toggle="tab">Order</a></li>
                </ul>
            </div>
            <div class="tab-content">

                <!-- sản phẩm mới -->
                <div class="tab-pane fade active in" id="tshirt">
                    @foreach($new_product as $item)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                        <h2>{{ number_format($item->price) }}</h2>
                                        <p>{{ $item->name }}</p>
                                        <a href="{{ url('product_detail/'.$item->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                                            Chi Tiết Sản Phẩm</a>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Yêu Thích</a></li>
                                        <li><a href="{{ url('cart/add/'.$item->id) }}"><i class="fa fa-plus-square"></i>Thêm Vào Giỏ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- sản phẩm khuyến mãi -->
                <div class="tab-pane fade" id="blazers">
                    @foreach($sale_product as $item)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                        <h2>{{ number_format($item->price) }}</h2>
                                        <p>{{ $item->name }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- sản phẩm mua nhiều -->
                <div class="tab-pane fade" id="sunglass">
                    @foreach($buy_product as $item)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                        <h2>{{ number_format($item->price) }}</h2>
                                        <p>{{ $item->name }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Order -->
                <div class="tab-pane fade" id="kids">
                    @foreach($buy_product as $item)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                        <h2>{{ number_format($item->price) }}</h2>
                                        <p>{{ $item->name }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div><!--/category-tab-->
        @if(  count($fav_product) != 0 )
        <div class="recommended_items"><!--Khách hàng chia sẻ-->
            <h2 class="title text-center">Khách Hàng Chia Sẻ</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        @foreach($fav_product as $item)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                            <h2>{{ number_format($item->price) }}</h2>
                                            <p>{{ $item->name }}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Kiểm Tra Đơn Hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="item">
                        @foreach($fav_product as $item)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                            <h2>{{ number_format($item->price) }}</h2>
                                            <p>{{ $item->name }}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Kiểm Tra Đơn Hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div><!--/recommended_items-->
        @endif

    </div>
@endsection