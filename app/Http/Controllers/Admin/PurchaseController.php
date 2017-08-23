<?php

namespace App\Http\Controllers\Admin;


use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Purchase;
use Session;



class PurchaseController extends Controller
{
    private $_sups = [];

    public function __construct()
    {
        $suppliers = Supplier::all();
        foreach ($suppliers as $supplier) {
            $this->_sups[$supplier->id] = $supplier->name;
        }
    }

    public function index(Request $request)
    {
        if ($request->has('keyword')) {

            $keyword = $request->get('keyword');
            $purchase = Purchase::where('trade_date', 'like', '%' . $keyword . '%')->get();
        } else {
            $purchase = Purchase::all();
        }
        return view('admin.purchase.show', [
            'abc' => $purchase
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.purchase.create',
            ['suppliers' => $this->_sups]
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
        
        
        $purchase = new Purchase();
        $purchase->supplier_id = $request->supplier_id;
        $purchase->trade_date = $request->trade_date;
        $purchase->total = $request->total;
        $purchase->save();
        Session::flash('success', " Create Purchase Invoice Succesfully ! ");

        return redirect('admin/purchase');




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
        $purchase = Purchase::findOrFail($id);

        return view('admin.purchase.edit', [
                'purchases' => $purchase,
                'suppliers' => $this->_sups,
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
        $purchase = Purchase::findOrFail($id);


        $purchase = Purchase::findOrFail($id);
        $purchase->supplier_id = $request->supplier_id;
        $purchase->trade_date = $request->trade_date;
        $purchase->total = $request->total;
        $purchase->save();
        Session::flash('success', "Edit  successfully!!!");

        return redirect('admin/purchase');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $purchase = Purchase::findOrFail($id);
        Session::flash('success', "Delete  succesfully");
         $purchase->delete();

        return redirect('admin/purchase');
    }
}
