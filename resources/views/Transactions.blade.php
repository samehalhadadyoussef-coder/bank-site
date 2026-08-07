@extends('layouts.content')

@section('content')
    <div class="container-fluid">

        <!-- Header -->
        <div class="app-content-header mb-4">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <h2 class="fw-bold text-dark">
                        <i class="bi bi-arrow-left-right text-primary"></i>
                        Transactions Management
                    </h2>
                    <p class="text-muted mb-0">
                        Monitor and manage all banking transactions
                    </p>
                </div>

                <div class="col-md-6">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item">
                            <a href="/home">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Transactions
                        </li>
                    </ol>
                </div>

            </div>
        </div>

        <!-- Statistics -->
        <div class="row mb-4">

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-muted">Total Transactions</h6>
                                <h2 class="fw-bold text-primary">15,240</h2>
                            </div>

                            <i class="bi bi-arrow-left-right fs-1 text-primary"></i>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-muted">Deposits</h6>
                                <h2 class="fw-bold text-success">$8.2M</h2>
                            </div>

                            <i class="bi bi-arrow-down-circle-fill fs-1 text-success"></i>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-muted">Withdrawals</h6>
                                <h2 class="fw-bold text-danger">$5.1M</h2>
                            </div>

                            <i class="bi bi-arrow-up-circle-fill fs-1 text-danger"></i>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-muted">Pending</h6>
                                <h2 class="fw-bold text-warning">145</h2>
                            </div>

                            <i class="bi bi-clock-history fs-1 text-warning"></i>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Transactions Table -->
        <div class="card border-0 shadow-lg">

            <div class="card-header bg-white">

                <div class="d-flex justify-content-between align-items-center">

                    <h5 class="fw-bold mb-0">
                        <i class="bi bi-list-ul"></i>
                        Transactions List
                    </h5>

                    <div class="d-flex gap-2">

                        <input type="text" class="form-control" placeholder="Search Transaction">

                        <a class="btn btn-primary" href="{{ route('transaction.create') }}">
                            <i class="bi bi-plus-circle"></i>
                            New Transaction
                        </a>

                    </div>

                </div>

            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Transaction ID</th>
                                <th>Customer</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th width="160">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->transaction_id }}</td>

                                    {{-- FIX HERE --}}
                                    <td>{{ $transaction->customer->full_name ?? 'N/A' }}</td>

                                    <td>
                                        <span class="badge bg-success">
                                            {{ $transaction->transaction_type }}
                                        </span>
                                    </td>

                                    <td>${{ number_format($transaction->amount, 2) }}</td>

                                    <td>{{ $transaction->created_at->format('Y-m-d') }}</td>

                                    <td>
                                        <span class="badge bg-success">
                                            {{ $transaction->status }}
                                        </span>
                                    </td>

                                    <td>
                                        <a class="btn btn-sm btn-info"
                                            href="{{ route('transaction.view', $transaction->id) }}">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a href="{{ route('transaction.edit', $transaction->id) }}"
                                            class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="{{ route('transaction.destroy', $transaction->id) }}" method="POST"
                                            style="display:inline-block;">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

    <style>
        .card {
            border-radius: 15px;
        }

        .card:hover {
            transform: translateY(-4px);
            transition: 0.3s;
        }

        .btn {
            border-radius: 10px;
        }

        .table {
            vertical-align: middle;
        }

        .table thead th {
            font-weight: 600;
        }
    </style>
@endsection
