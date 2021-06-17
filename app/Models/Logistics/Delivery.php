<?php

namespace App\Models\Logistics;

use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $table = "delivery";
    protected $guarded = [];

    public function driver()
    {
        return $this->belongsTo('App\Models\Driver');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function vehicle()
    {
        return $this->belongsTo('App\Models\Vehicle');
    }
}
