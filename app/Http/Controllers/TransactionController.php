<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function index()
    {
        $transactions = Transaction::with('account.customer')
            ->latest()
            ->paginate(10);

        return view('Transactions', compact('transactions'));
    }

    public function create()
    {
        return view('Transaction_create', [
            'accounts' => Account::all(),
            'customers' => Customer::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'account_id' => 'required|exists:accounts,id',
            'customer_id' => 'required|exists:customers,id',
            'transaction_type' => 'required|in:deposit,withdrawal,transfer',
            'amount' => 'required|numeric|min:0.01',
            'status' => 'required|in:pending,completed,failed',
        ]);

        $transactionId = 'TXN-' . str_pad(
            Transaction::count() + 10001,
            5,
            '0',
            STR_PAD_LEFT
        );

        Transaction::create([
            'transaction_id' => $transactionId,
            'account_id' => $validated['account_id'],
            'customer_id' => $validated['customer_id'],
            'transaction_type' => $validated['transaction_type'],
            'amount' => $validated['amount'],
            'status' => $validated['status'],
        ]);

        return redirect()->route('Transactions');
    }


    public function view($id)
    {
        $transaction = Transaction::with('account.customer')->findOrFail($id);
        return view('Transaction_view', compact('transaction'));
    }

    public function edit(Transaction $transaction)
    {
        $customers = Customer::all();
        $accounts = Account::all();

        return view('Transaction_edit', compact(
            'transaction',
            'customers',
            'accounts'
        ));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $validated = $request->validate([
            'account_id' => 'required|exists:accounts,id',
            'customer_id' => 'required|exists:customers,id',
            'transaction_type' => 'required|in:deposit,withdrawal,transfer',
            'amount' => 'required|numeric|min:0.01|max:9999999999999.99',
            'status' => 'required|in:pending,completed,failed',
        ]);

        $transaction->update($validated);

        return redirect()
            ->route('Transactions')
            ->with('success', 'Transaction updated successfully!');
    }

    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->route('Transactions');
    }
}
