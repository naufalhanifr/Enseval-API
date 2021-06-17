<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warehouse\Stock;
use App\Models\Warehouse\Warehouse;

/**
 * @OA\Tag(
 *  name="Stock",
 *  description="API Endpoint Stock"
 * 	)
 */
class StockController extends Controller
{

	public function find()
	{
		$result = Stock::all();
		if (count($result) <= 0) return response()->json(["error" => true]);

		return response()->json($result);
	}

	public function findOne($id)
	{
		$result = Stock::find($id);
		return response()->json($result);
	}

	// TODO: No stock create
	public function create(request $req)
	{
		// TODO: Find warehouse, save as stock location
		// $warehouse = Warehouse::find();
		$result = Stock::create([
			"location" => $req->location, // here
			"capacity" => $req->capacity
		]);

		return response()->json($result);
	}

	public function update(Request $req, $id)
	{
		$result = Stock::findOrFail($id);
		$result->update($req->all());

		return response()->json($result);
	}

	public function delete($id)
	{
		$result = Stock::destroy($id);
		return response()->json($result);
	}
}
