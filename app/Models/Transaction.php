<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
    'transaction_id',
    'account_id',
    'customer_id',
    'transaction_type',
    'amount',
    'status',
    'description'
];

 public function customer()
{
    return $this->belongsTo(Customer::class);
}

public function account()
{
    return $this->belongsTo(Account::class);
}
}
