@extends('layouts.content')

@section('content')

<div class="container">
    <h1>Add Transaction</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('transaction.store') }}" method="POST">
        @csrf

        {{-- CUSTOMER SELECT --}}
<select name="customer_id" class="form-control" required>
    <option value="">Select Customer</option>
    @foreach($customers as $customer)
        <option value="{{ $customer->id }}">
            {{ $customer->full_name }}
        </option>
    @endforeach
</select>

        {{-- ACCOUNT SELECT --}}
        <div class="form-group mb-2">
            <label>Account</label>
            <select class="form-control" name="account_id" required>
                <option value="">Select Account</option>
                @foreach($accounts as $account)
                    <option value="{{ $account->id }}">
                        {{ $account->account_number }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- TYPE --}}
        <div class="form-group mb-2">
            <label>Transaction Type</label>
            <select class="form-control" name="transaction_type">
                <option value="deposit">Deposit</option>
                <option value="withdrawal">Withdrawal</option>
                <option value="transfer">Transfer</option>
            </select>
        </div>

        {{-- AMOUNT --}}
        <div class="form-group mb-2">
            <label>Amount</label>
            <input type="number" class="form-control" name="amount" step="0.01" required>
        </div>

        {{-- STATUS --}}
        <div class="form-group mb-2">
            <label>Status</label>
            <select class="form-control" name="status">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
                <option value="failed">Failed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Add Transaction
        </button>
    </form>
</div>

@endsection