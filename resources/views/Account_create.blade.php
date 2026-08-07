@extends('layouts.content')

@section('content')

    <div class="container">
        <h1>Add Account</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('Account_store') }}" method="POST">
            @csrf

            <!-- customer_id Code -->
            <div class="form-group mb-2">
                <label>Customer ID</label>
                <input type="text" class="form-control" name="customer_id" required>
            </div> <!-- customer_id Code -->

            <div class="form-group mb-2">
                <label>account_number</label>
                <input type="text" class="form-control" name="account_number" required>
            </div> <!-- customer_id Code -->

            <div class="form-group mb-2">
                <label>account_type</label>
                <input type="text" class="form-control" name="account_type" required>
            </div> <!-- customer_id Code -->

            <div class="form-group mb-2">
                <label>balance</label>
                <input type="text" class="form-control" name="balance" required>
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
                Add Account
            </button>
        </form>
    </div>

@endsection
