<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
	use HasFactory;
	protected $table = "maintenance";
	protected $guarded = [];

	public function warehouse()
	{
		return $this->belongsTo('App\Models\Warehouse\Warehouse');
	}

	public function product()
	{
		return $this->belongsTo('App\Models\Product');
	}
}
