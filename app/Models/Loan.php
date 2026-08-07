<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
  protected $fillable = [
    'loan_number',
    'customer_id',
    'loan_type',
    'amount',
    'duration_months',
    'status',
    'notes',
];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}