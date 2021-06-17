<?php

namespace App\Http\Controllers\FrontEnd\Logistik;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Logistics\Delivery;
use App\Models\Product;
use App\Models\Driver;
use App\Models\Vehicle;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Delivery::with('driver', 'vehicle', 'product')->get();
        return view('pages.logistik.delivery.index', [
            'title' => 'Delivery',
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
        $vehicle = Vehicle::get();
        $driver = Driver::get();
        $product = Product::get();
        return view('pages.logistik.delivery.create', [
            'title' => 'Delivery',
            'product' => $product,
            'vehicle' => $vehicle,
            'driver' => $driver
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
            'delivery_type' => ['required'],
            'pickup_location' => ['required'],
            'destination_location' => ['required'],
            'date_pickup' => ['required'],
            'cost' => ['required'],
            'fuel_consumption' => ['required'],
            'driver_id' => ['required'],
            'vehicle_id' => ['required'],
            'product_id' => ['required'],
        ]);

        $Delivery = $request->all();
        Delivery::create($Delivery);

        return redirect()->route('logistik.delivery.index')->with('success', 'Delivery Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Delivery::findOrFail($id);

        return view('pages.logistik.delivery.show', [
            'title' => 'Detail Delivery',
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
        $data = Delivery::findOrFail($id);

        return view('pages.logistik.delivery.edit', [
            'title' => 'Edit Delivery' . $data->name,
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
        $Delivery = Delivery::findOrFail($id);
        $request->validate([
            'delivery_type' => ['required'],
            'pickup_location' => ['required'],
            'destination_location' => ['required'],
            'date_pickup' => ['required'],
            'cost' => ['required'],
            'fuel_consumption' => ['required'],
            'driver_id' => ['required'],
            'vehicle_id' => ['required'],
            'product_id' => ['required'],
        ]);
        $data = $request->all();
        $Delivery->update($data);
        return redirect()->route('logistik.delivery.index')->with('success', 'Delivery Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Delivery = Delivery::findOrFail($id);
        $Delivery->delete();
        return redirect()->route('logistik.delivery.index')->with('success', 'Delivery Berhasil Di hapus');
    }
}
