<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        if ($request->has('keyword')) {

            $keyword = $request->get('keyword');
            $categories = Category::where('title', 'like', '%' . $keyword . '%')->get();
        } else {
            $categories = Category::all();
        }
        return view('admin.category.show', [
            'abc' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c = new Category();
        $c->title = $request->title;
        $c->type_id = $request->type_id;
        $c->save();
        Session::flash('success', " Create " . $c->title . " succesfully ! ");

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
        $cate = Category::findOrFail($id);

        return view('admin.category.edit', ['cate' => $cate]);
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
        $cate = Category::findOrFail($id);
        $cate->title = $request->title;
        $cate->type_id = $request->type_id;
        $cate->save();
        Session::flash('success', "Edit " . $cate->title . " successfully!!!");

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

        $cate = Category::findOrFail($id);
        Session::flash('success', "Delete " . $cate->title . " succesfully");
        $cate->delete();

        return redirect('admin/category');
    }
}
