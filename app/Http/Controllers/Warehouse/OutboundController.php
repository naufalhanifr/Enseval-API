<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Warehouse\Outbound;
use App\Models\Warehouse\Warehouse;

/**
 * @OA\Tag(
 *  name="Outbound",
 *  description="API Endpoint Outbound"
 * 	)
 */
class OutboundController extends Controller
{
	public function find()
	{
		$result = Outbound::all();
		if (count($result) <= 0) return response()->json(["error" => true]);

		return response()->json($result);
	}

	public function findOne($id)
	{
		$result = Outbound::find($id);
		return response()->json($result);
	}

	public function create(Request $req)
	{

		$product = Product::find($req->product_id);

		$warehouse = Warehouse::find($req->warehouse_id);

		if (!$product) return response()->json(["error" => true, "message" => "Product " . $req->product_id . " not found"]);
		if (!$warehouse) return response()->json(["error" => true, "message" => "Warehouse " . $req->warehouse_id . " not found"]);

		$result = Outbound::create(
			$req->all()
		);
		return response()->json($result);
	}


	public function update(Request $req, $id)
	{
		$result = Outbound::findOrFail($id);
		$result->update($req->all());

		return response()->json($result);
	}

	public function delete($id)
	{
		$result = Outbound::destroy($id);

		return response()->json($result);
	}
}
