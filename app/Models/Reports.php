<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    protected $table = "reports";

   protected $fillable = [
    'name',
    'email',
    'subject',
    'message',
    'report_type',
    'status',
];
}