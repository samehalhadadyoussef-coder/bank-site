@extends('layouts.content')

@section('content')
    <div class="container-fluid">

        <!-- Header -->
        <div class="app-content-header mb-4">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <h2 class="fw-bold">
                        <i class="bi bi-cash-coin text-success"></i>
                        Loan Management
                    </h2>
                    <p class="text-muted">
                        Monitor and manage all bank loans
                    </p>
                </div>

                <div class="col-md-6">
                    <ol class="breadcrumb float-md-end">
                        <li class="breadcrumb-item">
                            <a href="/home">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Loans
                        </li>
                    </ol>
                </div>

            </div>
        </div>

        <!-- Statistics -->
        <div class="row">

            <div class="col-lg-4 mb-4">

                <div class="card border-0 shadow">
                    <div class="card-body">

                        <h6 class="text-muted">
                            Total Loan Portfolio
                        </h6>

                        <h2 class="text-success fw-bold">
                            $48.5M
                        </h2>

                        <div class="progress mt-3">
                            <div class="progress-bar bg-success" style="width:75%">
                            </div>
                        </div>

                        <small class="text-muted">
                            75% of annual target achieved
                        </small>

                    </div>
                </div>

            </div>

            <div class="col-lg-4 mb-4">

                <div class="card border-0 shadow">
                    <div class="card-body">

                        <h6 class="text-muted">
                            Approved Loans
                        </h6>

                        <h2 class="text-primary fw-bold">
                            1,240
                        </h2>

                        <div class="progress mt-3">
                            <div class="progress-bar bg-primary" style="width:85%">
                            </div>
                        </div>

                        <small class="text-muted">
                            Strong approval rate
                        </small>

                    </div>
                </div>

            </div>

            <div class="col-lg-4 mb-4">

                <div class="card border-0 shadow">
                    <div class="card-body">

                        <h6 class="text-muted">
                            Pending Applications
                        </h6>

                        <h2 class="text-warning fw-bold">
                            84
                        </h2>

                        <div class="progress mt-3">
                            <div class="progress-bar bg-warning" style="width:35%">
                            </div>
                        </div>

                        <small class="text-muted">
                            Waiting for review
                        </small>

                    </div>
                </div>

            </div>

        </div>

        <!-- Loan Categories -->
        <div class="row mb-4">

            <div class="col-md-3">
                <div class="card border-0 bg-primary text-white shadow">
                    <div class="card-body text-center">
                        <i class="bi bi-person-fill fs-1"></i>
                        <h5 class="mt-2">Personal Loans</h5>
                        <h3>450</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 bg-success text-white shadow">
                    <div class="card-body text-center">
                        <i class="bi bi-building fs-1"></i>
                        <h5 class="mt-2">Business Loans</h5>
                        <h3>210</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 bg-warning text-white shadow">
                    <div class="card-body text-center">
                        <i class="bi bi-house-fill fs-1"></i>
                        <h5 class="mt-2">Mortgage Loans</h5>
                        <h3>180</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 bg-danger text-white shadow">
                    <div class="card-body text-center">
                        <i class="bi bi-car-front-fill fs-1"></i>
                        <h5 class="mt-2">Auto Loans</h5>
                        <h3>95</h3>
                    </div>
                </div>
            </div>

        </div>

        <!-- Loan Table -->
        <div class="card border-0 shadow">

            <div class="card-header bg-white">

                <div class="d-flex justify-content-between align-items-center">

                    <h5 class="mb-0">
                        Loan Applications
                    </h5>

                    <a href="{{ route('loan.create') }}" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i>
                        New Loan
                    </a>

                </div>

            </div>

            <div class="card-body">

                <table class="table table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>Loan ID</th>
                            <th>Customer</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Duration</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($loans as $loan)
                            <tr>
                                <td>{{ $loan->loan_number }}</td>

                                <td>{{ $loan->customer->full_name }}</td>

                                <td>{{ ucfirst($loan->loan_type) }}</td>

                                <td>${{ number_format($loan->amount, 2) }}</td>

                                <td>{{ $loan->duration_months }} Months</td>

                                <td>
                                    @if ($loan->status == 'approved')
                                        <span class="badge bg-success">Approved</span>
                                    @elseif($loan->status == 'pending')
                                        <span class="badge bg-warning">Pending</span>
                                    @elseif($loan->status == 'rejected')
                                        <span class="badge bg-danger">Rejected</span>
                                    @else
                                        <span class="badge bg-secondary">Closed</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('loans.view', $loan->id) }}" class="btn btn-info btn-sm">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <style>
        .card {
            border-radius: 16px;
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .progress {
            height: 8px;
            border-radius: 20px;
        }

        .btn {
            border-radius: 10px;
        }
    </style>
@endsection
