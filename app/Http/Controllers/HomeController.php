<?php

namespace App\Http\Controllers;

use App\News;
use App\Cart;
use App\Order;
use App\Order_Detail;
use App\Product;
use App\Purchase;
use App\Slide;
use App\Users;
use Illuminate\View\View;
use Session;
use Auth;

use Illuminate\Http\Request;


class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $slider = Slide::all();
        $product = Product::where('inventorynumber', '<', '35')->paginate(8);
        $new_product = Product::where('des', 'new')->paginate(8);
        $sale_product = Product::where('sale', '<>', '0')->paginate(8);
        $buy_product = Product::where('inventorynumber', '<', '15')->paginate(8);
        $fav_product = Product::where('favorite', '<>', '0')->get();
        return view('page.home', compact('slider', 'product', 'new_product', 'sale_product', 'buy_product', 'fav_product'));
        if (Auth::check()) {
            return view('page.home');
        } else {
            return View::make('login');
        }

    }

    public function ProductType()
    {
        $new_product = Product::where('des', 'new')->paginate(8);
        $d_product = Product::where('inventorynumber', '<', 16)->where('inventorynumber', '>', 0)->paginate(8);
        return view('page.product_type', compact('new_product', 'd_product'));
    }

    public function ProductDetail(Request $request)
    {

        $detail = Product::where('id', $request->id)->first();

        return view('page.product_detail', compact('detail'));
    }

    public function News()
    {

        $new = News::all();
        return view('page.news', compact('new'));
    }

    public function Checkout(Request $request)
    {
        $product = Product::all();
        if(isset($product->id)){
            $order = new Order;
            if (Auth::check()) {
                $order->username = Auth::user()->username;
                $order->email = Auth::user()->email;
                $order->phone = Auth::user()->phone;
                $order->address = Auth::user()->address;
                $order->address_order = $request->message;
                $order->total = $request->totalAmount;
                $order->save();
            } else {
                $order->name = $request->username;
                $order->email = $request->email;
                $order->phone = $request->phone;
                $order->address = $request->address;
                $order->address_order = $request->message;
                $order->total = $request->totalAmount;
                $order->save();
            }


            foreach (Cart::content() as $item) {
                $order_detail = new Order_Detail;

                $order_detail->order_id = $order->id;
                $order_detail->product_id = $item->id;
                $order_detail->number = $item->qty;
                $order_detail->price = $item->price*$item->qty;
                $order_detail->save();
            }
        }

    }


    public function Logout()
    {
        Auth::logout();
        return redirect('home');

    }
}
