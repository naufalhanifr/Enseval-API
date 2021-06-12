<?php

namespace App\Http\Controllers\FrontEnd\Warehouse;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Warehouse\Warehouse;


class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = warehouse::all();
        return view('pages.warehouse.warehouse.index', [
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
        $data = warehouse::all();
        return view('pages.warehouse.warehouse.create', [
            'title' => 'Warehouse',
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
            'location' => ['required'],
            'loc_lat' => ['required'],
            'loc_lng' => ['required'],
            'capacity' => ['required'],
            'volume' => ['required'],
        ]);

        $warehouse = $request->all();
        warehouse::create($warehouse);

        return redirect()->route('warehouse.warehouse.index')->with('success', 'warehouse Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = warehouse::findOrFail($id);

        return view('pages.warehouse.warehouse.show', [
            'title' => 'Detail warehouse',
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
        $data = warehouse::findOrFail($id);

        return view('pages.warehouse.warehouse.edit', [
            'title' => 'Detail warehouse',
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
        $warehouse = warehouse::findOrFail($id);
        $request->validate([
            'location' => ['required'],
            'loc_lat' => ['required'],
            'loc_lng' => ['required'],
            'capacity' => ['required'],
            'volume' => ['required'],
        ]);

        $data = $request->all();
        $warehouse->update($data);
        return redirect()->route('warehouse.warehouse.index')->with('success', 'warehouse Berhasil Di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $warehouse = warehouse::findOrFail($id);
        $warehouse->delete();
        return redirect()->route('warehouse.warehouse.index')->with('success', 'warehouse Berhasil Di hapus.');
    }
}
