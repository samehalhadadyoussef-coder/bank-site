@extends('layouts.content')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
            <h3>Edit Transaction</h3>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('transaction.update', $transaction->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Customer</label>

                    <select name="customer_id" class="form-control" required>
                        @foreach($customers as $customer)
                            <option
                                value="{{ $customer->id }}"
                                {{ $transaction->customer_id == $customer->id ? 'selected' : '' }}
                            >
                                {{ $customer->full_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Account</label>

                    <select name="account_id" class="form-control" required>
                        @foreach($accounts as $account)
                            <option
                                value="{{ $account->id }}"
                                {{ $transaction->account_id == $account->id ? 'selected' : '' }}
                            >
                                {{ $account->account_number }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Transaction Type</label>

                    <select name="transaction_type" class="form-control">
                        <option value="deposit"
                            {{ $transaction->transaction_type == 'deposit' ? 'selected' : '' }}>
                            Deposit
                        </option>

                        <option value="withdrawal"
                            {{ $transaction->transaction_type == 'withdrawal' ? 'selected' : '' }}>
                            Withdrawal
                        </option>

                        <option value="transfer"
                            {{ $transaction->transaction_type == 'transfer' ? 'selected' : '' }}>
                            Transfer
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Amount</label>

                    <input
                        type="number"
                        step="0.01"
                        name="amount"
                        class="form-control"
                        value="{{ $transaction->amount }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>

                    <select name="status" class="form-control">
                        <option value="pending"
                            {{ $transaction->status == 'pending' ? 'selected' : '' }}>
                            Pending
                        </option>

                        <option value="completed"
                            {{ $transaction->status == 'completed' ? 'selected' : '' }}>
                            Completed
                        </option>

                        <option value="failed"
                            {{ $transaction->status == 'failed' ? 'selected' : '' }}>
                            Failed
                        </option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Update Transaction
                </button>

                <a href="{{ route('Transactions') }}" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>
    </div>

</div>

@endsection