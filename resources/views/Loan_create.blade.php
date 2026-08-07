@extends('layouts.content')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
            <h3>Add New Loan</h3>
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

            <form action="{{ route('loan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Customer</label>

                    <select name="customer_id" class="form-control" required>
                        <option value="">Select Customer</option>

                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}">
                                {{ $customer->full_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>Loan Type</label>

                    <select name="loan_type" class="form-control">
                        <option value="personal">Personal</option>
                        <option value="business">Business</option>
                        <option value="mortgage">Mortgage</option>
                        <option value="auto">Auto</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Amount</label>

                    <input
                        type="number"
                        step="0.01"
                        name="amount"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label>Duration (Months)</label>

                    <input
                        type="number"
                        name="duration_months"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label>Status</label>

                    <select name="status" class="form-control">
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                        <option value="closed">Closed</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Notes</label>

                    <textarea
                        name="notes"
                        class="form-control"
                        rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Create Loan
                </button>

            </form>

        </div>
    </div>

</div>

@endsection