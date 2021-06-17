<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance\Report;


/**
 * @OA\Tag(
 *  name="Report",
 *  description="API Endpoint Report"
 * 	)
 */

class ReportController extends Controller
{
	public function find()
	{
		$result = Report::all();
		if (count($result) <= 0) return response()->json(["error" => true]);

		return response()->json($result);
	}

	public function findOne($id)
	{
		$result = Report::find($id);
		return response()->json($result);
	}

	public function create(Request $req)
	{
		$result = Report::create(
			$req->all()
		);

		return response()->json($result);
	}

	public function update(Request $req, $id)
	{
		$result = Report::findOrFail($id);
		$result->update($req->all());

		return response()->json($result);
	}

	public function delete($id)
	{
		$result = Report::destroy($id);

		return response()->json($result);
	}
}
