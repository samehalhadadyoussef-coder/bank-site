@extends('layouts.content')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="app-content-header mb-4">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h2 class="fw-bold">
                    <i class="bi bi-envelope-paper-fill text-primary"></i>
                    Customer Reports
                </h2>
                <p class="text-muted">
                    Messages submitted from the website
                </p>
            </div>

            <div class="col-md-6">
                <ol class="breadcrumb float-md-end">
                    <li class="breadcrumb-item">
                        <a href="/home">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Reports
                    </li>
                </ol>
            </div>

        </div>
    </div>

    <!-- Statistics -->
    <div class="row mb-4">

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow border-0 text-center">
                <div class="card-body">
                    <i class="bi bi-file-earmark-text fs-1 text-primary"></i>
                    <h3 class="mt-2">{{ $totalReports }}</h3>
                    <p class="text-muted mb-0">
                        Total Reports
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow border-0 text-center">
                <div class="card-body">
                    <i class="bi bi-calendar-event fs-1 text-success"></i>
                    <h3 class="mt-2">{{ $thisMonth }}</h3>
                    <p class="text-muted mb-0">
                        This Month
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow border-0 text-center">
                <div class="card-body">
                    <i class="bi bi-clock-history fs-1 text-warning"></i>
                    <h3 class="mt-2">{{ $pending }}</h3>
                    <p class="text-muted mb-0">
                        Pending
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow border-0 text-center">
                <div class="card-body">
                    <i class="bi bi-check-circle fs-1 text-info"></i>
                    <h3 class="mt-2">{{ $resolved }}</h3>
                    <p class="text-muted mb-0">
                        Resolved
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- Reports Table -->
    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">
                Customer Messages
            </h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                        <tr>

                            <th>#</th>

                            <th>Name</th>

                            <th>Email</th>

                            <th>Report Type</th>

                            <th>Message</th>

                            <th>Date</th>

                            <th>Status</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($reports as $report)

                        <tr>

                            <td>{{ $report->id }}</td>

                            <td>
                                <strong>{{ $report->name }}</strong>
                            </td>

                            <td>
                                {{ $report->email }}
                            </td>

                            <td>
                                <span class="badge bg-secondary">
                                    {{ $report->report_type }}
                                </span>
                            </td>

                            <td style="max-width:350px">

                                {{ Str::limit($report->message,120) }}

                            </td>

                            <td>

                                {{ $report->created_at->format('d M Y') }}

                            </td>

                            <td>

                                @if($report->status=="pending")

                                    <span class="badge bg-warning text-dark">
                                        Pending
                                    </span>

                                @elseif($report->status=="resolved")

                                    <span class="badge bg-success">
                                        Resolved
                                    </span>

                                @else

                                    <span class="badge bg-primary">
                                        {{ ucfirst($report->status) }}
                                    </span>

                                @endif

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="7" class="text-center py-5">

                                <i class="bi bi-inbox fs-1 text-muted"></i>

                                <h5 class="mt-3">
                                    No Reports Yet
                                </h5>

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<style>

.card{
    border-radius:18px;
}

.table td{
    vertical-align:middle;
}

.badge{
    font-size:13px;
    padding:7px 10px;
}

</style>

@endsection