<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Atm;
use Illuminate\Http\Request;

class AtmController extends Controller
{
    public function index()
    {
        $atms = Atm::latest()->get();

        $total = Atm::count();
        $active = Atm::where('status', 'online')->count();
        $offline = Atm::where('status', 'offline')->count();
        $maintenance = Atm::where('status', 'maintenance')->count();

        return view('ATM', compact(
            'atms',
            'total',
            'active',
            'offline',
            'maintenance'
        ));
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:atms',
            'branch' => 'nullable',
            'status' => 'required',
            'cash_level' => 'required|integer|min:0|max:100',
        ]);

        Atm::create($request->all());

        return redirect()->back()->with('success', 'ATM Created Successfully');
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $atm = Atm::findOrFail($id);

        $atm->update($request->all());

        return redirect()->back()->with('success', 'ATM Updated Successfully');
    }

    // DELETE
    public function destroy($id)
    {
        Atm::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'ATM Deleted Successfully');
    }
}
