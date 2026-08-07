<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $fillable = [
    'customer_code',
    'full_name',
    'national_id',
    'phone',
    'balance',
    'email',
    'address',
    'date_of_birth',
    'status',
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
