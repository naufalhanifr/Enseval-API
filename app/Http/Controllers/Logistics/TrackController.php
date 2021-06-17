<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use App\Models\Logistics\Delivery;
use App\Models\Logistics\Track;
use Illuminate\Http\Request;


/**
 * @OA\Tag(
 *  name="Track",
 *  description="API Endpoint Delivery Tracking"
 * )
 */

class TrackController extends Controller
{

    /**
     * @OA\Get(
     *      path="/api/logistics/track",
     *      tags={"Track"},
     *      operationId="findTrack",
     *      description="Get all tracks",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */
    public function find()
    {
        $result = Track::all();
        if (count($result) <= 0) return response()->json(["error" => true, "message" => "Not found"]);
        return response()->json($result);
    }

    /**
     * @OA\Get(
     *      path="/api/logistics/track/{id}",
     *      tags={"Track"},
     *      description="Get all tracks",
     *      operationId="findOneTrack",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */
    public function findOne($id)
    {
        $result = Track::find($id);

        if (!$result) return response()->json(["error" => true, "message" => "Not found"]);

        return response()->json($result);
    }

    /**
     * @OA\Post(
     *      path="/api/logistics/track",
     *      tags={"Track"},
     *      description="Create new Track",
     *      operationId="createTrack",
     *      @OA\RequestBody(
     *          request="Track",
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/Track")
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Success",
     *          @OA\JsonContent(ref="#/components/schemas/Track")
     *      )
     * )
     */
    public function create(Request $req)
    {
        $delivery = Delivery::find($req->delivery_id);

        if (empty($delivery)) return response()->json(["error" => true, "message" => "Delivery " . $req->delivery_id . " not found"]);

        $result = Track::create([
            "temp" => $req->temp,
            "fuel_capacity" => $req->fuel_capacity,
            "speed" => $req->speed,
            "loc_lat" => $req->loc_lat,
            "loc_lng" => $req->loc_lng,
            "delivery_id" => $req->delivery_id,
            "status" => 'active'
        ]);
        return response()->json($result);
    }



    /**
     * @OA\Put(
     *      path="/api/logistics/track/{id}",
     *      tags={"Track"},
     *      description="Update Track",
     *      operationId="updateTrack",
     *      @OA\RequestBody(
     *          request="Track",
     *          @OA\JsonContent(ref="#/components/schemas/Track")
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Success",
     *          @OA\JsonContent(ref="#/components/schemas/Track")
     *      )
     * )
     */
    public function update(Request $req, $id)
    {
        $result = Track::find($id);

        if (!$result) return response()->json(['error' => true]);

        $result->update($req->except(['delivery_id']));

        return response()->json($result);
    }

    /**
     * @OA\Delete(
     *      path="/api/logistics/track/{id}",
     *      tags={"Track"},
     *      description="Delete Track",
     *      operationId="deleteTrack",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */

    public function delete($id)
    {
        $result = Track::destroy($id);
        return response()->json(['error' => $result == 0]);
    }
}
