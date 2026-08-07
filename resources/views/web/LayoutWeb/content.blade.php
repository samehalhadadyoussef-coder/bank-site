<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ \App\Models\Setting::get('bank_name', 'Default Bank') }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('asset/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('asset/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="{{ asset('asset/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Feb 22 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
.bank-card{
    background:#fff;
    border-radius:15px;
    padding:25px 15px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
    transition:.3s;
}

.bank-card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 35px rgba(0,0,0,.15);
}

.bank-logo{
    width:70px;
    height:70px;
    margin:auto;
    border-radius:50%;
    background:#37517e;
    color:#fff;
    font-size:22px;
    font-weight:700;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-bottom:12px;
}

.bank-card small{
    color:#666;
    font-size:13px;
}
</style>
<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.webp" alt=""> -->
                <h1 class="sitename">{{ \App\Models\Setting::get('bank_name', 'Default Bank') }}</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#pricing">Pricing</a></li>

                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="/login">Login dashboard</a>

        </div>
    </header>


    @yield('content')





   <!-- Footer -->
<footer id="footer" class="footer">

    <hr>

    <div class="container footer-top">

        <div class="row gy-4">

            <!-- About -->
            <div class="col-lg-4 col-md-6 footer-about">

                <a href="{{ url('/') }}" class="d-flex align-items-center">
                    <span class="sitename">{{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank</span>
                </a>

                <div class="footer-contact pt-3">

                    <p>{{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank Headquarters</p>
                    <p>Smart Village, Giza, Egypt</p>

                    <p class="mt-3">
                        <strong>Hotline:</strong>
                        <span>19666</span>
                    </p>

                    <p>
                        <strong>Email:</strong>
                        <span>support@{{ \App\Models\Setting::get('bank_name', 'Default Bank') }}bank.com</span>
                    </p>

                    <p>
                        <strong>Working Hours:</strong>
                        <span>Sun - Thu | 8:30 AM - 4:00 PM</span>
                    </p>

                </div>

            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-3 footer-links">

                <h4>Quick Links</h4>

                <ul>

                    <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#about">About Us</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#">FAQs</a></li>

                </ul>

            </div>

            <!-- Banking Services -->
            <div class="col-lg-2 col-md-3 footer-links">

                <h4>Banking Services</h4>

                <ul>

                    <li><i class="bi bi-chevron-right"></i> <a href="#">Personal Banking</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#">Business Banking</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#">Loans</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#">Credit Cards</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#">Internet Banking</a></li>

                </ul>

            </div>

            <!-- Legal -->
            <div class="col-lg-2 col-md-3 footer-links">

                <h4>Legal</h4>

                <ul>

                    <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#">Terms & Conditions</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#">Customer Rights</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#">Security Tips</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#">Complaints</a></li>

                </ul>

            </div>

            <!-- Follow -->
            <div class="col-lg-2 col-md-12">

                <h4>Follow Us</h4>

                <p>

                    Stay connected with {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank and receive our latest
                    banking news, offers, and financial updates.

                </p>

                <div class="social-links d-flex">

                    <a href="#"><i class="bi bi-facebook"></i></a>

                    <a href="#"><i class="bi bi-twitter-x"></i></a>

                    <a href="#"><i class="bi bi-instagram"></i></a>

                    <a href="#"><i class="bi bi-linkedin"></i></a>

                    <a href="#"><i class="bi bi-youtube"></i></a>

                </div>

            </div>

        </div>

    </div>

    <hr>

    <!-- Bottom Footer -->
    <div class="container copyright text-center">

        <p>

            © 2026
            <strong class="px-1">{{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank</strong>
            All Rights Reserved.

        </p>

        <p class="small text-muted">

            {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank is committed to protecting customer information and
            providing secure financial services. Banking products and services
            are subject to terms, conditions, and regulatory approval.

        </p>

        <p class="small text-muted">

            Licensed and regulated in accordance with the applicable banking
            regulations in the Arab Republic of Egypt.

        </p>

    </div>

</footer>

<!-- Scroll Top -->
<a href="#"
    id="scroll-top"
    class="scroll-top d-flex align-items-center justify-content-center">

    <i class="bi bi-arrow-up-short"></i>

</a>
    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('asset/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('asset/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('asset/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('asset/js/main.js') }}"></script>
    <script>
        fetch('/api/banks')
            .then(res => res.json())
            .then(banks => {

                const slider = document.getElementById('banks-slider');

                banks.forEach(bank => {

                    slider.innerHTML += `
                <div class="swiper-slide">
                    <div class="bank-card">
                        <div class="bank-logo">
                            ${bank.short}
                        </div>
                        <small>${bank.name}</small>
                    </div>
                </div>
            `;
                });

            });
    </script>
</body>

</html>
