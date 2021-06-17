<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    protected $table = "warehouse";
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
}
