<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
	use HasFactory;
	protected $table = "income";
	protected $guarded = [];
	protected $fillable = [
		"revenue",
		"expense",
		"net",
		"balance"
	];
}
