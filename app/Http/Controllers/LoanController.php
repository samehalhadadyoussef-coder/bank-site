<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Loan;
use Illuminate\Http\Request;


class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::with('customer')->latest()->get();

        $totalLoanPortfolio = Loan::sum('amount');

        $approvedLoans = Loan::where('status', 'approved')->count();

        $pendingLoans = Loan::where('status', 'pending')->count();

        $personalLoans = Loan::where('loan_type', 'personal')->count();

        $businessLoans = Loan::where('loan_type', 'business')->count();

        $mortgageLoans = Loan::where('loan_type', 'mortgage')->count();

        $autoLoans = Loan::where('loan_type', 'auto')->count();

        return view('Loans', compact(
            'loans',
            'totalLoanPortfolio',
            'approvedLoans',
            'pendingLoans',
            'personalLoans',
            'businessLoans',
            'mortgageLoans',
            'autoLoans'
        ));
    }
    public function view($id)
    {
        $loan = Loan::with('customer')->findOrFail($id);
        return view('Loan_View', compact('loan'));
    }

    public function create()
    {
        $customers = Customer::all();

        return view('Loan_create', compact('customers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'loan_type' => 'required|in:personal,business,mortgage,auto',
            'amount' => 'required|numeric|min:100',
            'duration_months' => 'required|integer|min:1',
            'status' => 'required|in:pending,approved,rejected,closed',
            'notes' => 'nullable|string|max:1000',
        ]);

        $loanNumber = 'LN-' . str_pad(
            Loan::count() + 1001,
            4,
            '0',
            STR_PAD_LEFT
        );

        Loan::create([
            'loan_number' => $loanNumber,
            'customer_id' => $validated['customer_id'],
            'loan_type' => $validated['loan_type'],
            'amount' => $validated['amount'],
            'duration_months' => $validated['duration_months'],
            'status' => $validated['status'],
            'notes' => $request->notes,
        ]);

        return redirect()
            ->route('Loans')
            ->with('success', 'Loan created successfully');
    }
}
