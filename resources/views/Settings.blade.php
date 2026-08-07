@extends('layouts.content')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="app-content-header mb-4">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h2 class="fw-bold">
                    <i class="bi bi-gear-fill text-primary"></i>
                    System Settings
                </h2>
                <p class="text-muted mb-0">
                    Configure and manage bank system settings
                </p>
            </div>

            <div class="col-md-6">
                <ol class="breadcrumb float-md-end">
                    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </div>

        </div>
    </div>

    <form action="/settings/update" method="POST">
        @csrf

        <div class="row">

            <!-- LEFT SIDE -->
            <div class="col-lg-8">

                <!-- Security Settings -->
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-header bg-danger text-white">
                        <h5 class="mb-0">Security Settings</h5>
                    </div>

                    <div class="card-body">

                        <div class="setting-item">
                            <span>Two Factor Authentication</span>
                            <input type="checkbox" name="two_factor"
                            {{ \App\Models\Setting::get('two_factor') ? 'checked' : '' }}>
                        </div>

                        <div class="setting-item">
                            <span>Login Notifications</span>
                            <input type="checkbox" name="login_notifications"
                            {{ \App\Models\Setting::get('login_notifications') ? 'checked' : '' }}>
                        </div>

                        <div class="setting-item">
                            <span>Transaction Approval Required</span>
                            <input type="checkbox" name="transaction_approval"
                            {{ \App\Models\Setting::get('transaction_approval') ? 'checked' : '' }}>
                        </div>

                        <div class="setting-item">
                            <span>Session Timeout</span>
                            <strong>{{ \App\Models\Setting::get('session_timeout', '15') }} Minutes</strong>
                        </div>

                    </div>
                </div>

                <!-- System Configuration -->
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">System Configuration</h5>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Bank Name</label>
                                <input type="text" name="bank_name" class="form-control"
                                    value="{{ \App\Models\Setting::get('bank_name', 'ATA Bank') }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Currency</label>
                                <select name="currency" class="form-select">

                                    @php
                                        $currency = \App\Models\Setting::get('currency', 'USD');
                                    @endphp

                                    <option value="USD" {{ $currency == 'USD' ? 'selected' : '' }}>USD</option>
                                    <option value="EUR" {{ $currency == 'EUR' ? 'selected' : '' }}>EUR</option>
                                    <option value="EGP" {{ $currency == 'EGP' ? 'selected' : '' }}>EGP</option>

                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Branch Code</label>
                                <input type="text" name="branch_code" class="form-control"
                                    value="{{ \App\Models\Setting::get('branch_code', 'ATA001') }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Financial Year</label>
                                <input type="text" name="financial_year" class="form-control"
                                    value="{{ \App\Models\Setting::get('financial_year', '2026') }}">
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Notifications -->
                <div class="card border-0 shadow-sm">

                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Notification Center</h5>
                    </div>

                    <div class="card-body">

                        <div class="setting-item">
                            <span>Email Notifications</span>
                            <input type="checkbox" name="email_notifications"
                            {{ \App\Models\Setting::get('email_notifications') ? 'checked' : '' }}>
                        </div>

                        <div class="setting-item">
                            <span>SMS Alerts</span>
                            <input type="checkbox" name="sms_alerts"
                            {{ \App\Models\Setting::get('sms_alerts') ? 'checked' : '' }}>
                        </div>

                        <div class="setting-item">
                            <span>Transaction Alerts</span>
                            <input type="checkbox" name="transaction_alerts"
                            {{ \App\Models\Setting::get('transaction_alerts') ? 'checked' : '' }}>
                        </div>

                        <div class="setting-item">
                            <span>Audit Notifications</span>
                            <input type="checkbox" name="audit_notifications"
                            {{ \App\Models\Setting::get('audit_notifications') ? 'checked' : '' }}>
                        </div>

                    </div>

                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-4">

                <!-- Roles -->
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">User Roles</h5>
                    </div>

                    <div class="card-body">

                        <span class="badge bg-danger d-block mb-2">Administrator</span>
                        <span class="badge bg-primary d-block mb-2">Branch Manager</span>
                        <span class="badge bg-success d-block mb-2">Accountant</span>
                        <span class="badge bg-warning text-dark d-block mb-2">Customer Service</span>
                        <span class="badge bg-secondary d-block">Auditor</span>

                    </div>

                </div>

                <!-- Backup -->
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">Backup & Recovery</h5>
                    </div>

                    <div class="card-body text-center">

                        <h6>Last Backup</h6>

                        <p class="text-muted">
                            {{ \App\Models\Setting::get('last_backup_date', '04 Jun 2026') }} <br>
                            {{ \App\Models\Setting::get('last_backup_time', '11:30 PM') }}
                        </p>

                        <button type="button" class="btn btn-success w-100 mb-2">
                            Create Backup
                        </button>

                        <button type="button" class="btn btn-outline-danger w-100">
                            Restore Data
                        </button>

                    </div>

                </div>

                <!-- System Status -->
                <div class="card border-0 shadow-sm">

                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">System Status</h5>
                    </div>

                    <div class="card-body">

                        <div class="d-flex justify-content-between mb-3">
                            <span>Database</span>
                            <span class="badge bg-success">Online</span>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>API Server</span>
                            <span class="badge bg-success">Running</span>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span>Backup Service</span>
                            <span class="badge bg-primary">Active</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- SAVE BUTTON -->
        <div class="mt-4">
            <button class="btn btn-primary w-100">
                Save Settings
            </button>
        </div>

    </form>

</div>

<!-- STYLE -->
<style>

.card {
    border-radius: 18px;
}

.setting-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 14px 0;
    border-bottom: 1px solid #eee;
}

.setting-item:last-child {
    border-bottom: none;
}

.badge {
    padding: 10px;
    font-size: 14px;
}

</style>

@endsection