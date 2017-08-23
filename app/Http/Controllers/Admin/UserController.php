<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use Session;

class UserController extends Controller
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
            $users = User::where('name', 'like', '%' . $keyword . '%')->get();
        } else {
            $users = Users::all();
        }
        return view('admin.users.show', [
            'abc' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c = new Users();
        $c->name = $request->name;
        $c->address = $request->address;
        $c->phone = $request->phone;
        $c->group_id = $request->group_id;
        $c->save();
        Session::flash('success', " Create " . $c->name . " succesfully ! ");

        return redirect('admin/users');

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
        $cate = Users::findOrFail($id);

        return view('admin.users.edit', ['cate' => $cate]);
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
        $cate = Users::findOrFail($id);
        $cate->name = $request->name;
        $cate->address = $request->address;
        $cate->phone = $request->phone;
        $cate->group_id = $request->group_id;
        $cate->save();
        Session::flash('success', "Edit " . $cate->name . " successfully!!!");

        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $cate = Users::findOrFail($id);
        Session::flash('success', "Delete " . $cate->name . " succesfully");
        $cate->delete();

        return redirect('admin/users');
    }
}
