<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operational extends Model
{
    use HasFactory;
    protected $table = "operational";
    protected $guarded = [];
    public $timestamps = false;

    public function maintenance()
    {
        return $this->belongsTo('App\Models\Warehouse\Maintenance');
    }
    
    public function inbound()
    {
        return $this->belongsTo('App\Models\Warehouse\Inbound');
    }

    public function outbound()
    {
        return $this->belongsTo('App\Models\Warehouse\Outbound');
    }
    
}

