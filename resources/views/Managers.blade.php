@extends('layouts.content')

@section('content')
    <div class="container-fluid">

        <!-- Header -->
        <div class="app-content-header mb-4">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <h2 class="fw-bold">
                        <i class="bi bi-person-badge text-primary"></i>
                        Managers Control Center
                    </h2>

                    <p class="text-muted mb-0">
                        Manage all company managers and monitor their status.
                    </p>
                </div>

                <div class="col-md-6">
                    <ol class="breadcrumb float-md-end">
                        <li class="breadcrumb-item">
                            <a href="/home">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Managers
                        </li>
                    </ol>
                </div>

            </div>
        </div>

        <!-- Statistics -->

        <div class="row">

            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0">

                    <div class="card-body">

                        <div class="d-flex justify-content-between">

                            <div>

                                <h6 class="text-muted">
                                    Total Managers
                                </h6>

                                <h2 class="fw-bold">
                                    {{ $total }}
                                </h2>

                            </div>

                            <div class="icon-box bg-primary">

                                <i class="bi bi-people-fill"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0">

                    <div class="card-body">

                        <div class="d-flex justify-content-between">

                            <div>

                                <h6 class="text-muted">
                                    Active
                                </h6>

                                <h2 class="fw-bold text-success">
                                    {{ $active }}
                                </h2>

                            </div>

                            <div class="icon-box bg-success">

                                <i class="bi bi-check-circle-fill"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0">

                    <div class="card-body">

                        <div class="d-flex justify-content-between">

                            <div>

                                <h6 class="text-muted">
                                    Departments
                                </h6>

                                <h2 class="fw-bold text-warning">
                                    {{ $departments }}
                                </h2>

                            </div>

                            <div class="icon-box bg-warning">

                                <i class="bi bi-building"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0">

                    <div class="card-body">

                        <div class="d-flex justify-content-between">

                            <div>

                                <h6 class="text-muted">
                                    Average Salary
                                </h6>

                                <h2 class="fw-bold text-danger">
                                    {{ number_format($averageSalary) }}
                                </h2>

                            </div>

                            <div class="icon-box bg-danger">

                                <i class="bi bi-cash-stack"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Managers Slider -->

        <div class="card shadow border-0 mt-4">

            <div class="card-header bg-white">

                <h5 class="mb-0">
                    Managers Overview
                </h5>

            </div>

            <div class="card-body">

                <div class="manager-wrapper">

                    <button class="scroll-btn left" onclick="scrollManagers(-1)">
                        ‹
                    </button>

                    <div class="manager-scroll" id="managerScroll">

                        @foreach ($managers as $manager)
                            @php

                                $color = $manager->status == 'Active' ? 'success' : 'danger';

                            @endphp

                            <div class="manager-item">

                                <div class="card manager-card border-{{ $color }}">

                                    <div class="card-body text-center">

                                        @if ($manager->image)
                                            <img src="{{ asset('uploads/managers/' . $manager->image) }}"
                                                class="rounded-circle mb-3" width="90" height="90"
                                                style="object-fit:cover;">
                                        @else
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($manager->name) }}&background=0D6EFD&color=fff"
                                                class="rounded-circle mb-3" width="90" height="90">
                                        @endif
                                        <h5>

                                            {{ $manager->name }}

                                        </h5>

                                        <p class="text-muted">

                                            {{ $manager->position }}

                                        </p>

                                        <span class="badge bg-{{ $color }}">

                                            {{ $manager->status }}

                                        </span>

                                        <hr>

                                        <p class="mb-1">

                                            <i class="bi bi-envelope"></i>

                                            {{ $manager->email }}

                                        </p>

                                        <p class="mb-1">

                                            <i class="bi bi-telephone"></i>

                                            {{ $manager->phone }}

                                        </p>

                                        <p class="fw-bold text-primary">

                                            {{ number_format($manager->salary) }}
                                            EGP

                                        </p>

                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>

                    <button class="scroll-btn right" onclick="scrollManagers(1)">
                        ›
                    </button>

                </div>

            </div>

        </div> <!-- Department Overview -->
        <div class="row mt-4">

            <div class="col-lg-5">

                <div class="card shadow border-0 h-100">

                    <div class="card-header bg-white">
                        <h5 class="mb-0">
                            <i class="bi bi-building"></i>
                            Department Overview
                        </h5>
                    </div>

                    <div class="card-body">

                        @foreach ($departmentStats as $department)
                            @php
                                $percent = ($department->count / max($total, 1)) * 100;
                            @endphp

                            <div class="mb-4">

                                <div class="d-flex justify-content-between">

                                    <span class="fw-semibold">
                                        {{ $department->department }}
                                    </span>

                                    <span>
                                        {{ $department->count }} Managers
                                    </span>

                                </div>

                                <div class="progress mt-2">

                                    <div class="progress-bar bg-primary" style="width:{{ $percent }}%">

                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>

            </div>

            <div class="col-lg-7">

                <div class="card shadow border-0 h-100">

                    <div class="card-header bg-white">

                        <h5 class="mb-0">
                            <i class="bi bi-star-fill text-warning"></i>
                            Top Managers
                        </h5>

                    </div>

                    <div class="card-body">

                        @foreach ($topManagers as $manager)
                            <div class="d-flex justify-content-between align-items-center border-bottom py-3">

                                <div class="d-flex align-items-center">

                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($manager->name) }}&background=198754&color=fff"
                                        class="rounded-circle me-3" width="55">

                                    <div>

                                        <h6 class="mb-0">
                                            {{ $manager->name }}
                                        </h6>

                                        <small class="text-muted">
                                            {{ $manager->position }}
                                        </small>

                                    </div>

                                </div>

                                <div>

                                    <span class="badge bg-success">

                                        {{ $manager->status }}

                                    </span>

                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>

            </div>

        </div>

        <!-- Managers Table -->

        <div class="card shadow border-0 mt-4">

            <div class="card-header bg-white d-flex justify-content-between align-items-center">

                <h5 class="mb-0">

                    <i class="bi bi-table"></i>

                    Managers List

                </h5>

                <a class="btn btn-primary" href="{{ route('Managers.create') }}">

                    <i class="bi bi-plus-circle"></i>

                    Add Manager

                </a>

            </div>

            <div class="card-body table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                        <tr>

                            <th>#</th>

                            <th>Name</th>

                            <th>Department</th>

                            <th>Position</th>

                            <th>Phone</th>

                            <th>Email</th>

                            <th>Salary</th>

                            <th>Status</th>

                            <th width="160">

                                Actions

                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($managers as $manager)
                            <tr>

                                <td>{{ $manager->id }}</td>

                                <td>

                                    <div class="d-flex align-items-center">

                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($manager->name) }}"
                                            width="45" class="rounded-circle me-2">

                                        {{ $manager->name }}

                                    </div>

                                </td>

                                <td>

                                    {{ $manager->department }}

                                </td>

                                <td>

                                    {{ $manager->position }}

                                </td>

                                <td>

                                    {{ $manager->phone }}

                                </td>

                                <td>

                                    {{ $manager->email }}

                                </td>

                                <td>

                                    {{ number_format($manager->salary) }} EGP

                                </td>

                                <td>

                                    @if ($manager->status == 'Active')
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
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>
        <style>
            .icon-box {
                width: 60px;
                height: 60px;
                border-radius: 15px;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #fff;
                font-size: 26px;
            }

            .manager-wrapper {
                position: relative;
                display: flex;
                align-items: center;
            }

            .manager-scroll {
                display: flex;
                gap: 20px;
                overflow-x: auto;
                scroll-behavior: smooth;
                width: 100%;
                padding: 15px;
            }

            .manager-scroll::-webkit-scrollbar {
                display: none;
            }

            .manager-item {
                min-width: 290px;
                flex: 0 0 auto;
            }

            .manager-card {
                border-width: 2px;
                border-radius: 20px;
                transition: .35s;
            }

            .manager-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, .15);
            }

            .scroll-btn {
                position: absolute;
                width: 45px;
                height: 45px;
                border-radius: 50%;
                border: none;
                background: #fff;
                box-shadow: 0 5px 15px rgba(0, 0, 0, .2);
                font-size: 28px;
                z-index: 100;
                cursor: pointer;
            }

            .scroll-btn.left {
                left: -10px;
            }

            .scroll-btn.right {
                right: -10px;
            }

            .progress {
                height: 10px;
                border-radius: 20px;
            }

            .table td {
                vertical-align: middle;
            }

            .table tbody tr {
                transition: .25s;
            }

            .table tbody tr:hover {
                background: #f8f9fa;
            }

            .card {
                border-radius: 18px;
            }

            .btn {
                border-radius: 10px;
            }
        </style>
        <script>
            function scrollManagers(direction) {

                const slider = document.getElementById('managerScroll');

                slider.scrollBy({

                    left: direction * 320,

                    behavior: 'smooth'

                });

            }
        </script>
    @endsection
