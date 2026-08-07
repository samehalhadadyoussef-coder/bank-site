@extends('layouts.content')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="app-content-header mb-4">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h2 class="fw-bold text-dark">
                    <i class="bi bi-wallet2 text-primary"></i>
                    Accounts Management
                </h2>
                <p class="text-muted mb-0">
                    Manage all customer bank accounts
                </p>
            </div>

            <div class="col-md-6">
                <ol class="breadcrumb float-md-end mb-0">
                    <li class="breadcrumb-item">
                        <a href="/home">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Accounts
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
                            <h6 class="text-muted">Total Accounts</h6>
                            <h2 class="fw-bold text-primary">4,250</h2>
                        </div>

                        <i class="bi bi-wallet2 fs-1 text-primary"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-lg">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted">Savings Accounts</h6>
                            <h2 class="fw-bold text-success">2,850</h2>
                        </div>

                        <i class="bi bi-piggy-bank fs-1 text-success"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-lg">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted">Current Accounts</h6>
                            <h2 class="fw-bold text-warning">1,200</h2>
                        </div>

                        <i class="bi bi-credit-card fs-1 text-warning"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-lg">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted">Total Balance</h6>
                            <h2 class="fw-bold text-danger">$25M</h2>
                        </div>

                        <i class="bi bi-cash-stack fs-1 text-danger"></i>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Accounts Table -->
    <div class="card border-0 shadow-lg">

        <div class="card-header bg-white">

            <div class="d-flex justify-content-between align-items-center">

                <h5 class="fw-bold mb-0">
                    <i class="bi bi-bank"></i>
                    Accounts List
                </h5>

                <div class="d-flex gap-2">

                    <input type="text"
                        class="form-control"
                        placeholder="Search Account">

                    <button class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i>
                        New Account
                    </button>

                </div>

            </div>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Account Number</th>
                            <th>Customer</th>
                            <th>Type</th>
                            <th>Balance</th>
                            <th>Status</th>
                            <th width="160">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>ACC-10001</td>
                            <td>Ahmed Ali</td>
                            <td>
                                <span class="badge bg-info">
                                    Savings
                                </span>
                            </td>
                            <td>$5,000</td>
                            <td>
                                <span class="badge bg-success">
                                    Active
                                </span>
                            </td>

                            <td>
                                <button class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>ACC-10002</td>
                            <td>Mohamed Samir</td>
                            <td>
                                <span class="badge bg-primary">
                                    Current
                                </span>
                            </td>
                            <td>$8,500</td>
                            <td>
                                <span class="badge bg-success">
                                    Active
                                </span>
                            </td>

                            <td>
                                <button class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>ACC-10003</td>
                            <td>Omar Hassan</td>
                            <td>
                                <span class="badge bg-info">
                                    Savings
                                </span>
                            </td>
                            <td>$12,000</td>
                            <td>
                                <span class="badge bg-danger">
                                    Frozen
                                </span>
                            </td>

                            <td>
                                <button class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<style>
.card{
    border-radius:15px;
}

.card:hover{
    transform:translateY(-4px);
    transition:0.3s;
}

.btn{
    border-radius:10px;
}

.table{
    vertical-align:middle;
}

.table thead th{
    font-weight:600;
}
</style>

@endsection