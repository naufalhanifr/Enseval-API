<?php

namespace App\Http\Controllers\FrontEnd\Logistik;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Logistics\Track;
use App\Models\Logistics\Delivery;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Track::with('delivery')->get();
        return view('pages.logistik.tracking.index', [
            'title' => 'Tracking',
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
        $delivery = Delivery::get();
        $data = Track::get();
        return view('pages.logistik.tracking.create', [
            'title' => 'Tracking',
            'data' => $data,
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
            'delivery_id' => ['required'],
            'temp' => ['required'],
            'speed' => ['required'],
            'fuel_capacity' => ['required'],
            'loc_lat' => ['required'],
            'loc_lng' => ['required'],
            'status' => ['required'],
        ]);
        $data = request()->all();
        Track::create($data);

        return redirect()->route('logistik.tracking.index')->with('success', 'Tracking Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Track::findOrFail($id);
        return view('pages.logistik.tracking.show', [
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
        $delivery = Delivery::get();
        $data = Track::findOrFail($id);
        return view('pages.logistik.tracking.edit', [
            'title' => 'Detail Vehicle',
            'data' => $data,
            'delivery' => $delivery,
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
        $track = Track::findOrFail($id);
        $request->validate([
            'delivery_id' => ['required'],
            'temp' => ['required'],
            'speed' => ['required'],
            'fuel_capacity' => ['required'],
            'loc_lat' => ['required'],
            'loc_lng' => ['required'],
            'status' => ['required'],
        ]);
        $data = request()->all();
        $track->update($data);

        return redirect()->route('logistik.tracking.index')->with('success', 'Tracking Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Track::findOrFail($id);
        $data->delete();
        return redirect()->route('logistik.tracking.index')->with('success', 'Tracking Berhasil Di hapus');
    }
}
