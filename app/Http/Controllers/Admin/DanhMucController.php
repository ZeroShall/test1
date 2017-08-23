<?php

namespace App\Http\Controllers\Admin;

use App\DanhMuc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DanhMucController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('keyword')) {

            $keyword = $request->get('keyword');
            $danhmuc = DanhMuc::where('title', 'like', '%' . $keyword . '%')->get();
        } else {
            $danhmuc = DanhMuc::all();
        }
        return view('admin.danhmuc.show', [
            'abc' => $danhmuc
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.danhmuc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d = new DanhMuc();
        $d->title = $request->title;
        $d->save();
        Session::flash('success', " Create " . $d->title . " succesfully ! ");

        return redirect('admin/danhmuc');

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
        $date = DanhMuc::findOrFail($id);

        return view('admin.danhmuc.edit', ['cate' => $date]);
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
        $date = DanhMuc::findOrFail($id);
        $date->title = $request->title;
        $date->save();
        Session::flash('success', "Edit " . $date->title . " successfully!!!");

        return redirect('admin/danhmuc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $date = DanhMuc::findOrFail($id);
        Session::flash('success', "Delete " . $date->title . " succesfully");
        $date->delete();

        return redirect('admin/danhmuc');
    }
}
