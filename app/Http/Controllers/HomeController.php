<?php

namespace App\Http\Controllers;

use App\Models\Alldate;
use App\Models\Manager;

class HomeController extends Controller
{
    public function __construct()
    {
        // كل صفحات هذا الـ Controller تحتاج تسجيل دخول
        // ماعدا الصفحة الرئيسية للموقع
        $this->middleware('auth')->except(['index_manager']);
    }

    // الصفحة الرئيسية للموقع
    public function index_manager()
    {
        $alldate = Alldate::all();
        $managers = Manager::all();

        return view(
            'web.LayoutWeb.welcome',
            compact('alldate', 'managers')
        );
    }

    // صفحة Home
    public function index()
    {
        $alldate = Alldate::all();

        return view('home', compact('alldate'));
    }

    // Transactions
    public function Transactions()
    {
        return view('Transactions');
    }

    // Loans
    public function Loans()
    {
        return view('Loans');
    }

    // ATM
    public function ATM()
    {
        return view('ATM');
    }

    // Employees
    public function Employees()
    {
        return view('Employees');
    }

    // Accounting
    public function Accounting()
    {
        return view('Accounting');
    }

    // Reports
    public function Reports()
    {
        return view('Reports');
    }

    // Settings
    public function Settings()
    {
        return view('Settings');
    }
}