@extends('layouts.content')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="app-content-header mb-4">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h2 class="fw-bold">
                    <i class="bi bi-person-badge-fill text-primary"></i>
                    Employees Management
                </h2>
                <p class="text-muted mb-0">
                    Manage employees, departments and attendance
                </p>
            </div>

            <div class="col-md-6">
                <ol class="breadcrumb float-md-end">
                    <li class="breadcrumb-item">
                        <a href="/home">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Employees
                    </li>
                </ol>
            </div>

        </div>
    </div>

    <!-- Statistics -->
    <div class="row mb-4">

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm stat-card">
                <div class="card-body">
                    <h6 class="text-muted">Total Employees</h6>
                    <h2 class="fw-bold text-primary">150</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm stat-card">
                <div class="card-body">
                    <h6 class="text-muted">Active Employees</h6>
                    <h2 class="fw-bold text-success">142</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm stat-card">
                <div class="card-body">
                    <h6 class="text-muted">Managers</h6>
                    <h2 class="fw-bold text-warning">18</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm stat-card">
                <div class="card-body">
                    <h6 class="text-muted">New Hires</h6>
                    <h2 class="fw-bold text-danger">6</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <!-- Departments -->
        <div class="col-lg-8">

            <div class="card border-0 shadow-sm mb-4">

                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-diagram-3"></i>
                        Departments
                    </h5>
                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <div class="department-card text-center">
                                <i class="bi bi-headset fs-1 text-primary"></i>
                                <h6 class="mt-2">Customer Service</h6>
                                <h4>25</h4>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="department-card text-center">
                                <i class="bi bi-cash-stack fs-1 text-success"></i>
                                <h6 class="mt-2">Finance</h6>
                                <h4>18</h4>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="department-card text-center">
                                <i class="bi bi-laptop fs-1 text-warning"></i>
                                <h6 class="mt-2">IT</h6>
                                <h4>12</h4>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="department-card text-center">
                                <i class="bi bi-building fs-1 text-danger"></i>
                                <h6 class="mt-2">Operations</h6>
                                <h4>20</h4>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Performance -->
            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        Employee Performance
                    </h5>
                </div>

                <div class="card-body">

                    <h6>Customer Service</h6>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-primary" style="width:95%">
                            95%
                        </div>
                    </div>

                    <h6>Finance Department</h6>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" style="width:80%">
                            80%
                        </div>
                    </div>

                    <h6>IT Department</h6>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-warning" style="width:90%">
                            90%
                        </div>
                    </div>

                    <h6>Operations</h6>
                    <div class="progress">
                        <div class="progress-bar bg-danger" style="width:85%">
                            85%
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Attendance -->
        <div class="col-lg-4">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">
                        Today's Attendance
                    </h5>
                </div>

                <div class="card-body">

                    <div class="d-flex justify-content-between mb-3">
                        <span>Present</span>
                        <span class="badge bg-success">92</span>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <span>Absent</span>
                        <span class="badge bg-danger">5</span>
                    </div>

                    <div class="d-flex justify-content-between">
                        <span>On Leave</span>
                        <span class="badge bg-warning text-dark">3</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Employees Table -->
    <div class="card border-0 shadow-sm mt-4">

        <div class="card-header bg-white d-flex justify-content-between align-items-center">

            <h5 class="mb-0">
                Employee Directory
            </h5>

            <button class="btn btn-primary">
                <i class="bi bi-plus-circle"></i>
                Add Employee
            </button>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>Employee</th>
                            <th>Position</th>
                            <th>Department</th>
                            <th>Salary</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Ahmed+Ali"
                                        width="40"
                                        class="rounded-circle me-2">
                                    Ahmed Ali
                                </div>
                            </td>
                            <td>Branch Manager</td>
                            <td>Operations</td>
                            <td>$4,500</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Mohamed+Samir"
                                        width="40"
                                        class="rounded-circle me-2">
                                    Mohamed Samir
                                </div>
                            </td>
                            <td>Accountant</td>
                            <td>Finance</td>
                            <td>$2,800</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
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
.stat-card{
    border-radius:15px;
    transition:.3s;
}

.stat-card:hover{
    transform:translateY(-5px);
}

.department-card{
    padding:20px;
    border-radius:15px;
    background:#f8f9fa;
    transition:.3s;
}

.department-card:hover{
    background:#eef4ff;
    transform:translateY(-5px);
}

.progress{
    height:22px;
    border-radius:10px;
}

.card{
    border-radius:15px;
}

.table td,
.table th{
    vertical-align:middle;
}
</style>

@endsection