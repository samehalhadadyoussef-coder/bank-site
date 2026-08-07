<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>{{ \App\Models\Setting::get('bank_name', 'Default Bank') }}</title>

    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="theme-color" content="#007bff">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- OverlayScrollbars -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css">

    <!-- ApexCharts (only if you use charts) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css">
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="/home" class="nav-link">Home</a>
                    </li>

                </ul>
                <!--end::Start Navbar Links-->

                <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto">




                    <!--begin::Fullscreen Toggle-->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                            <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                            <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                        </a>
                    </li>
                    <!--end::Fullscreen Toggle-->

                    <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ asset('./assets/img/user2-160x160.jpg') }}"
                                class="user-image rounded-circle shadow" alt="User Image" />
                            <span
                                class="d-none d-md-inline">{{ \App\Models\Setting::get('Branch_Code', 'Default Bank') }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <!--begin::User Image-->
                            <li class="user-header text-bg-primary">
                                <img src="{{ asset('./assets/img/user2-160x160.jpg') }}" class="rounded-circle shadow"
                                    alt="User Image" />
                                <p>
                                    {{ \App\Models\Setting::get('Branch_Code', 'Default Bank') }} - Web Developer
                                    <small>Member since Nov. 2023</small>
                                </p>
                            </li>
                            <!--end::User Image-->
                            <!--begin::Menu Body-->

                            <!--end::Menu Body-->
                            <!--begin::Menu Footer-->
                            <li class="user-footer">

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a href="#" class="btn btn-outline-danger float-end"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign out
                                </a>
                            </li>
                            <!--end::Menu Footer-->
                        </ul>
                    </li>
                    <!--end::User Menu Dropdown-->
                </ul>
                <!--end::End Navbar Links-->
            </div>
            <!--end::Container-->
        </nav>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <!--begin::Sidebar Brand-->
            <div class="sidebar-brand">
                <!--begin::Brand Link-->
                <a href="{{ route('home') }}" class="brand-link">
                    <!--begin::Brand Image-->
                    <img src="{{ asset('./assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                        class="brand-image opacity-75 shadow" />
                    <!--end::Brand Image-->
                    <!--begin::Brand Text-->
                    <span class="brand-text fw-light">{{ \App\Models\Setting::get('bank_name', 'Default Bank') }}</span>
                    <!--end::Brand Text-->
                </a>
                <!--end::Brand Link-->
            </div>
            <!--end::Sidebar Brand-->
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                        aria-label="Main navigation" data-accordion="false" id="navigation">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu">

                                    <!-- Dashboard -->
                                    <li class="nav-item">
                                        <a href="/home" class="nav-link active">
                                            <i class="nav-icon bi bi-speedometer2"></i>
                                            <p>{{ \App\Models\Setting::get('bank_name', 'Default Bank') }}</p>
                                        </a>
                                    </li>

                                    <!-- Customers -->
                                    <li class="nav-item">
                                        <a href="{{ route('Customers') }}" class="nav-link">
                                            <i class="nav-icon bi bi-people-fill"></i>
                                            <p>Customers</p>
                                        </a>
                                    </li>

                                    <!-- Accounts -->
                                    <li class="nav-item">
                                        <a href="{{ route('Accounts') }}" class="nav-link">
                                            <i class="nav-icon bi bi-wallet2"></i>
                                            <p>
                                                Accounts
                                                <i class="nav-arrow bi bi-chevron-right"></i>
                                            </p>
                                        </a>


                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('Managers') }}" class="nav-link">
                                       <i class="nav-icon bi bi-person-workspace"></i>
                                            <p>
                                                Managers
                                                <i class="nav-arrow bi bi-chevron-right"></i>
                                            </p>
                                        </a>


                                    </li>

                                    <!-- Transactions -->
                                    <li class="nav-item">
                                        <a href="{{ route('Transactions') }}" class="nav-link">
                                            <i class="nav-icon bi bi-arrow-left-right"></i>
                                            <p>Transactions</p>
                                        </a>
                                    </li>

                                    <!-- Loans -->
                                    <li class="nav-item">
                                        <a href="{{ route('Loans') }}" class="nav-link">
                                            <i class="nav-icon bi bi-cash-stack"></i>
                                            <p>Loans</p>
                                        </a>
                                    </li>

                                    <!-- ATM -->
                                    <li class="nav-item">
                                        <a href="{{ route('ATM') }}" class="nav-link">
                                            <i class="nav-icon bi bi-credit-card-2-front"></i>
                                            <p>ATM Services</p>
                                        </a>
                                    </li>

                                    <!-- Employees -->
                                    <li class="nav-item">
                                        <a href="{{ route('Employees') }}" class="nav-link">
                                            <i class="nav-icon bi bi-person-badge"></i>
                                            <p>
                                                Employees
                                                <i class="nav-arrow bi bi-chevron-right"></i>
                                            </p>
                                        </a>


                                    </li>

                                    <!-- Accounting -->
                                    <li class="nav-item">
                                        <a href="{{ route('accounting') }}" class="nav-link">
                                            <i class="nav-icon bi bi-bar-chart-line"></i>
                                            <p>
                                                Accounting
                                                <i class="nav-arrow bi bi-chevron-right"></i>
                                            </p>
                                        </a>


                                    </li>

                                    <!-- Reports -->
                                    <li class="nav-item">
                                        <a href="{{ route('reports') }}" class="nav-link">
                                            <i class="nav-icon bi bi-file-earmark-text"></i>
                                            <p>Reports</p>
                                        </a>
                                    </li>

                                    <!-- Settings -->
                                    <li class="nav-item">
                                        <a href="{{ route('settings') }}" class="nav-link">
                                            <i class="nav-icon bi bi-gear"></i>
                                            <p>Settings</p>
                                        </a>
                                    </li>

                                    <!-- Logout -->
                                    <li class="nav-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit"
                                                class="nav-link text-danger border-0 bg-transparent w-100 text-start">
                                                <i class="nav-icon bi bi-box-arrow-right"></i>
                                                <p>Logout</p>
                                            </button>
                                        </form>
                                    </li>

                                </ul>
                                <!--end::Sidebar Menu-->
                </nav>
            </div>
            <!--end::Sidebar Wrapper-->
        </aside>
        <!--end::Sidebar-->

        @yield('content')

        <!--begin::Footer-->
        <footer class="app-footer">
            <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline">Anything you want</div>
            <!--end::To the end-->
            <!--begin::Copyright-->
            <strong>
                Copyright &copy; {{ \App\Models\Setting::get('financial_year', '2026') }}&nbsp;
                <a href="https://adminlte.io"
                    class="text-decoration-none">{{ \App\Models\Setting::get('bank_name', 'Default Bank') }}</a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer>
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
        src="{{ asset('https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js') }}"
        crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js') }}"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('./js/adminlte.js') }}"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

            // Disable OverlayScrollbars on mobile devices to prevent touch interference
            const isMobile = window.innerWidth <= 992;

            if (
                sidebarWrapper &&
                OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
                !isMobile
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
    <!--end::OverlayScrollbars Configure-->

    <!-- OPTIONAL SCRIPTS -->

    <!-- sortablejs -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js') }}" crossorigin="anonymous">
    </script>

    <!-- sortablejs -->
    <script>
        new Sortable(document.querySelector('.connectedSortable'), {
            group: 'shared',
            handle: '.card-header',
        });

        const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
        cardHeaders.forEach((cardHeader) => {
            cardHeader.style.cursor = 'move';
        });
    </script>

    <!-- apexcharts -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js') }}"
        integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>

    <!-- ChartJS -->
    <script>
        // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
        // IT'S ALL JUST JUNK FOR DEMO
        // ++++++++++++++++++++++++++++++++++++++++++

        const sales_chart_options = {
            series: [{
                    name: 'Digital Goods',
                    data: [28, 48, 40, 19, 86, 27, 90],
                },
                {
                    name: 'Electronics',
                    data: [65, 59, 80, 81, 56, 55, 40],
                },
            ],
            chart: {
                height: 300,
                type: 'area',
                toolbar: {
                    show: false,
                },
            },
            legend: {
                show: false,
            },
            colors: ['#0d6efd', '#20c997'],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: 'smooth',
            },
            xaxis: {
                type: 'datetime',
                categories: [
                    '2023-01-01',
                    '2023-02-01',
                    '2023-03-01',
                    '2023-04-01',
                    '2023-05-01',
                    '2023-06-01',
                    '2023-07-01',
                ],
            },
            tooltip: {
                x: {
                    format: 'MMMM yyyy',
                },
            },
        };

        const sales_chart = new ApexCharts(
            document.querySelector('#revenue-chart'),
            sales_chart_options,
        );
        sales_chart.render();
    </script>

    <!-- jsvectormap -->
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
        integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
        integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script>

    <!-- jsvectormap -->
    <script>
        // World map by jsVectorMap
        new jsVectorMap({
            selector: '#world-map',
            map: 'world',
        });

        // Sparkline charts
        const option_sparkline1 = {
            series: [{
                data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
            }, ],
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'straight',
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ['#DCE6EC'],
        };

        const sparkline1 = new ApexCharts(document.querySelector('#sparkline-1'), option_sparkline1);
        sparkline1.render();

        const option_sparkline2 = {
            series: [{
                data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
            }, ],
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'straight',
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ['#DCE6EC'],
        };

        const sparkline2 = new ApexCharts(document.querySelector('#sparkline-2'), option_sparkline2);
        sparkline2.render();

        const option_sparkline3 = {
            series: [{
                data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
            }, ],
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'straight',
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ['#DCE6EC'],
        };

        const sparkline3 = new ApexCharts(document.querySelector('#sparkline-3'), option_sparkline3);
        sparkline3.render();
    </script>
    <!--end::Script-->
</body>
<!--end::Body-->

</html>
