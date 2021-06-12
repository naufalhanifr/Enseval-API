<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Models\Logistics\Delivery;
use App\Models\Vehicle;

/**
 * @OA\Tag(
 *  name="Delivery",
 *  description="API Endpoint Delivery"
 * 	)
 */

class DeliveryController extends Controller
{

    /**
     * @OA\Get(
     *      path="/api/logistics/delivery",
     *      tags={"Delivery"},
     *      operationId="findDelivery",
     *      description="Get all Delivery",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     *
     */
    public function find()
    {
        $result = Delivery::all();
        if (count($result) <= 0) return response()->json(["error" => true]);

        return response()->json($result);
    }

    /**
     * @OA\Get(
     *      path="/api/logistics/delivery/{id}",
     *      tags={"Delivery"},
     *      operationId="findOneDelivery",
     *      description="Get One Delivery",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */
    public function findOne($id)
    {
        $result = Delivery::find($id);
        $result->vehicle = $result->vehicle()->get()->first();
        $result->driver = $result->driver()->get()->first();

        // var_dump($result->vehicle);

        if (!$result) return response()->json(["error" => true, "message" => "Not found"]);

        return response()->json($result);
    }

    /**
     * @OA\Post(
     *      path="/api/logistics/delivery",
     *      tags={"Delivery"},
     *      operationId="createDelivery",
     *      description="Create Delivery",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */
    public function create(Request $req)
    {
        $driver = Driver::find($req->driver_id);
        $vehicle = Vehicle::find($req->vehicle_id);


        if (empty($driver)) return response()->json(['error' => true, "message" => "Driver " . $req->driver_id . " not found"]);

        if (empty($vehicle)) return response()->json(['error' => true, "message" => "Vehicle " . $req->vehicle_id . " not found"]);

        $result = Delivery::create($req->all());

        if (!$result) return response()->json(['error' => true]);
        return response()->json($result);
    }

    /**
     * @OA\Delete(
     *      path="/api/logistics/delivery/{id}",
     *      tags={"Delivery"},
     *      operationId="deleteDelivery",
     *      description="Delete Delivery",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */

    public function delete($id)
    {
        $result = Delivery::destroy($id);
        return response()->json(['error' => $result == 0]);
    }

    public function update(Request $req, $id)
    {
        $result = Delivery::find($id);
        if (!$result) return response()->json(["error" => true]);

        $result->update($req->all());

        return response()->json($result);
    }




    // public function get($id, Request $request)
    // {
    //     $receipt = DB::table('delivery')
    //         ->where('penjemputan_id',  2)
    //         ->get();
    //     return $receipt;
    // }




    // public function receipt()
    // {
    //     $receipt = DB::table('delivery')
    //         ->join('product', 'penjemputan_id', '=', 'product.id')
    //         ->join('vehicle', 'penjemputan_id', '=', 'vehicle.id')
    //         ->join('driver', 'penjemputan_id', '=', 'driver.id')
    //         ->select(
    //             'product.product_name',
    //             'driver.driver_name',
    //             'vehicle.type',
    //             'vehicle.fuel_capacity',
    //             'penjemputan.fuel_consumption',
    //             // 'penjemputan.cost',
    //             'penjemputan.speed_avg',
    //             'penjemputan.pickup_location',
    //             'penjemputan.destination_location',
    //             'penjemputan.date_pickup',
    //             'penjemputan.date_arrived'
    //         )
    //         ->get();
    //     return $receipt;
    // }

    // public function delete()
    // {
    //     $save = DB::table('delivery')->where('delivery_id', 2)->delete();
    //     if ($save) {
    //         return ["Result" => 'Data Berhasil Didelete'];
    //     } else {
    //         return ["Result" => 'Data Tidak Terdelete'];
    //     }
    // }

    // public function update(request $request)
    // {
    //     $save = DB::table('penjemputan')->where('penjemputan_id',  1)->update([
    //         'destination_location' => $request->destination_location,
    //         'pickup_location' => $request->pickup_location
    //     ]);

    //     if ($save) {
    //         return ["Result" => 'Data Berhasil Disimpan'];
    //     } else {
    //         return ["Result" => 'Data Berhasil Tersimpan'];
    //     }
    // }
}
