@extends('layouts.content')

@section('content')

<div class="container">
    <h1>Add Customer</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  
    <form action="{{ route('Customer_store') }}" method="POST">
        @csrf

        <!-- Customer Code -->
        <div class="form-group mb-2">
            <label>Customer Code</label>
            <input type="text" class="form-control" name="customer_code" required>
        </div>

        <!-- Full Name -->
        <div class="form-group mb-2">
            <label>Full Name</label>
            <input type="text" class="form-control" name="full_name" required>
        </div>

        <!-- National ID -->
        <div class="form-group mb-2">
            <label>National ID</label>
            <input type="text" class="form-control" name="national_id" required>
        </div>

        <!-- Phone -->
        <div class="form-group mb-2">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone">
        </div>

        <!-- Balance -->
        <div class="form-group mb-2">
            <label>Balance</label>
            <input type="number" step="0.01" class="form-control" name="balance">
        </div>

        <!-- Email -->
        <div class="form-group mb-2">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <!-- Address -->
        <div class="form-group mb-2">
            <label>Address</label>
            <textarea class="form-control" name="address"></textarea>
        </div>

        <!-- Date of Birth -->
        <div class="form-group mb-2">
            <label>Date of Birth</label>
            <input type="date" class="form-control" name="date_of_birth">
        </div>

        <!-- Status -->
        <div class="form-group mb-3">
            <label>Status</label>
            <select class="form-control" name="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
                <option value="blocked">Blocked</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Add Customer
        </button>
    </form>
</div>

@endsection