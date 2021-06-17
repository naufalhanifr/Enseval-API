<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbound extends Model
{
    use HasFactory;
    protected $table = "inbound";
    protected $guarded = [];
    public $timestamps = false;

    public function warehouse()
    {
        return $this->belongsTo('App\Models\Warehouse\Warehouse');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function delivery()
    {
        return $this->belongsTo('App\Models\Logistics\Delivery');
    }
}
