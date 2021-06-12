<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance\Income;


/**
 * @OA\Tag(
 *  name="Income",
 *  description="API Endpoint Income"
 * 	)
 */

class IncomeController extends Controller
{
	public function find()
	{
		$result = Income::all();
		if (count($result) <= 0) return response()->json(["error" => true]);

		return response()->json($result);
	}

	public function findOne($id)
	{
		$result = Income::find($id);
		return response()->json($result);
	}

	public function create(Request $req)
	{
		$result = Income::create(
			$req->all()
		);

		return response()->json($result);
	}

	public function update(Request $req, $id)
	{
		$result = Income::findOrFail($id);
		$result->update($req->all());

		return response()->json($result);
	}

	public function delete($id)
	{
		$result = Income::destroy($id);

		return response()->json($result);
	}
}
