<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        $managers = Manager::all();

        $total = Manager::count();

        $active = Manager::where('status', 'Active')->count();

        $departments = Manager::distinct('department')->count();

        $averageSalary = Manager::avg('salary');

        $departmentStats = Manager::selectRaw('department, COUNT(*) as count')
            ->groupBy('department')
            ->get();

        $topManagers = Manager::latest()->take(5)->get();

        return view('Managers', compact(
            'managers',
            'total',
            'active',
            'departments',
            'averageSalary',
            'departmentStats',
            'topManagers'
        ));
    }

    public function create()
    {
        return view('Manager_create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name'       => 'nullable|string|max:255',
            'email'      => 'nullable|email|unique:managers,email',
            'phone'      => 'nullable|string|max:20',
            'image'      => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'department' => 'nullable|string|max:255',
            'position'   => 'nullable|string|max:255',
            'salary'     => 'nullable|numeric|min:0',
            'status'     => 'nullable|in:Active,Inactive',
        ]);

        if ($request->hasFile('image')) {

            $imageName = time() . '_' . $request->image->getClientOriginalName();

            $request->image->move(public_path('uploads/managers'), $imageName);

            $validated['image'] = $imageName;
        }

        Manager::create($validated);

        return redirect()->route('Managers')
            ->with('success', 'Manager added successfully.');
    }
}
