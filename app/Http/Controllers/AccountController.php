<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Customer;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function Accounts()
    {
        $Accounts = Account::all();
        $Customers = Customer::all();

        return view('Accounts', compact('Accounts', 'Customers'));
    }

    public function view($id)
    {
        $account = Account::findOrFail($id);
        $Customers = Customer::all();

        return view('Account_View', compact('account', 'Customers'));
    }

    public function Account_create()
    {
        $Customers = Customer::all();

        return view('Account_create', compact('Customers'));
    }

    public function Account_store(Request $request)
    {
   $request->validate([
    'customer_id' => 'required|exists:customers,id',
    'account_number' => 'required|unique:accounts,account_number',
    'account_type' => 'required',
    'balance' => 'required|numeric|min:0',
    'status' => 'required|in:active,frozen,closed',
]);
        Account::create($request->all());

        return redirect()->route('Accounts')->with('success', 'Account created successfully.');
    }

    public function edit($id)
    {
        $account = Account::findOrFail($id);
        $Customers = Customer::all();

        return view('Account_edit', compact('account', 'Customers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
    'customer_id' => 'required|exists:customers,id',
    'account_number' => 'required|unique:accounts,account_number,' . $id,
    'account_type' => 'required',
    'balance' => 'required|numeric|min:0',
    'status' => 'required|in:active,frozen,closed',
]);

        $account = Account::findOrFail($id);
        $account->update($request->all());

        return redirect()->route('Accounts')
            ->with('success', 'Account updated successfully.');
    }

    public function destroy($id)
    {
        $account = Account::findOrFail($id);
        $account->delete();

        return redirect()->route('Accounts')
            ->with('success', 'Account deleted successfully.');
    }
}