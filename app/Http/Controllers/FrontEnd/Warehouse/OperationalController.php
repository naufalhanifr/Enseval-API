<?php

namespace App\Http\Controllers\FrontEnd\Warehouse;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Warehouse\Operational;
use App\Models\Warehouse\Maintenance;
use App\Models\Warehouse\Inbound;
use App\Models\Warehouse\Outbound;

class OperationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Operational::with('maintenance', 'inbound', 'outbound')->get();
        return view('pages.warehouse.operational.index', [
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
        $inbound = Inbound::all();
        $maintenance = Maintenance::all();
        $outbound = Outbound::all();
        $data = Operational::all();

        return view('pages.warehouse.operational.create', [
            'title' => 'Warehouse',
            'maintenance' => $maintenance,
            'inbound' => $inbound,
            'outbound' => $outbound
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
        $request->validate([]);

        $Operational = $request->all();
        operational::create($Operational);

        return redirect()->route('warehouse.operational.index')->with('success', 'Operational Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Operational::findOrFail($id);

        return view('pages.warehouse.operational.show', [
            'title' => 'Detail Operational',
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
        $data = Operational::findOrFail($id);
        $maintenance = Maintenance::all();
        $inbound = Inbound::all();
        $outbound = Outbound::all();



        return view('pages.warehouse.operational.edit', [
            'title' => 'Operational',
            'data' => $data,
            'maintenance' => $maintenance,
            'inbound' => $inbound,
            'outbound' => $outbound
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
        $Operatioanl = Operational::findOrFail($id);
            

        $data = $request->all();
        $Operatioanl->update($data);
        return redirect()->route('warehouse.operational.index')->with('success', 'Operational Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Operational = Operational::findOrFail($id);
        $Operational->delete();
        return redirect()->route('warehouse.operational.index')->with('success', 'Operational Berhasil Di hapus');
    }
}
