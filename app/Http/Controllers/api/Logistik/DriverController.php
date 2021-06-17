<?php

namespace App\Http\Controllers\API\Logistik;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Driver::all();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $driver = Driver::get();
        return view('pages.logistik.driver.create', [
            'title' => 'Tambah Driver',
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
            'name' => ['required'],
            'phone' => ['required'],
            'age' => ['required'],
            'status' => ['required']
        ]);

        $driver = $request->all();
        Driver::create($driver);

        return redirect()->route('logistik.driver.index')->with('success', 'Driver Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Driver::findOrFail($id);

        return view('pages.logistik.driver.show', [
            'title' => 'Detail Driver',
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
        $data = Driver::findOrFail($id);

        return view('pages.logistik.driver.edit', [
            'title' => 'Edit Driver' . $data->name,
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
        $driver = Driver::findOrFail($id);
        $request->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'age' => ['required'],
            'status' => ['required']
        ]);

        $data = $request->all();
        $driver->update($data);

        return redirect()->route('logistik.driver.index')->with('success', 'Driver Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::findOrFail($id);
        $driver->delete();
        return redirect()->route('logistik.driver.index')->with('success', 'Driver Berhasil Di hapus');
    }
}
