<?php

namespace App\Http\Controllers\FrontEnd\Warehouse;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Warehouse\Outbound;
use App\Models\Warehouse\Warehouse;
use App\Models\Product;
<<<<<<< HEAD
use App\Models\Logistics\Delivery;
=======
use App\Models\vehicle;
>>>>>>> 08fe21f30facd1444d295efbcefefd918550f89e


class OutboundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = outbound::with('product', 'warehouse')->get();
        return view('pages.warehouse.outbound.index', [
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
        $vehicle = Vehicle::all();
        $warehouse = Warehouse::all();
        $data = outbound::all();
        $delivery = Delivery::get();
        return view('pages.warehouse.outbound.create', [
            'title' => 'Warehouse',
            'product' => $product,
            'vehicle' => $vehicle,
            'warehouse' => $warehouse,
            'delivery' => $delivery,
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
<<<<<<< HEAD
=======
            'vehicle_id' => ['required'],
            'warehouse_id' => ['required'],
>>>>>>> 08fe21f30facd1444d295efbcefefd918550f89e
        ]);

        $outbound = $request->all();
        outbound::create($outbound);

        return redirect()->route('warehouse.outbound.index')->with('success', 'Outbound Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = outbound::findOrFail($id);

        return view('pages.warehouse.outbound.show', [
            'title' => 'Detail outbound',
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
        $data = outbound::findOrFail($id);
<<<<<<< HEAD
        $delivery = Delivery::get();
        $product = Product::all();
=======
        $product = Product::all();
        $warehouse = Warehouse::all();
        $vehicle = vehicle::all();
>>>>>>> 08fe21f30facd1444d295efbcefefd918550f89e

        return view('pages.warehouse.outbound.edit', [
            'title' => 'Detail outbound',
            'data' => $data,
<<<<<<< HEAD

            'product' => $product,
            'delivery' => $delivery,
=======
            'product' => $product,
            'warehouse' => $warehouse,
            'vehicle' => $vehicle
>>>>>>> 08fe21f30facd1444d295efbcefefd918550f89e
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
        $outbound = outbound::findOrFail($id);
        $request->validate([
            'cost' => ['required'],
<<<<<<< HEAD
=======
            'vehicle_id' => ['required'],
            'product_id' => ['required'],
            'warehouse_id' => ['required']
>>>>>>> 08fe21f30facd1444d295efbcefefd918550f89e
        ]);

        $data = $request->all();
        $outbound->update($data);
        return redirect()->route('warehouse.outbound.index')->with('success', 'Outbound Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $outbound = outbound::findOrFail($id);
        $outbound->delete();
        return redirect()->route('warehouse.outbound.index')->with('success', 'Outbound Berhasil Di hapus');
    }
}
