@extends('layouts.content')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="app-content-header mb-4">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h2 class="fw-bold">
                    <i class="bi bi-credit-card-2-front text-primary"></i>
                    ATM Services Center
                </h2>
                <p class="text-muted mb-0">
                    Monitor ATM machines, cash levels and network status
                </p>
            </div>

            <div class="col-md-6">
                <ol class="breadcrumb float-md-end">
                    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                    <li class="breadcrumb-item active">ATM Services</li>
                </ol>
            </div>

        </div>
    </div>

    <!-- Overview -->
    <div class="card border-0 shadow-lg mb-4">
        <div class="card-body">

            <div class="row text-center">

                <div class="col-md-3">
                    <h6 class="text-muted">Total Machines</h6>
                    <h2 class="fw-bold text-primary">{{ $total ?? 0 }}</h2>
                </div>

                <div class="col-md-3">
                    <h6 class="text-muted">Active ATM</h6>
                    <h2 class="fw-bold text-success">{{ $active ?? 0 }}</h2>
                </div>

                <div class="col-md-3">
                    <h6 class="text-muted">Offline ATM</h6>
                    <h2 class="fw-bold text-danger">{{ $offline ?? 0 }}</h2>
                </div>

                <div class="col-md-3">
                    <h6 class="text-muted">Maintenance</h6>
                    <h2 class="fw-bold text-warning">{{ $maintenance ?? 0 }}</h2>
                </div>

            </div>

        </div>
    </div>

    <!-- ATM Slider -->
    <div class="card border-0 shadow-lg mb-4">
        <div class="card-body">

            <h5 class="mb-3">ATM Status</h5>

            <div class="atm-scroll-wrapper">

                <button class="scroll-btn left" onclick="scrollATM(-1)">‹</button>

                <div class="atm-scroll" id="atmScroll">

                    @foreach($atms as $atm)

                        @php
                            $statusClass = match($atm->status) {
                                'online' => 'success',
                                'offline' => 'danger',
                                'maintenance' => 'warning',
                                default => 'secondary'
                            };
                        @endphp

                        <div class="atm-item">

                            <div class="card atm-card border-{{ $statusClass }}">

                                <div class="card-body text-center">

                                    <h5>{{ $atm->code }}</h5>
                                    <p class="text-muted">{{ $atm->branch }}</p>

                                    <span class="badge bg-{{ $statusClass }}">
                                        {{ ucfirst($atm->status) }}
                                    </span>

                                    <div class="mt-2 fw-bold">
                                        {{ number_format($atm->cash_level) }} {{ \App\Models\Setting::get('Currency', '2026') }}
                                    </div>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

                <button class="scroll-btn right" onclick="scrollATM(1)">›</button>

            </div>

        </div>
    </div>

    <!-- Cash Levels -->
    <div class="row">

        <div class="col-lg-8">

            <div class="card shadow-lg border-0 mb-4">

                <div class="card-header bg-white">
                    <h5 class="mb-0">Cash Level Monitoring</h5>
                </div>

                <div class="card-body">

                    @foreach($atms as $atm)

                        <div class="mb-4">

                            <div class="d-flex justify-content-between">
                                <span>{{ $atm->code }}</span>
                                <span>{{ $atm->cash_level }}%</span>
                            </div>

                            <div class="progress">

                                <div class="progress-bar
                                    @if($atm->cash_level > 70) bg-success
                                    @elseif($atm->cash_level > 40) bg-warning
                                    @else bg-danger
                                    @endif"
                                    style="width: {{ $atm->cash_level }}%">
                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

        <!-- Alerts -->
        <div class="col-lg-4">

            <div class="card border-0 shadow-lg">

                <div class="card-header bg-danger text-white">
                    <h5 class="mb-0">ATM Alerts</h5>
                </div>

                <div class="card-body">

                    <div class="alert alert-danger">ATM-003 Connection Lost</div>
                    <div class="alert alert-warning">ATM-008 Cash Running Low</div>
                    <div class="alert alert-warning">ATM-015 Maintenance Required</div>
                    <div class="alert alert-info">ATM-021 Software Update Available</div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- CSS -->
<style>

.atm-scroll-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.atm-scroll {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    gap: 15px;
    padding: 10px;
    width: 100%;
}

.atm-item {
    min-width: 250px;
    flex: 0 0 auto;
}

.atm-card {
    border-width: 2px;
    border-radius: 15px;
    transition: .3s;
}

.atm-card:hover {
    transform: translateY(-5px);
}

.scroll-btn {
    background: #fff;
    border: 1px solid #ddd;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-size: 22px;
    cursor: pointer;
    position: absolute;
    z-index: 10;
    box-shadow: 0 2px 6px rgba(0,0,0,.2);
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

.table {
    vertical-align: middle;
}

</style>

<!-- JS -->
<script>
function scrollATM(direction) {
    const container = document.getElementById('atmScroll');
    container.scrollBy({
        left: direction * 300,
        behavior: 'smooth'
    });
}
</script>

@endsection