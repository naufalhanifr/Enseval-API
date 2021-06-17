<?php

namespace App\Models;

use App\Models\Warehouse\Inbound;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $guarded = [];
    public $timestamps = false;

    public function inbound()
    {
        return $this->hasMany('App\Models\Warehouse\Inbound');
    }


    public function outbound()
    {
        return $this->hasMany('App\Models\Warehouse\Outbound');
    }


    public function stock()
    {
        return $this->hasMany('App\Models\Warehouse\Stock');
    }

    
    public function delivery()
    {
        return $this->hasMany('App\Models\Logistics\Delivery');
    }
}
