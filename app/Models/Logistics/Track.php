<?php

namespace App\Models\Logistics;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 *
 * @OA\Schema(
 *      description="Track Model",
 *      title="Track",
 *      type="object",
 *      @OA\Property(property="id", type="integer", readOnly="true"),
 *      @OA\Property(property="temp", type="integer", example="-20.21"),
 *      @OA\Property(property="fuel_capacity", type="integer", example="100"),
 *      @OA\Property(property="speed", type="integer", example="120"),
 *      @OA\Property(property="loc_lat", type="integer", example="-6.9230233"),
 *      @OA\Property(property="loc_lng", type="integer", example="1.3230233"),
 *      @OA\Property(property="delivery_id", type="integer", example="1"),
 *      @OA\Property(property="status", type="string", example="active", readOnly="true")
 * )
 *
 */
class Track extends Model
{
    use HasFactory;
    protected $table = "track";
    protected $guarded = [];

    public function delivery()
    {
        return $this->belongsTo('App\Models\Logistics\Delivery');
    }
}
