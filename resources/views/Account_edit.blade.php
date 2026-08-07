@extends('layouts.content')

@section('content')

    <div class="container">
        <h1>Edit Account</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('Account_update', $account->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- customer_id Code -->
            <div class="form-group mb-2">
                <label>Customer ID</label>
                <input type="text" class="form-control" name="customer_id" value="{{ $account->customer_id }}" required>
            </div> <!-- customer_id Code -->

            <div class="form-group mb-2">
                <label>account_number</label>
                <input type="text" class="form-control" name="account_number" value="{{ $account->account_number }}"
                    required>
            </div> <!-- customer_id Code -->

            <div class="form-group mb-2">
                <label>account_type</label>
                <input type="text" class="form-control" name="account_type" value="{{ $account->account_type }}"
                    required>
            </div> <!-- customer_id Code -->

            <div class="form-group mb-2">
                <label>balance</label>
                <input type="text" class="form-control" name="balance" value="{{ $account->balance }}" required>
            </div>


            <select class="form-control" name="status">
                <option value="active" {{ $account->status == 'active' ? 'selected' : '' }}>
                    Active
                </option>

                <option value="frozen" {{ $account->status == 'frozen' ? 'selected' : '' }}>
                    Frozen
                </option>

                <option value="closed" {{ $account->status == 'closed' ? 'selected' : '' }}>
                    Closed
                </option>
            </select>
            <button type="submit" class="btn btn-primary">
                Update Account
            </button>
        </form>
    </div>

@endsection
