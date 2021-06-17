<?php

namespace App\Http\Controllers\FrontEnd\Warehouse;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Warehouse\Stock;
use App\Models\Warehouse\Warehouse;
use App\Models\Product;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Stock::with('product', 'warehouse')->get();
        return view('pages.warehouse.stock.index', [
            'title' => 'Stock',
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
        return view('pages.warehouse.stock.create', [
            'title' => 'Stock',
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
            'quantity' => ['required'],
            'product_id' => ['required'],
            'warehouse_id' => ['required'],
        ]);

        $stock = $request->all();
        Stock::create($stock);

        return redirect()->route('warehouse.stock.index')->with('success', 'stock Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = stock::findOrFail($id);


        return view('pages.warehouse.stock.show', [
            'title' => 'Detail stock',
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
        $data = stock::findOrFail($id);
        $product = Product::all();
        $warehouse = Warehouse::all();

        return view('pages.warehouse.stock.edit', [
            'title' => 'Detail stock',
            'data' => $data,
            'product' => $product,
            'warehouse' => $warehouse
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
        $stock = stock::findOrFail($id);
        $request->validate([
            'quantity' => ['required'],
            'product_id' => ['required'],
            'warehouse_id' => ['required'],
        ]);

        $data = $request->all();
        $stock->update($data);
        return redirect()->route('warehouse.stock.index')->with('success', 'stock Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = stock::findOrFail($id);
        $stock->delete();
        return redirect()->route('warehouse.stock.index')->with('success', 'stock Berhasil Di hapus');
    }
}
