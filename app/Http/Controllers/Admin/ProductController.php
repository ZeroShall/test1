<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use Session;



class ProductController extends Controller
{
    private $_cates = [];

    public function __construct()
    {
        $categories = Category::all();
        foreach ($categories as $category) {
            $this->_cates[$category->id] = $category->title;
        }
    }

    public function index(Request $request)
    {
        if ($request->has('keyword')) {

            $keyword = $request->get('keyword');
            $product = Product::where('name', 'like', '%' . $keyword . '%')->get();
        } else {
            $product = Product::all();
        }
        return view('admin.product.show', [
            'abc' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create',
            ['categories' => $this->_cates]
        );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
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
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->sale = $request->sale;
        $product->inventorynumber = $request->inventorynumber;
        $product->des = $request->des;
        $product->save();
        Session::flash('success', " Create " .  $product->name . " succesfully ! ");

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

        return view('admin.product.edit', [
                'product' => $product,
                'categories' => $this->_cates,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $thumbnail = $product->thumbnail;

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $thumbnail = $file->getClientOriginalName();
            $path = public_path('uploads/product');
            $file->move($path, $thumbnail);
        }

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->thumbnail = $thumbnail;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->sale = $request->sale;
        $product->inventorynumber = $request->inventorynumber;
        $product->des = $request->des;
        $product->save();
        Session::flash('success', "Edit " . $product->name . " successfully!!!");

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
        Session::flash('success', "Delete " .  $product->name . " succesfully");
         $product->delete();

        return redirect('admin/product');
    }
}
