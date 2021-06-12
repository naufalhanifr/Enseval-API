<?php

namespace App\Models\Finance;

use App\Models\Finance\Transaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Income extends Transaction
{
    use HasFactory;
    protected $table = "income";
    protected $guarded = [];
    protected $fillable = [];
}
