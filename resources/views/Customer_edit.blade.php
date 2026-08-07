@extends('layouts.content')

@section('content')

    <div class="container">
        <h1>Update Customer</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-2">
                <label>Customer Code</label>
                <input type="text" name="customer_code" class="form-control" value="{{ $customer->customer_code }}">
            </div>

            <div class="form-group mb-2">
                <label>Full Name</label>
                <input type="text" name="full_name" class="form-control" value="{{ $customer->full_name }}">
            </div>

            <div class="form-group mb-2">
                <label>National ID</label>
                <input type="text" name="national_id" class="form-control" value="{{ $customer->national_id }}">
            </div>

            <div class="form-group mb-2">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}">
            </div>

            <div class="form-group mb-2">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $customer->email }}">
            </div>

            <div class="form-group mb-2">
                <label>Address</label>
                <textarea name="address" class="form-control">{{ $customer->address }}</textarea>
            </div>
            <div class="form-group mb-2">
                <label>balance</label>
                <textarea name="balance" class="form-control">{{ $customer->balance }}</textarea>
            </div>

            <div class="form-group mb-2">
                <label>Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" value="{{ $customer->date_of_birth }}">
            </div>

            <div class="form-group mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="active" {{ $customer->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $customer->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    <option value="blocked" {{ $customer->status == 'blocked' ? 'selected' : '' }}>Blocked</option>
                </select>
            </div>

            <button class="btn btn-primary">
                Update Customer
            </button>
        </form>
    </div>

@endsection
