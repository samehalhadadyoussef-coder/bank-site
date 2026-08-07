@extends('layouts.content')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="app-content-header mb-4">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h2 class="fw-bold">
                    <i class="bi bi-bank2 text-success"></i>
                    Financial Control Center
                </h2>
                <p class="text-muted">
                    Accounting & Financial Performance Overview
                </p>
            </div>

            <div class="col-md-6">
                <ol class="breadcrumb float-md-end">
                    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                    <li class="breadcrumb-item active">Accounting</li>
                </ol>
            </div>

        </div>
    </div>

    <!-- Top Cards -->
    <div class="row mb-4">

        <div class="col-lg-4 mb-3">
            <div class="financial-card assets">
                <h6>Total Assets</h6>
                <h2>${{ number_format($assets) }}</h2>
            </div>
        </div>

        <div class="col-lg-4 mb-3">
            <div class="financial-card liabilities">
                <h6>Total Liabilities</h6>
                <h2>${{ number_format($liabilities) }}</h2>
            </div>
        </div>

        <div class="col-lg-4 mb-3">
            <div class="financial-card profit">
                <h6>Net Profit</h6>
                <h2>${{ number_format($profit) }}</h2>
            </div>
        </div>

    </div>

    <div class="row">

        <!-- Financial Health -->
        <div class="col-lg-8">

            <div class="card shadow border-0 mb-4">

                <div class="card-header">
                    <h5 class="mb-0">Financial Health</h5>
                </div>

                <div class="card-body">

                    <h6>Assets Utilization</h6>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" style="width:82%">82%</div>
                    </div>

                    <h6>Liabilities Ratio</h6>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-danger" style="width:62%">62%</div>
                    </div>

                    <h6>Capital Adequacy</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" style="width:91%">91%</div>
                    </div>

                </div>

            </div>

            <!-- Revenue & Expenses -->
            <div class="row">

                <div class="col-md-6 mb-3">
                    <div class="glass-card">
                        <h5 class="text-success">Revenue</h5>
                        <h2>${{ number_format($revenue) }}</h2>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="glass-card">
                        <h5 class="text-danger">Expenses</h5>
                        <h2>${{ number_format($expenses) }}</h2>
                    </div>
                </div>

            </div>

        </div>

        <!-- Alerts -->
        <div class="col-lg-4">

            <div class="card border-0 shadow">

                <div class="card-header bg-warning">
                    <h5 class="mb-0 text-dark">Audit Alerts</h5>
                </div>

                <div class="card-body">

                    <div class="alert alert-danger">
                        High Expense in IT Department
                    </div>

                    <div class="alert alert-warning">
                        Quarterly Audit Pending
                    </div>

                    <div class="alert alert-info">
                        Loan Provision Review Required
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Table -->
    <div class="card border-0 shadow mt-4">

        <div class="card-header">
            <h5 class="mb-0">Monthly Financial Performance</h5>
        </div>

        <div class="card-body">

            <table class="table table-hover">

                <thead class="table-light">
                    <tr>
                        <th>Month</th>
                        <th>Revenue</th>
                        <th>Expenses</th>
                        <th>Profit</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($data as $row)
                    <tr>
                        <td>{{ $row->month }}</td>
                        <td>${{ number_format($row->revenue) }}</td>
                        <td>${{ number_format($row->expenses) }}</td>
                        <td class="text-success">${{ number_format($row->profit) }}</td>
                    </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

<style>

.financial-card{
    padding:25px;
    border-radius:18px;
    color:white;
}

.assets{ background:linear-gradient(135deg,#198754,#20c997); }
.liabilities{ background:linear-gradient(135deg,#dc3545,#ff6b6b); }
.profit{ background:linear-gradient(135deg,#0d6efd,#4dabf7); }

.glass-card{
    background:#fff;
    padding:20px;
    border-radius:18px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);
}

.card{
    border-radius:18px;
}

</style>

@endsection