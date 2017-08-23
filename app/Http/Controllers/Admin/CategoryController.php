<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Type;
use Session;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $categories = Category::with('type')->where('title', 'like', '%' . $keyword . '%')->get();
        } else {
            $categories = Category::with('type')->get();
        }
       
        $types = Type::get()->pluck('title','id');
        return view('admin.category.show', [ 'category' => $categories ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::get()->pluck('name','id');
        return view('admin.category.create', ['types'=>$types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->title = $request->title;
        $category->type_id = $request->type;
        $category->save();
        Session::flash('success', " Create " . $category->title . " succesfully ! ");

        return redirect('admin/category');
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
        $category = Category::findOrFail($id);
        $types = Type::get()->pluck('name','id');
        return view('admin.category.edit', ['category' => $category, 'types' => $types]);
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
        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->type_id = $request->type;
        $category->save();
        Session::flash('success', "Edit " . $category->title . " successfully!!!");

        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        Session::flash('success', "Delete " . $category->title . " succesfully!");
        $category->delete();

        return redirect('admin/category');
    }
}
