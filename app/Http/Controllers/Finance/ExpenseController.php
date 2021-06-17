<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance\Expense;

/**
 * @OA\Tag(
 *  name="Expense",
 *  description="API Endpoint Expense"
 * )
 */

class ExpenseController extends Controller
{
	public function find()
	{
		$result = Expense::all();
		if (count($result) <= 0) return response()->json(["error" => true]);

		return response()->json($result);
	}

	public function findOne($id)
	{
		$result = Expense::find($id);
		return response()->json($result);
	}

	public function create(Request $req)
	{
		$result = Expense::create(
			$req->all()
		);

		return response()->json($result);
	}

	public function update(Request $req, $id)
	{
		$result = Expense::findOrFail($id);
		$result->update($req->all());

		return response()->json($result);
	}

	public function delete($id)
	{
		$result = Expense::destroy($id);

		return response()->json($result);
	}
}
