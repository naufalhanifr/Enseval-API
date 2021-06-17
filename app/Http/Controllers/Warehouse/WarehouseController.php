<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warehouse\Warehouse;

/**
 * @OA\Tag(
 *  name="Warehouse",
 *  description="API Endpoint Warehouse"
 * 	)
 */
class WarehouseController extends Controller
{
	public function find()
	{
		$result = Warehouse::all();
		if (count($result) <= 0) return response()->json(["error" => true]);

		return response()->json($result);
	}

	public function findOne($id)
	{
		$result = Warehouse::find($id);
		return response()->json($result);
	}

	public function create(Request $req)
	{
		$result = Warehouse::create([
			"location" => $req->location,
			"capacity" => $req->capacity
		]);

		return response()->json($result);
	}

	public function update(Request $req, $id)
	{
		$result = Warehouse::findOrFail($id);
		$result->update($req->all());

		return response()->json($result);
	}

	public function delete($id)
	{
		$result = Warehouse::destroy($id);
		return response()->json($result);
	}
}
