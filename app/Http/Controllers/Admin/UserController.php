<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Group;
use Session;
use App\Http\Requests\UserCreateRequests;

class UserController extends Controller
{
    private $_groups = [];

    public function __construct()
    {
        $groups = Group::all();
        foreach ($groups as $group) {
            $this->_groups[$group->id] = $group->title;
        }
    }

    public function index(Request $request)
    {
        if ($request->has('keyword')) {

            $keyword = $request->get('keyword');
            $users = User::where('name', 'like', '%' . $keyword . '%')->get();
        } else {
            $users = User::all();
        }
        return view('admin.user.show', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::get()->pluck('title', 'id');
        return view('admin.user.create', ['groups' => $groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequests $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->group_id = $request->group;
        $user->password = $request->password;
        $user->save();

        Session::flash('success', " Create " . $user->name . " succesfully ! ");
        return redirect('admin/user');
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
        $user = User::findOrFail($id);
        $groups = Group::get()->pluck('title', 'id');
        return view('admin.user.edit', ['user' => $user, 'groups' => $groups]);
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
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->group_id = $request->group;
        $user->save();
        Session::flash('success', "Edit \"" . $user->name . "\" successfully!!!");

        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        Session::flash('success', "Delete " . $user->name . " succesfully");
        $user->delete();
        return redirect('admin/user');
    }
}
