<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outbound extends Model
{
    use HasFactory;
    protected $table = "outbound";
    protected $guarded = [];

    public function warehouse()
    {
        return $this->belongsTo('App\Models\Warehouse\Warehouse');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
<<<<<<< HEAD
    public function delivery()
    {
        return $this->belongsTo('App\Models\Logistics\Delivery');
=======

    public function vehicle()
    {
        return $this->belongsTo('App\Models\vehicle');
>>>>>>> 08fe21f30facd1444d295efbcefefd918550f89e
    }
}
