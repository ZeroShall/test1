@extends('layouts.master')
@section('title') Cart Page @endsection
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}">Trang Chủ</a></li>
                    <li class="active">Kiểm tra đơn hàng</li>
                </ol>
            </div><!--/breadcrums-->
            @if(Auth::check())
                <div class="register-req">Vui lòng để lại địa chỉ quý khách muốn giao hàng</div>
            @else
                <div class="register-req">
                    <p>Vui lòng đăng kí để thanh toán hoặc nhập thông tin đầy đủ để nhận đơn hàng </p>
                    <a class="btn btn-primary" href="{{ url('register') }}">Đăng Kí Tài Khoản</a>
                </div><!--/register-req-->
            @endif


            <div class="review-payment">
                <h2>Hóa đơn</h2>
            </div>

            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Sản Phẩm</td>
                        <td class="description"></td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng tiền</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $totalAmount = 0; ?>
                    @foreach(Cart::content() as $item)
                        @if(isset($item->id))
                            <tr>
                                <td class="cart_product">
                                    <a href="{{ url('product_detail/'.$item->id) }}"><img
                                                src="{{ url('uploads/product/'.$item->options->thumbnail) }}" alt=""
                                                class="img-bill"></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="{{ url('product_detail/'.$item->id) }}">{{ $item->name }}</a></h4>
                                </td>
                                <td class="cart_price">
                                    <p>{{ number_format($item->price) }}</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href=""> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity"
                                               value="{{ $item->qty }}"
                                               autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href=""> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">
                                        <?php
                                        $m = $item->price * $item->qty;
                                        $totalAmount += $m;
                                        echo number_format($m);
                                        ?>
                                    </p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="{{ url('cart/remove/'.$item->id) }}"><i
                                                class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @elseif($item->id == null)
                            <tr>Quý khách chưa đặt mua sản phẩm nào</tr>
                        @endif
                    @endforeach
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Tổng Thanh Toán</td>
                                    <td><span>{{ number_format($totalAmount )}}</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="shopper-informations">
                <div class="row">
                    @if(!Auth::check())
                        <div class="col-sm-3" style="display: block;">
                            <div class="shopper-info">
                                <p>Thông tin khách hàng</p>
                                <form>
                                    <input type="text" placeholder="Họ và tên của quý khách là gì ?" name="name"/>
                                    <input type="text" placeholder="Email của quý khách là gì ?" name="email"/>
                                    <input type="text" placeholder="Số điện thoại của quý khách là gì ?" name="phone"/>
                                    <input type="text" placeholder="Địa chỉ của quý khách ở đâu ?" name="address"/>
                                </form>

                            </div>
                        </div>
                    @endif
                    <div class="col-sm-4">
                        <div class="order-message">
                            <p>Nơi nhận hàng</p>
                            <textarea name="message" placeholder="Xin nhập địa chỉ mà quý khách muốn nhận hàng !"
                                      rows="16"></textarea>
                        </div>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="{{ url('checkout') }}">Thanh Toán</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection