<?php

namespace App\Models\Finance;

use App\Models\Finance\Transaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Transaction
{
    use HasFactory;
    protected $table = "expense";
    protected $guarded = [];
    protected $fillable = [];
}
