<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;


/**
 * @OA\Tag(
 *  name="Vehicle",
 *  description="API Endpoint Vehicle"
 * 	)
 */

class VehicleController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/logistics/vehicle",
     *      tags={"Vehicle"},
     *      operationId="findVehicle",
     *      description="Get all Vehicle",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */
    public function find()
    {
        $result = Vehicle::all();
        return response()->json($result);
    }

    /**
     * @OA\Get(
     *      path="/api/logistics/vehicle/{id}",
     *      tags={"Vehicle"},
     *      operationId="findOneVehicle",
     *      description="Get One Vehicle",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */
    public function findOne($id)
    {
        $result = Vehicle::find($id);

        if (!$result) return response()->json(["error" => true]);

        return response()->json($result);
    }

    /**
     * @OA\Post(
     *      path="/api/logistics/vehicle",
     *      tags={"Vehicle"},
     *      operationId="createVehicle",
     *      description="Create Vehicle",
     *      @OA\RequestBody(
     *          request="Vehicle",
     *          @OA\JsonContent(ref="#/components/schemas/Vehicle")
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */

    public function create(Request $req)
    {
        $result = Vehicle::create($req->all());

        if (!$result) return response()->json(['error' => true]);
        return response()->json($result);
    }

    /**
     * @OA\Delete(
     *      path="/api/logistics/vehicle/{id}",
     *      tags={"Vehicle"},
     *      operationId="deleteVehicle",
     *      description="Delete Vehicle",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */

    public function delete($id)
    {
        $result = Vehicle::destroy($id);
        return response()->json(['error' => $result == 0]);
    }

    /**
     * @OA\Put(
     *      path="/api/logistics/vehicle/{id}",
     *      tags={"Vehicle"},
     *      description="Update Track",
     *      operationId="updateTrack",
     *      @OA\Parameter(
     *          in="path",
     *          required=true,
     *          name="id"
     *      ),
     *      @OA\RequestBody(
     *          request="Vehicle",
     *          @OA\JsonContent(ref="#/components/schemas/Vehicle")
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Success",
     *          @OA\JsonContent(ref="#/components/schemas/Vehicle")
     *      )
     * )
     */
    public function update(Request $req, $id)
    {
        $result = Vehicle::find($id);
        if (!$result) return response()->json(["error" => true]);

        $result->update($req->all());

        return response()->json($result);
    }
}
