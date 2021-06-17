<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use App\Models\Maintenance;
use Illuminate\Http\Request;


class MaintenanceController extends Controller
{
	public function find()
	{
		$result = Maintenance::all();
		if (count($result) <= 0) return response()->json(["error" => true]);

		return response()->json($result);
	}

	public function findOne($id)
	{
		$result = Maintenance::find($id);
		return response()->json($result);
	}

	public function create(Request $req)
	{
		$result = Maintenance::create(
			[
				"quantity_exp" => $req->quantity_exp,
				"date" => $req->date
			]
		);

		return response()->json($result);
	}

	public function update(Request $req, $id)
	{
		$result = Maintenance::findOrFail($id);
		$result->update($req->all());

		return response()->json($result);
	}

	public function delete($id)
	{
		$result = Maintenance::destroy($id);

		return response()->json($result);
	}
}
