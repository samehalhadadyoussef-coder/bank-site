@extends('layouts.content')

@section('content')

<div class="card shadow-sm">

    <div class="card-header">
        <strong>Loan Number:</strong> {{ $loan->loan_number }}
    </div>

    <div class="card-body">

        <p>
            <strong>Customer:</strong>
            {{ optional($loan->customer)->full_name }}
        </p>

        <p>
            <strong>Loan Type:</strong>
            {{ ucfirst($loan->loan_type) }}
        </p>

        <hr>

        <p>
            <strong>Amount:</strong>
            ${{ number_format($loan->amount, 2) }}
        </p>

        <p>
            <strong>Duration:</strong>
            {{ $loan->duration_months }} Months
        </p>

        <p>
            <strong>Status:</strong>

            @if($loan->status == 'approved')
                <span class="badge bg-success">Approved</span>
            @elseif($loan->status == 'pending')
                <span class="badge bg-warning">Pending</span>
            @elseif($loan->status == 'rejected')
                <span class="badge bg-danger">Rejected</span>
            @else
                <span class="badge bg-secondary">Closed</span>
            @endif
        </p>

        <hr>

        <p>
            <strong>Created At:</strong>
           {{ optional($loan->created_at)->format('Y-m-d H:i') }}
        </p>

        <p>
            <strong>Updated At:</strong>
            {{ optional($loan->updated_at)->format('Y-m-d H:i') }}
        </p>

        <a href="{{ route('Loans') }}" class="btn btn-primary mt-3">
            ← Back to Loans
        </a>

    </div>

</div>

@endsection