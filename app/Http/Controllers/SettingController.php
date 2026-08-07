<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
       return view('settings');
    }

    public function update(Request $request)
    {
        Setting::set('bank_name', $request->bank_name);
        Setting::set('currency', $request->currency);
        Setting::set('branch_code', $request->branch_code);
        Setting::set('financial_year', $request->financial_year);

        Setting::set('two_factor', $request->two_factor ? 1 : 0);
        Setting::set('login_notifications', $request->login_notifications ? 1 : 0);
        Setting::set('transaction_approval', $request->transaction_approval ? 1 : 0);

        return back()->with('success', 'Settings updated successfully');
    }
}
