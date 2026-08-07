<?php

namespace App\Http\Controllers;

use App\Models\Accounting;

class AccountingController extends Controller
{
    public function index()
    {
        $data = Accounting::latest()->get();

        // لو مفيش بيانات هنعرض fallback
        $latest = $data->first();

        return view('accounting', [
            'data' => $data,

            'assets' => $latest->assets ?? 125000000,
            'liabilities' => $latest->liabilities ?? 78000000,
            'profit' => $latest->profit ?? 47000000,
            'revenue' => $latest->revenue ?? 2800000,
            'expenses' => $latest->expenses ?? 1600000,
        ]); 
    }
}

