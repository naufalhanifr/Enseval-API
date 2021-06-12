<?php

namespace App\Http\Controllers\FrontEnd\Warehouse;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Warehouse\Inbound;
use App\Models\Warehouse\Warehouse;
use App\Models\Product;

class InboundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Inbound::with('product', 'warehouse')->get();
        return view('pages.warehouse.inbound.index', [
            'title' => 'Warehouse',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $warehouse = Warehouse::all();
        return view('pages.warehouse.inbound.create', [
            'title' => 'Warehouse',
            'product' => $product,
            'warehouse' => $warehouse,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cost' => ['required'],
            'product_id' => ['required'],
            'warehouse_id' => ['required'],
        ]);

        $Inbound = $request->all();
        Inbound::create($Inbound);

        return redirect()->route('warehouse.inbound.index')->with('success', 'Inbound Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Inbound::findOrFail($id);

        return view('pages.warehouse.inbound.show', [
            'title' => 'Detail Inbound',
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Inbound::findOrFail($id);

        return view('pages.warehouse.inbound.edit', [
            'title' => 'Detail Inbound',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Inbound = Inbound::findOrFail($id);
        $request->validate([
            'cost' => ['required'],
            'product_id' => ['required'],
            'warehouse_id' => ['required'],
        ]);

        $data = $request->all();
        $Inbound->update($data);
        return redirect()->route('warehouse.inbound.index')->with('success', 'Inbound Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Inbound = Inbound::findOrFail($id);
        $Inbound->delete();
        return redirect()->route('warehouse.inbound.index')->with('success', 'Inbound Berhasil Di hapus');
    }
}
