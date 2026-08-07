@extends('layouts.content')

@section('content')
    <div class="container-fluid">

        <!-- Header -->
        <div class="app-content-header mb-4">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <h2 class="fw-bold text-dark">
                        <i class="bi bi-people-fill text-primary"></i>
                        Customers Management
                    </h2>
                    <p class="text-muted mb-0">
                        Manage all bank customers and their accounts
                    </p>
                </div>

                <div class="col-md-6">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item">
                            <a href="/home">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Customers
                        </li>
                    </ol>
                </div>

            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="row mb-4">

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Total Customers</h6>
                                <h2 class="fw-bold text-primary">200k+</h2>
                            </div>

                            <i class="bi bi-people-fill fs-1 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Active Customers</h6>
                                <h2 class="fw-bold text-success">20,180</h2>
                            </div>

                            <i class="bi bi-person-check-fill fs-1 text-success"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">New Customers</h6>
                                <h2 class="fw-bold text-warning">650</h2>
                            </div>

                            <i class="bi bi-person-plus-fill fs-1 text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Total Deposits</h6>
                                <h2 class="fw-bold text-danger">$12.5M</h2>
                            </div>

                            <i class="bi bi-wallet2 fs-1 text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Customers Table -->
        <div class="card border-0 shadow-lg">

            <div class="card-header bg-white border-0 py-3">

                <div class="d-flex justify-content-between align-items-center">

                    <h5 class="fw-bold mb-0">
                        <i class="bi bi-table"></i>
                        Customers List
                    </h5>

                    <div class="d-flex gap-2">

                        <input type="text" class="form-control" placeholder="Search Customer">

                        <a href="{{ route('Customer_create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i>
                            Add Customer
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Account Number</th>
                                <th>Balance</th>
                                <th>Status</th>
                                <th width="160">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($Customers as $item)
                                <tr>

                                    <td>{{ $item->id }}</td>

                                    <td>{{ $item->full_name }}</td>

                                    <td>{{ $item->email }}</td>

                                    <td>{{ $item->account_number }}</td>

                                    <td>${{ number_format($item->balance, 2) }}</td>

                                    <td>
                                        @if ($item->status == 'Active')
                                            <span class="badge bg-success">
                                                Active
                                            </span>
                                        @else
                                            <span class="badge bg-danger">
                                                Inactive
                                            </span>
                                        @endif
                                    </td>

                                    <td>

                                        <a href="{{ route('customers.view', $item->id) }}" class="btn btn-sm btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a href="{{ route('customers.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="{{ route('delete', $item->id) }}" method="POST" class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Delete this customer?')">

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

        .shadow-lg {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .12) !important;
        }
    </style>
@endsection
