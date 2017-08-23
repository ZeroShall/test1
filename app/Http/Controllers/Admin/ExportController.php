<?php

namespace App\Http\Controllers\Admin;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Export;
use Session;



class ExportController extends Controller
{
    private $_users = [];

    public function __construct()
    {
        $users = User::all();
        foreach ($users as $user) {
            $this->_users[$user->id] = $user->name;
        }
    }

    public function index(Request $request)
    {
        if ($request->has('keyword')) {

            $keyword = $request->get('keyword');
            $export = Export::where('trade_date', 'like', '%' . $keyword . '%')->get();
        } else {
            $export = Export::all();
        }
        return view('admin.export.show', [
            'abc' => $export
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.export.create',
            ['users' => $this->_users]
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
        
        
        $export = new Export();
        $export->user_id = $request->user_id;
        $export->trade_date = $request->trade_date;
        $export->total = $request->total;
        $export->save();
        Session::flash('success', " Create Export Invoice Succesfully ! ");

        return redirect('admin/export');




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
        $export = Export::findOrFail($id);

        return view('admin.export.edit', [
                'exports' => $export,
                'users' => $this->_users,
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
        $export = Export::findOrFail($id);


        $export = Export::findOrFail($id);
        $export->user_id = $request->user_id;
        $export->trade_date = $request->trade_date;
        $export->total = $request->total;
        $export->save();
        Session::flash('success', "Edit  successfully!!!");

        return redirect('admin/export');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $export = Export::findOrFail($id);
        Session::flash('success', "Delete  succesfully");
         $export->delete();

        return redirect('admin/export');
    }
}
