@extends('layouts.content')

@section('content')

    <div class="card shadow-sm">
        <div class="card-header">
            <strong>account Code:</strong> {{ $account->account_number }}
        </div>

        <div class="card-body">

            <p><strong>customer_id:</strong> {{ $account->customer_id }}</p>
            <p><strong>account_type:</strong> {{ $account->account_type }}</p>

            <hr>

            <p><strong>balance:</strong> {{ number_format($account->balance, 2) }}</p>
            <p><strong>status:</strong> {{ $account->status }}</p>
           
            <hr>

            <p><strong>Created At:</strong> {{ optional($account->created_at)->format('Y-m-d H:i') }}</p>
            <p><strong>Updated At:</strong> {{ optional($account->updated_at)->format('Y-m-d H:i') }}</p>

            <a href="{{ url('/Accounts') }}" class="btn btn-primary mt-3">
                ← Go back
            </a>
        </div>
    </div>
@endsection
