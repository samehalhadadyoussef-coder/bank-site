@extends('layouts.content')

@section('content')

    <div class="card shadow-sm">
        <div class="card-header">
            <strong>Customer Code:</strong> {{ $customer->customer_code }}
        </div>

        <div class="card-body">

            <p><strong>Name:</strong> {{ $customer->full_name }}</p>
            <p><strong>National ID:</strong> {{ $customer->national_id }}</p>
            <p><strong>Date of Birth:</strong> {{ $customer->date_of_birth }}</p>

            <hr>

            <p><strong>Phone:</strong> {{ $customer->phone }}</p>
            <p><strong>Email:</strong> {{ $customer->email }}</p>
            <p><strong>Address:</strong> {{ $customer->address }}</p>

            <hr>

            <p><strong>Balance:</strong> {{ number_format($customer->balance, 2) }}</p>
            <p><strong>Status:</strong> {{ $customer->status }}</p>

            <hr>

            <p><strong>Created At:</strong> {{ optional($customer->created_at)->format('Y-m-d H:i') }}</p>
            <p><strong>Updated At:</strong> {{ optional($customer->updated_at)->format('Y-m-d H:i') }}</p>

            <a href="{{ url('/Customers') }}" class="btn btn-primary mt-3">
                ← Go back
            </a>
        </div>
    </div>
@endsection
