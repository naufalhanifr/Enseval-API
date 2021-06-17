<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

/**
 * @OA\Tag(
 *  name="Product",
 *  description="API Endpoint Product"
 * 	)
 */
class ProductController extends Controller
{
    public function find()
    {
        $result = Product::all();
        return response()->json($result);
    }

    public function findOne($id)
    {
        $result = Product::find($id);

        if (!$result) return response()->json(["error" => true]);

        return response()->json($result);
    }

    public function create(Request $req)
    {
        $result = Product::create([
            "name" => $req->name,
            "weight" => $req->weight,
            "price" => $req->price,
            "exp_date" => $req->exp_date
        ]);

        if (!$result) return response()->json(['error' => true]);
        return response()->json($result);
    }

    public function delete($id)
    {
        $result = Product::destroy($id);
        return response()->json(['error' => $result == 0]);
    }

    public function update(Request $req, $id)
    {
        $result = Product::find($id);
        if (!$result) return response()->json(["error" => true]);

        $result->update($req->all());

        return response()->json($result);
    }
}
