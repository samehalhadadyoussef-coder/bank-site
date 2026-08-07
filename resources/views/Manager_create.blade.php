@extends('layouts.content')

@section('content')
    <div class="container-fluid">

        <!-- Header -->
        <div class="app-content-header mb-4">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <h2 class="fw-bold">
                        <i class="bi bi-person-plus-fill text-primary"></i>
                        Add New Manager
                    </h2>
                    <p class="text-muted mb-0">
                        Register a new bank manager
                    </p>
                </div>

                <div class="col-md-6">
                    <ol class="breadcrumb float-md-end">
                        <li class="breadcrumb-item">
                            <a href="/home">Dashboard</a>
                        </li>

                        <li class="breadcrumb-item">
                            <a href="{{ route('Managers') }}">
                                Managers
                            </a>
                        </li>

                        <li class="breadcrumb-item active">
                            Create
                        </li>
                    </ol>
                </div>

            </div>
        </div>

        <div class="card shadow border-0">

            <div class="card-header bg-primary text-white">

                <h5 class="mb-0">

                    <i class="bi bi-person-vcard"></i>

                    Manager Information

                </h5>

            </div>

            <div class="card-body">

                <form action="{{ route('Managers.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <input type="text" name="name" class="form-control mb-3" placeholder="Name">

                    <input type="email" name="email" class="form-control mb-3" placeholder="Email">

                    <input type="file" name="image" class="form-control mb-3" accept="image/*">

                    <input type="text" name="phone" class="form-control mb-3" placeholder="Phone">

                    <select name="department" class="form-select mb-3">
                        <option value="">Choose Department</option>
                        <option value="Finance">Finance</option>
                        <option value="Loans">Loans</option>
                        <option value="Accounts">Accounts</option>
                        <option value="Customer Service">Customer Service</option>
                        <option value="Risk Management">Risk Management</option>
                        <option value="IT Department">IT Department</option>
                        <option value="Human Resources">Human Resources</option>
                    </select>

                    <input type="text" name="position" class="form-control mb-3" placeholder="Position">

                    <input type="number" step="0.01" name="salary" class="form-control mb-3" placeholder="Salary">

                    <select name="status" class="form-select mb-3">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>

                    <button class="btn btn-primary">
                        Save Manager
                    </button>

                </form>
            </div>

        </div>

    </div>
@endsection
