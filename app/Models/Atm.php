<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atm extends Model
{
    protected $fillable = [
        'code',
        'branch',
        'status',
        'cash_level',
    ];

    // Helper (اختياري لكن احترافي)
    public function isOnline()
    {
        return $this->status === 'online';
    }

    public function isOffline()
    {
        return $this->status === 'offline';
    }

    public function isMaintenance()
    {
        return $this->status === 'maintenance';
    }
}