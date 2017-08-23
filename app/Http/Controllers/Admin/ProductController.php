<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\Http\Requests\ProductEditRequest;
use Session;

class ProductController extends Controller
{
    private $_categories;
    public function __construct()
    {
        $this->_categories = Category::get()->pluck('title','id');
    }

    public function index(Request $request)
    {
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $products = Product::with('category')->where('name', 'like', '%' . $keyword . '%')->get();
        } else {
            $products = Product::with('category')->get();
        }
        //dd($products);
        return view('admin.product.show', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create', ['categories'=> $this->_categories]);
    }
    
    public function store(Request $request)
    {
        $thumbnail = 'no-image.jpg';
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $thumbnail = $file->getClientOriginalName();
            $path = public_path('uploads/product');
            $file->move($path, $thumbnail);
        }
        $product = new Product();
        $product->name = $request->name;
        $product->thumbnail = $thumbnail;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->sale = $request->sale;
        $product->inventorynumber = $request->inventorynumber;
        $product->des = $request->des;
        $product->save();
        Session::flash('success', 'Create Product "' .  $product->name . '" succesfully!');

        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        //dd($product);
        return view('admin.product.edit', ['product' => $product, 'categories' => $this->_categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductEditRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $thumbnail = $product->thumbnail;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $thumbnail = $file->getClientOriginalName();
            $path = public_path('uploads/product');
            $file->move($path, $thumbnail);
        }
        $product->name = $request->name;
        $product->thumbnail = $thumbnail;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->sale = $request->sale;
        $product->inventorynumber = $request->inventorynumber;
        $product->des = $request->des;
        $product->save();
        Session::flash('success', 'Edit Product "' . $product->name . '" successfully!');

        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        unlink('uploads/product/'.$product->thumbnail);
        $product->delete();
        Session::flash('success', 'Delete Product "' .  $product->name . '" succesfully!');
        return redirect('admin/product');
    }
}
