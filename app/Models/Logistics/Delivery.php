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
        return $this->belongsTo(Driver::class);
    }

    // public function customer()
    // {
    //     return $this->belongsToMany(Customer::class);
    // }

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
