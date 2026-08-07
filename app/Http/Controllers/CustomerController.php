<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $Customers = Customer::all();
        return view('Customers', compact('Customers'));
    }
public function Customer_create()
{
    return view('Customer_create');
}

public function Customer_store(Request $request)
{
    
    $validated = $request->validate([
        'customer_code' => 'required|string|unique:customers',
        'full_name' => 'required|string',
        'national_id' => 'required|string|unique:customers',
        'phone' => 'required|string',
        'email' => 'required|email|unique:customers',
        'address' => 'required|string',
        'date_of_birth' => 'required|date',
        'status' => 'required|string',
        'balance' => 'required|numeric|min:0',
    ]);

    Customer::create([
        'customer_code' => $validated['customer_code'],
        'full_name' => $validated['full_name'],
        'national_id' => $validated['national_id'],
        'phone' => $validated['phone'],
        'email' => $validated['email'],
        'address' => $validated['address'],
        'date_of_birth' => $validated['date_of_birth'],
        'status' => $validated['status'],
        'balance' => $validated['balance'],
    ]);

    return redirect()->route('Customers')
        ->with('success', 'Customer created successfully!');
}
  public function view($id)
{
    $customer = Customer::findOrFail($id);

    return view('Customer_view', compact('customer'));
}

    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', 'Customer deleted successfully');
    }

public function edit($id)
{
    $customer = Customer::findOrFail($id);

    return view('Customer_edit', compact('customer'));
}

  public function update(Request $request, $id)
{
    $customer = Customer::findOrFail($id);

    $validated = $request->validate([
        'customer_code' => 'required|string|unique:customers,customer_code,' . $id,
        'full_name' => 'required|string',
        'national_id' => 'required|string|unique:customers,national_id,' . $id,
        'phone' => 'required|string',
        'email' => 'required|email|unique:customers,email,' . $id,
        'address' => 'required|string',
        'date_of_birth' => 'required|date',
        'status' => 'required|string',
        'balance' => 'required|numeric|min:0',
    ]);

    $customer->update($validated);

    return redirect()->route('Customers')
        ->with('success', 'Customer updated successfully!');
}
}
