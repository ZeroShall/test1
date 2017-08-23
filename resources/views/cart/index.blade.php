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


            <div class="register-req">
                <p>Please use Register And Checkout to easily get access to your order history, or use Checkout as
                    Guest</p>
            </div><!--/register-req-->

            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-3" style="display: none;">
                        <div class="shopper-info">
                            <p>Shopper Information</p>
                            <form>
                                <input type="text" placeholder="Display Name">
                                <input type="text" placeholder="User Name">
                                <input type="password" placeholder="Password">
                                <input type="password" placeholder="Confirm password">
                            </form>
                            <a class="btn btn-primary" href="">Get Quotes</a>
                            <a class="btn btn-primary" href="">Continue</a>
                        </div>
                    </div>
                    <div class="col-sm-5 clearfix">
                        <div class="bill-to">
                            <p>Bill To</p>
                            <div class="form-one">
                                <form>
                                    <input type="text" placeholder="Company Name">
                                    <input type="text" placeholder="Email*">
                                    <input type="text" placeholder="Title">
                                    <input type="text" placeholder="First Name *">
                                    <input type="text" placeholder="Middle Name">
                                    <input type="text" placeholder="Last Name *">
                                    <input type="text" placeholder="Address 1 *">
                                    <input type="text" placeholder="Address 2">
                                </form>
                            </div>
                            <div class="form-two">
                                <form>
                                    <input type="text" placeholder="Zip / Postal Code *">
                                    <select>
                                        <option>-- Country --</option>
                                        <option>United States</option>
                                        <option>Bangladesh</option>
                                        <option>UK</option>
                                        <option>India</option>
                                        <option>Pakistan</option>
                                        <option>Ucrane</option>
                                        <option>Canada</option>
                                        <option>Dubai</option>
                                    </select>
                                    <select>
                                        <option>-- State / Province / Region --</option>
                                        <option>United States</option>
                                        <option>Bangladesh</option>
                                        <option>UK</option>
                                        <option>India</option>
                                        <option>Pakistan</option>
                                        <option>Ucrane</option>
                                        <option>Canada</option>
                                        <option>Dubai</option>
                                    </select>
                                    <input type="password" placeholder="Confirm password">
                                    <input type="text" placeholder="Phone *">
                                    <input type="text" placeholder="Mobile Phone">
                                    <input type="text" placeholder="Fax">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="order-message">
                            <p>Shipping Order</p>
                            <textarea name="message" placeholder="Notes about your order, Special Notes for Delivery"
                                      rows="16"></textarea>
                            <label><input type="checkbox"> Shipping to bill address</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-payment">
                <h2>Review & Payment</h2>
            </div>

            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $totalAmount =0 ; ?>
                    @foreach(Cart::content() as $row)
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="{{ url('uploads/product/'.$row->options->thumbnail) }}" alt="" class="img-bill"></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">{{ $row->name }}</a></h4>
                            </td>
                            <td class="cart_price">
                                <p>{{ number_format($row->price) }}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity"
                                           value="{{ $row->qty }}"
                                           autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">
                                    <?php
                                        $m = $row->price * $row->qty;
                                        $totalAmount += $m;
                                        echo number_format($m);
                                    ?>
                                </p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{ url('cart/destroy/'.$row->id) }}"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Total</td>
                                    <td><span>{{ number_format($totalAmount )}}</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div>
                    <a href="{{ url('product') }}">Tiếp tục mua hàng</a>
                    <a href="{{ url('cart/update') }}">Thanh Toán</a>
                </div>

            </div>
        </div>
    </section>

@endsection