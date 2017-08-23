<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slider = Slide::all();
        $product = Product::where('inventorynumber' ,'<','35')->paginate(8);
        $new_product = Product::where('des','new')->paginate(8);
        $sale_product = Product::where('sale','<>','0')->paginate(8);
        $buy_product = Product::where('inventorynumber','<','15')->paginate(8);
        $fav_product = Product::where('favorite','<>','0')->get();
        return view('home',compact('slider','product','new_product','sale_product', 'buy_product','fav_product'));
    }

    public function getProductType(){
        $new_product = Product::where('des','new')->paginate(8);
        $d_product = Product::where('inventorynumber','<',16)->where('inventorynumber','>',0)->paginate(8);
        return view('page.product_type',compact('new_product','d_product'));
    }

    public function getProductDetail(Request $request){

        $detail = Product::where('id',$request->id)->first();

        return view('page.product_detail',compact('detail'));
    }
}
