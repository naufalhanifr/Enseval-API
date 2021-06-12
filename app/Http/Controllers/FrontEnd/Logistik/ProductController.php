<?php

namespace App\Http\Controllers\FrontEnd\Logistik;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Product::all();
        return view('pages.logistik.product.index', [
            'title' => 'Product',
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
        $data = Product::get();
        return view('pages.logistik.product.create', [
            'title' => 'Tambah Driver',
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
            'name' => ['required'],
            'price' => ['required'],
            'weight' => ['required'],
            'exp_date' => ['required']
        ]);
        $data = request()->all();
        Product::create($data);

        return redirect()->route('logistik.product.index')->with('success', 'Product Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::findOrFail($id);

        return view('pages.logistik.product.show', [
            'title' => 'Detail Product',
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
        $data = Product::findOrFail($id);

        return view('pages.logistik.product.edit', [
            'title' => 'Edit  Product',
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
        $product = Product::findOrFail($id);
        $request->validate([
            'name' => ['required'],
            'price' => ['required'],
            'weight' => ['required'],
            'exp_date' => ['required']
        ]);
        $data = request()->all();
        $product->update($data);

        return redirect()->route('logistik.product.index')->with('success', 'Product Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $data->delete();
        return redirect()->route('logistik.product.index')->with('success', 'Product Berhasil Di hapus');
    }
}
