<?php

namespace App\Http\Controllers\FrontEnd\Logistik;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vehicle::all();
        return view('pages.logistik.vehicle.index', [
            'title' => 'Vehicle',
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
        $data = Vehicle::get();
        return view('pages.logistik.vehicle.create', [
            'title' => 'Vehicle',
            'data' => $data
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
            'type' => ['required'],
            'capacity' => ['required'],
            'fuel_capacity' => ['required'],
            'brand' => ['required'],
            'status' => ['required']
        ]);
        $data = request()->all();
        Vehicle::create($data);

        return redirect()->route('logistik.vehicle.index')->with('success', 'Vehicle Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Vehicle::findOrFail($id);
        return view('pages.logistik.vehicle.show', [
            'title' => 'Detail Vehicle',
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
        $data = Vehicle::findOrFail($id);

        return view('pages.logistik.vehicle.edit', [
            'title' => 'Edit  Vehicle',
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

        $vehicle = Vehicle::findOrFail($id);
        $request->validate([
            'type' => ['required'],
            'capacity' => ['required'],
            'fuel_capacity' => ['required'],
            'brand' => ['required'],
            'status' => ['required']
        ]);
        $data = request()->all();
        $vehicle->update($data);

        return redirect()->route('logistik.vehicle.index')->with('success', 'Vehicle Berhasil Di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Vehicle::findOrFail($id);
        $data->delete();
        return redirect()->route('logistik.vehicle.index')->with('success', 'Vehicle Berhasil Di update.');
    }
}
