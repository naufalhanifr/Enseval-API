<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 *
 * @OA\Schema(
 *      description="Driver Model",
 *      title="Driver",
 *      type="object",
 *      @OA\Property(property="id", type="integer", readOnly="true"),
 *      @OA\Property(property="name", type="integer", example="GHF"),
 *      @OA\Property(property="phone", type="integer", example="0881232323"),
 *      @OA\Property(property="age", type="integer", example="24"),
 *      @OA\Property(property="status", type="string", example="active")
 * )
 *
 */

class Driver extends Model
{
    use HasFactory;
    protected $table = "driver";
    protected $guarded = [];

}
