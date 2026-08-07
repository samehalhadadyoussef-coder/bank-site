@extends('layouts.content')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <strong>Transaction Details</strong>
                    </div>
                    <div class="card-body">
                        <p><strong>Transaction ID:</strong> {{ $transaction->transaction_id }}</p>
                        <p><strong>Account:</strong> {{ $transaction->account->account_number }}</p>
                        <p><strong>Customer:</strong> {{ $transaction->customer->full_name }}</p>
                        <p><strong>Type:</strong> {{ $transaction->transaction_type }}</p>
                        <p><strong>Amount:</strong> {{ number_format($transaction->amount, 2) }}</p>
                        <p><strong>Status:</strong> {{ $transaction->status }}</p>


                        <a href="{{ route('Transactions') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left"></i> Back to Transactions
                        </a>


                        <a href="{{ route('transaction.edit', $transaction->id) }}" class="btn btn-outline-info">
                            <i class="bi bi-arrow-left"></i> go to edit
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
