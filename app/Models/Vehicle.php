<?php

namespace App\Models;

use App\Models\Logistics\Delivery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @OA\Schema(
 *      description="Vehicle Model",
 *      title="Vehicle",
 *      type="object",
 *      @OA\Property(property="id", type="integer", readOnly="true"),
 *      @OA\Property(property="name", type="string", example="A0123"),
 *      @OA\Property(property="type", type="string", example="C"),
 *      @OA\Property(property="fuel_capacity", type="integer", example="100"),
 *      @OA\Property(property="fuel_efficiency", type="string", example="10"),
 *      @OA\Property(property="cargo_area", type="integer", example="2000")
 * )
 *
 */

class Vehicle extends Model
{
    use HasFactory;

    protected $table = "vehicle";
    protected $guarded = [];

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }
}
