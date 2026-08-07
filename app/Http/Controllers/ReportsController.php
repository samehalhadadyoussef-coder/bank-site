<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        $reports = Reports::latest()->get();

        $totalReports = Reports::count();

        $thisMonth = Reports::whereMonth('created_at', now()->month)->count();

        $pending = Reports::where('status', 'pending')->count();

        $resolved = Reports::where('status', 'resolved')->count();

        return view('Reports', compact(
            'reports',
            'totalReports',
            'thisMonth',
            'pending',
            'resolved'
        ));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'report_type' => 'required',
        ]);

        Reports::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'report_type' => $request->report_type,
            'status' => 'Pending',
        ]);

        return back()->with('success', 'Your report has been sent successfully.');
    }
}
