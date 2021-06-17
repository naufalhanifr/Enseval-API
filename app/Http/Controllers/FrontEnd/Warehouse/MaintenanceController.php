<?php

namespace App\Http\Controllers\FrontEnd\Warehouse;

use Illuminate\Http\Request;
use App\Models\Warehouse\Maintenance;
use App\Http\Controllers\Controller;
use App\Models\Warehouse\Warehouse;
use App\Models\Product;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Maintenance::with('product', 'warehouse')->get();
        return view('pages.warehouse.maintenance.index', [
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
        return view('pages.warehouse.maintenance.create', [
            'title' => 'Maintenance',
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
            'quantity_exp' => ['required'],
            'product_id' => ['required'],
            'warehouse_id' => ['required'],
        ]);

        $Maintenance = $request->all();
        Maintenance::create($Maintenance);

        return redirect()->route('warehouse.maintenance.index')->with('success', 'Maintenance Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Maintenance::findOrFail($id);

        return view('pages.warehouse.maintenance.show', [
            'title' => 'Detail Maintenance',
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
        $data = Maintenance::findOrFail($id);

        return view('pages.warehouse.maintenance.edit', [
            'title' => 'Detail Maintenance',
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
        $Maintenance = Maintenance::findOrFail($id);
        $request->validate([
            'quantity_exp' => ['required'],
        ]);

        $data = $request->all();
        $Maintenance->update($data);
        return redirect()->route('warehouse.maintenance.index')->with('success', 'Maintenance Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maintenance $Maintenance)
    {
        $Maintenance->delete();
        return redirect()->route('warehouse.maintenance.index')->with('success', 'Maintenance Berhasil Di hapus');
    }
}
