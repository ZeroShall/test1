<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +84 92 95 97</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> shop0317e@ITplus.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{ url('home') }}"><img src="{{ asset('source/images/home/logo.png') }}"
                                                                                    alt=""></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('admin')}}"><i class="fa fa-user"></i> Tài Khoản</a></li>
                            <li><a href="{{url('contact')}}"><i class="fa fa-star"></i> Liên Hệ</a></li>
                            <li><a href="{{url('cart')}}"><i class="fa fa-crosshairs"></i> Kiểm Tra Đơn Hàng</a></li>
                            @if(Auth::check())
                                <li><a href="{{url('logout')}}"><i class="fa fa-lock"></i>Đăng Xuất</a></li>
                            @else
                                <li><a href="{{url('login')}}"><i class="fa fa-lock"></i>Đăng Nhập</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ url('home') }}" class="active">Trang Chủ</a></li>
                            <li class="dropdown"><a href="#">Danh Mục<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ url('product_type') }}">Sản Phẩm</a></li>
                                    <li><a href="{{ url('cart') }}">Kiểm Tra Đơn Hàng</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('news') }}">Khuyến Mãi</a></li>
                            <li><a href="{{ url('contact') }}">Trung Tâm Bảo Hành</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Tìm Kiếm">

                        <ul class="bag">
                            <a href="{{ url('cart') }}" style="margin-right: 5px; margin-left: -31px;"><img src="{{ asset('source/images/giohang.jpg') }}"  /></a>
                            <a href="{{ url('cart') }}">
                                <li class="bag_right"><p>
                                        <?php $total = 0; ?>
                                        @if(Cart::content())
                                            @foreach(Cart::content() as $item)
                                                <?php $total = $total + $item->price*$item->qty; ?>
                                            @endforeach
                                        @endif
                                        {{ number_format($total) }}
                                    </p>
                                </li>
                            </a>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header>