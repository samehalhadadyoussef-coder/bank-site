 @extends('web.LayoutWeb.content')
 @section('content')
     <main class="main">

         <!-- Hero Section -->
         <section id="hero" class="hero section dark-background">

             <div class="container">
                 <div class="row gy-4 align-items-center">

                     <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">

                         <h1>Welcome to <span class="text-info">{{ \App\Models\Setting::get('bank_name', 'Default Bank') }}
                                 Bank</span></h1>

                         <p>
                             Secure, Fast, and Reliable Banking Solutions for Individuals and Businesses.
                             Manage your accounts, transfer money, apply for loans, and access our digital
                             banking services anytime, anywhere.
                         </p>

                         <div class="d-flex gap-3">

                             <a href="{{ route('login') }}" class="btn-get-started">
                                 <i class="bi bi-box-arrow-in-right"></i>
                                 Login
                             </a>

                             <a href="#services" class="btn-watch-video d-flex align-items-center">
                                 <i class="bi bi-bank2"></i>
                                 <span>Explore Services</span>
                             </a>

                         </div>

                         <div class="row mt-5">

                             <div class="col-4">
                                 <h3 class="text-white">200K+</h3>
                                 <small>Customers</small>
                             </div>

                             <div class="col-4">
                                 <h3 class="text-white">120+</h3>
                                 <small>Branches</small>
                             </div>

                             <div class="col-4">
                                 <h3 class="text-white">24/7</h3>
                                 <small>Support</small>
                             </div>

                         </div>

                     </div>

                     <div class="col-lg-6 order-1 order-lg-2 hero-img text-center" data-aos="zoom-in">

                         <img src="{{ asset('asset/img/hero-img.png') }}" class="img-fluid animated" alt="ATA Bank">

                     </div>

                 </div>
             </div>

         </section>
         <!-- Clients Section -->
         <section id="clients" class="clients section light-background">

             <div class="container" data-aos="zoom-in">

                 <div class="swiper init-swiper">
                     <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                     <div class="swiper-wrapper align-items-center" id="banks-slider"></div>
                 </div>

             </div>

         </section>
         <!-- /Clients Section -->

         <!-- About Section -->
         <section id="about" class="about section">

             <div class="container section-title" data-aos="fade-up">
                 <h2>About {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank</h2>
                 <p>Trusted Banking Solutions Since 1998</p>
             </div>

             <div class="container">

                 <div class="row gy-4 align-items-center">

                     <div class="col-lg-6" data-aos="fade-right">

                         <h3 class="fw-bold mb-4">
                             Building Trust Through Modern Banking
                         </h3>

                         <p>
                             {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank provides secure, innovative,
                             and customer-focused financial
                             services for individuals and businesses. Our mission is to make banking
                             faster, safer, and more accessible.
                         </p>

                         <ul class="list-unstyled mt-4">

                             <li class="mb-3">
                                 <i class="bi bi-check-circle-fill text-primary"></i>
                                 Secure Online & Mobile Banking
                             </li>

                             <li class="mb-3">
                                 <i class="bi bi-check-circle-fill text-primary"></i>
                                 Personal & Business Accounts
                             </li>

                             <li class="mb-3">
                                 <i class="bi bi-check-circle-fill text-primary"></i>
                                 Loans, Credit Cards & Investment Services
                             </li>

                             <li>
                                 <i class="bi bi-check-circle-fill text-primary"></i>
                                 24/7 Customer Support
                             </li>

                         </ul>

                     </div>

                     <div class="col-lg-6 text-center" data-aos="fade-left">

                         <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?w=900"
                             class="img-fluid rounded shadow" alt="Digital Banking">

                     </div>

                     <div class="text-center mt-5">

                         <button class="btn btn-primary btn-lg rounded-pill px-5" data-bs-toggle="modal"
                             data-bs-target="#aboutModal">

                             Read More
                             <i class="bi bi-arrow-right ms-2"></i>

                         </button>

                     </div>

                 </div>

         </section>
         <div class="modal fade" id="aboutModal" tabindex="-1" aria-hidden="true">

             <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">

                 <div class="modal-content rounded-4 shadow-lg">

                     <div class="modal-header bg-primary text-white">

                         <h4 class="modal-title">
                             <i class="bi bi-bank2 me-2"></i>
                             About{{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank
                         </h4>

                         <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>

                     </div>

                     <div class="modal-body">

                         <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=1400"
                             class="img-fluid rounded mb-4">

                         <h3>Welcome to {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank</h3>

                         <p>
                             {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank is a leading financial
                             institution committed to providing secure,
                             innovative, and customer-focused banking solutions. We empower individuals,
                             families, and businesses through modern financial services built on trust,
                             transparency, and advanced technology.
                         </p>

                         <hr>

                         <h4>Our Mission</h4>

                         <p>
                             To deliver secure, accessible, and innovative banking solutions that improve
                             the financial well-being of our customers while maintaining the highest
                             standards of integrity and professionalism.
                         </p>

                         <hr>

                         <h4>Our Vision</h4>

                         <p>
                             To become one of the most trusted digital banking institutions by providing
                             world-class financial services powered by technology and customer excellence.
                         </p>

                         <hr>

                         <h4>Our Services</h4>

                         <ul>
                             <li>Personal Banking Accounts</li>
                             <li>Business & Corporate Banking</li>
                             <li>Credit Cards</li>
                             <li>Mortgage & Personal Loans</li>
                             <li>Investment Solutions</li>
                             <li>Internet Banking</li>
                             <li>Mobile Banking</li>
                             <li>24/7 ATM Services</li>
                         </ul>

                         <hr>

                         <h4>Why Choose {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank?</h4>

                         <div class="row text-center">

                             <div class="col-md-3 mb-4">
                                 <i class="bi bi-shield-lock fs-1 text-primary"></i>
                                 <h5 class="mt-3">100% Secure</h5>
                                 <p>Advanced encryption and fraud protection systems.</p>
                             </div>

                             <div class="col-md-3 mb-4">
                                 <i class="bi bi-phone fs-1 text-primary"></i>
                                 <h5 class="mt-3">Digital Banking</h5>
                                 <p>Manage your finances anytime using our mobile application.</p>
                             </div>

                             <div class="col-md-3 mb-4">
                                 <i class="bi bi-bank fs-1 text-primary"></i>
                                 <h5 class="mt-3">120+ Branches</h5>
                                 <p>Serving customers across Egypt with modern branches.</p>
                             </div>

                             <div class="col-md-3 mb-4">
                                 <i class="bi bi-headset fs-1 text-primary"></i>
                                 <h5 class="mt-3">24/7 Support</h5>
                                 <p>Dedicated customer service around the clock.</p>
                             </div>

                         </div>

                         <hr>

                         <h4>Corporate Responsibility</h4>

                         <p>
                             {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank supports education,
                             entrepreneurship, sustainability,
                             environmental initiatives, and financial inclusion through various
                             community development programs across Egypt.
                         </p>

                         <hr>

                         <h4>Customer Rights</h4>

                         <ul>
                             <li>Protection of customer privacy and personal information.</li>
                             <li>Transparent banking products and pricing.</li>
                             <li>Fast complaint handling and customer support.</li>
                             <li>Equal access to financial services.</li>
                             <li>Compliance with banking regulations.</li>
                         </ul>

                         <hr>

                         <h4>Legal Disclaimer</h4>

                         <p>
                             {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank operates in compliance with
                             the applicable banking laws and
                             regulatory requirements. Banking products and services are subject to
                             eligibility criteria, terms, conditions, and applicable fees. Customers
                             are advised to review all agreements carefully before using any banking
                             service.
                         </p>

                         <hr>

                         <h4>Privacy Policy</h4>

                         <p>
                             We respect your privacy. Customer information is protected using
                             internationally recognized security standards. Personal data is processed
                             only for legitimate banking purposes and is never shared without legal
                             authorization or customer consent where applicable.
                         </p>

                         <hr>

                         <h4>Copyright</h4>

                         <p>
                             © {{ \App\Models\Setting::get('bank_brand', 'Default Bank') }}
                             {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank. All Rights Reserved.<br>
                             All trademarks, logos, designs, and content displayed on this website
                             are the property of {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank and may
                             not be copied, reproduced,
                             distributed, or used without prior written permission.
                         </p>

                     </div>

                     <div class="modal-footer">

                         <button class="btn btn-primary" data-bs-dismiss="modal">
                             Close
                         </button>

                     </div>

                 </div>

             </div>

         </div>
         <!--end About Section -->

         <!-- Why Choose ATA Bank -->
         <section id="why-us" class="section why-us light-background">

             <div class="container-fluid">

                 <div class="row gy-4 align-items-center">

                     <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                         <div class="content px-xl-5" data-aos="fade-up">
                             <h3>
                                 Why Choose <strong>{{ \App\Models\Setting::get('bank_name', 'Default Bank') }}
                                     Bank?</strong>
                             </h3>

                             <p>
                                 At {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank, we combine
                                 cutting-edge technology with trusted banking
                                 expertise to provide secure, convenient, and customer-focused financial
                                 services for individuals and businesses.
                             </p>
                         </div>

                         <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="150">

                             <div class="faq-item faq-active">

                                 <h3>
                                     <span>01</span>
                                     Is my money secure with {{ \App\Models\Setting::get('bank_name', 'Default Bank') }}
                                     Bank?
                                 </h3>

                                 <div class="faq-content">

                                     <p>
                                         Yes. We use advanced encryption technologies, fraud detection
                                         systems, and multi-factor authentication to ensure that your
                                         accounts and personal information remain protected.
                                     </p>

                                 </div>

                                 <i class="faq-toggle bi bi-chevron-right"></i>

                             </div>

                             <div class="faq-item">

                                 <h3>
                                     <span>02</span>
                                     What banking services do you provide?
                                 </h3>

                                 <div class="faq-content">

                                     <p>
                                         We offer savings and current accounts, personal and business
                                         banking, loans, credit cards, internet banking, mobile banking,
                                         investment services, and ATM services across Egypt.
                                     </p>

                                 </div>

                                 <i class="faq-toggle bi bi-chevron-right"></i>

                             </div>

                             <div class="faq-item">

                                 <h3>
                                     <span>03</span>
                                     Can I manage my account online?
                                 </h3>

                                 <div class="faq-content">

                                     <p>
                                         Absolutely. Our secure online banking platform allows you to
                                         transfer funds, pay bills, monitor transactions, manage cards,
                                         and access banking services anytime and anywhere.
                                     </p>

                                 </div>

                                 <i class="faq-toggle bi bi-chevron-right"></i>

                             </div>

                             <div class="faq-item">

                                 <h3>
                                     <span>04</span>
                                     How can I contact customer support?
                                 </h3>

                                 <div class="faq-content">

                                     <p>
                                         Our customer support team is available 24/7 through our hotline,
                                         live chat, email support, and all ATA Bank branches nationwide.
                                     </p>

                                 </div>

                                 <i class="faq-toggle bi bi-chevron-right"></i>

                             </div>

                             <div class="faq-item">

                                 <h3>
                                     <span>05</span>
                                     Why should I choose {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank?
                                 </h3>

                                 <div class="faq-content">

                                     <p>
                                         {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank combines
                                         security, innovation, competitive financial
                                         products, fast digital services, and personalized customer care
                                         to deliver an exceptional banking experience.
                                     </p>

                                 </div>

                                 <i class="faq-toggle bi bi-chevron-right"></i>

                             </div>

                         </div>

                     </div>

                     <div class="col-lg-5 order-1 order-lg-2 why-us-img">

                         <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=900"
                             class="img-fluid rounded-4 shadow"
                             alt="{{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank" data-aos="zoom-in">

                     </div>

                 </div>

             </div>

         </section>

         <!-- Banking Performance Section -->
         <section id="skills" class="skills section">

             <div class="container" data-aos="fade-up">

                 <div class="row align-items-center">

                     <div class="col-lg-6">
                         <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=900"
                             class="img-fluid rounded-4 shadow" alt="Mobile Banking">
                     </div>

                     <div class="col-lg-6 pt-4 pt-lg-0 content">

                         <h3>Trusted Banking Performance</h3>

                         <p class="fst-italic">
                             {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank is committed to delivering
                             secure, reliable, and innovative financial
                             services. Our continuous investment in technology and customer satisfaction
                             helps us maintain the highest banking standards.
                         </p>

                         <div class="skills-content skills-animation">

                             <div class="progress">
                                 <span class="skill">
                                     <span>Customer Satisfaction</span>
                                     <i class="val">98%</i>
                                 </span>

                                 <div class="progress-bar-wrap">
                                     <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0"
                                         aria-valuemax="100">
                                     </div>
                                 </div>
                             </div>

                             <div class="progress">
                                 <span class="skill">
                                     <span>Secure Transactions</span>
                                     <i class="val">99.9%</i>
                                 </span>

                                 <div class="progress-bar-wrap">
                                     <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0"
                                         aria-valuemax="100">
                                     </div>
                                 </div>
                             </div>

                             <div class="progress">
                                 <span class="skill">
                                     <span>Digital Banking Services</span>
                                     <i class="val">95%</i>
                                 </span>

                                 <div class="progress-bar-wrap">
                                     <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                         aria-valuemax="100">
                                     </div>
                                 </div>
                             </div>

                             <div class="progress">
                                 <span class="skill">
                                     <span>Loan Approval Efficiency</span>
                                     <i class="val">92%</i>
                                 </span>

                                 <div class="progress-bar-wrap">
                                     <div class="progress-bar" role="progressbar" aria-valuenow="92" aria-valuemin="0"
                                         aria-valuemax="100">
                                     </div>
                                 </div>
                             </div>

                             <div class="progress">
                                 <span class="skill">
                                     <span>ATM Network Availability</span>
                                     <i class="val">99%</i>
                                 </span>

                                 <div class="progress-bar-wrap">
                                     <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0"
                                         aria-valuemax="100">
                                     </div>
                                 </div>
                             </div>

                         </div>

                     </div>

                 </div>

             </div>

         </section>
         <!--end Banking Performance Section -->


         <!-- Services Section -->
         <section id="services" class="services section light-background">

             <div class="container section-title" data-aos="fade-up">
                 <h2>Our Banking Services</h2>
                 <p>
                     Discover secure and innovative financial solutions designed for individuals,
                     businesses, and corporate clients.
                 </p>
             </div>

             <div class="container">

                 <div class="row gy-4">

                     <!-- Service 1 -->
                     <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                         <div class="service-item position-relative text-center">

                             <div class="icon">
                                 <i class="bi bi-bank2"></i>
                             </div>

                             <h4>Bank Accounts</h4>

                             <p>
                                 Open Savings, Current, Business, and Student Accounts with flexible banking solutions.
                             </p>

                         </div>
                     </div>

                     <!-- Service 2 -->
                     <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                         <div class="service-item position-relative text-center">

                             <div class="icon">
                                 <i class="bi bi-credit-card-2-front"></i>
                             </div>

                             <h4>Cards</h4>

                             <p>
                                 Debit Cards, Credit Cards, and Prepaid Cards with secure online payments.
                             </p>

                         </div>
                     </div>

                     <!-- Service 3 -->
                     <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                         <div class="service-item position-relative text-center">

                             <div class="icon">
                                 <i class="bi bi-cash-stack"></i>
                             </div>

                             <h4>Loans</h4>

                             <p>
                                 Personal Loans, Car Loans, Mortgage Financing, and Business Loans with competitive rates.
                             </p>

                         </div>
                     </div>

                     <!-- Service 4 -->
                     <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                         <div class="service-item position-relative text-center">

                             <div class="icon">
                                 <i class="bi bi-phone"></i>
                             </div>

                             <h4>Digital Banking</h4>

                             <p>
                                 Manage your accounts, transfer money, and pay bills anytime using our secure mobile app.
                             </p>

                         </div>
                     </div>

                     <!-- Service 5 -->
                     <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                         <div class="service-item position-relative text-center">

                             <div class="icon">
                                 <i class="bi bi-arrow-left-right"></i>
                             </div>

                             <h4>Money Transfers</h4>

                             <p>
                                 Send and receive local and international transfers quickly and securely.
                             </p>

                         </div>
                     </div>

                     <!-- Service 6 -->
                     <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                         <div class="service-item position-relative text-center">

                             <div class="icon">
                                 <i class="bi bi-piggy-bank"></i>
                             </div>

                             <h4>Savings & Investments</h4>

                             <p>
                                 Grow your money with savings accounts, fixed deposits, and investment plans.
                             </p>

                         </div>
                     </div>

                     <!-- Service 7 -->
                     <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                         <div class="service-item position-relative text-center">

                             <div class="icon">
                                 <i class="bi bi-building"></i>
                             </div>

                             <h4>Corporate Banking</h4>

                             <p>
                                 Comprehensive banking solutions for SMEs and large enterprises.
                             </p>

                         </div>
                     </div>

                     <!-- Service 8 -->
                     <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="800">
                         <div class="service-item position-relative text-center">

                             <div class="icon">
                                 <i class="bi bi-headset"></i>
                             </div>

                             <h4>24/7 Support</h4>

                             <p>
                                 Our dedicated customer support team is available around the clock to assist you.
                             </p>

                         </div>
                     </div>

                 </div>

             </div>

         </section>

         <!-- Banking Process Section -->
         <section id="work-process" class="work-process section">

             <!-- Section Title -->
             <div class="container section-title" data-aos="fade-up">
                 <h2>Start Banking in 3 Easy Steps</h2>
                 <p>Opening your ATA Bank account is simple, secure, and takes only a few minutes.</p>
             </div>

             <div class="container">

                 <div class="row gy-5">

                     <!-- Step 1 -->
                     <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                         <div class="steps-item">

                             <div class="steps-image">
                                 <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=700"
                                     class="img-fluid rounded" alt="Register">
                             </div>

                             <div class="steps-content">

                                 <div class="steps-number">01</div>

                                 <h3>Create Your Account</h3>

                                 <p>
                                     Register online using your National ID, email address, and mobile number.
                                 </p>

                                 <div class="steps-features">

                                     <div class="feature-item">
                                         <i class="bi bi-check-circle"></i>
                                         <span>Quick Registration</span>
                                     </div>

                                     <div class="feature-item">
                                         <i class="bi bi-check-circle"></i>
                                         <span>Identity Verification</span>
                                     </div>

                                     <div class="feature-item">
                                         <i class="bi bi-check-circle"></i>
                                         <span>Secure Authentication</span>
                                     </div>

                                 </div>

                             </div>

                         </div>

                     </div>

                     <!-- Step 2 -->
                     <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">

                         <div class="steps-item">

                             <div class="steps-image">
                                 <img src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=700"
                                     class="img-fluid rounded" alt="Choose Services">
                             </div>

                             <div class="steps-content">

                                 <div class="steps-number">02</div>

                                 <h3>Choose Banking Services</h3>

                                 <p>
                                     Select the banking products that fit your needs, including accounts,
                                     cards, loans, and digital banking.
                                 </p>

                                 <div class="steps-features">

                                     <div class="feature-item">
                                         <i class="bi bi-check-circle"></i>
                                         <span>Savings & Current Accounts</span>
                                     </div>

                                     <div class="feature-item">
                                         <i class="bi bi-check-circle"></i>
                                         <span>Credit & Debit Cards</span>
                                     </div>

                                     <div class="feature-item">
                                         <i class="bi bi-check-circle"></i>
                                         <span>Loan Services</span>
                                     </div>

                                 </div>

                             </div>

                         </div>

                     </div>

                     <!-- Step 3 -->
                     <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">

                         <div class="steps-item">

                             <div class="steps-image">
                                 <img src="https://images.unsplash.com/photo-1556742393-d75f468bfcb0?w=700"
                                     class="img-fluid rounded" alt="Online Banking">
                             </div>

                             <div class="steps-content">

                                 <div class="steps-number">03</div>

                                 <h3>Enjoy Digital Banking</h3>

                                 <p>
                                     Access your account 24/7, transfer money, pay bills, and manage
                                     your finances securely from anywhere.
                                 </p>

                                 <div class="steps-features">

                                     <div class="feature-item">
                                         <i class="bi bi-check-circle"></i>
                                         <span>Online Banking</span>
                                     </div>

                                     <div class="feature-item">
                                         <i class="bi bi-check-circle"></i>
                                         <span>Mobile Banking App</span>
                                     </div>

                                     <div class="feature-item">
                                         <i class="bi bi-check-circle"></i>
                                         <span>24/7 Customer Support</span>
                                     </div>

                                 </div>

                             </div>

                         </div>

                     </div>

                 </div>

             </div>

         </section>



         <!-- Call To Action Section -->
         <section id="call-to-action" class="call-to-action section dark-background">

             <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4?w=1600" alt="ATA Bank">

             <div class="container">

                 <div class="row align-items-center" data-aos="zoom-in">

                     <div class="col-xl-8">

                         <h2 class="text-white fw-bold mb-3">
                             Your Financial Future Starts with {{ \App\Models\Setting::get('bank_name', 'Default Bank') }}
                             Bank
                         </h2>

                         <p class="text-white">
                             Join thousands of satisfied customers and enjoy secure banking,
                             instant money transfers, digital banking services, competitive
                             loans, and personalized financial solutions tailored to your needs.
                         </p>

                     </div>

                     <div class="col-xl-4 text-center text-xl-end">

                         <a href="#" class="cta-btn me-3">
                             <i class="bi bi-person-plus-fill"></i>
                             Open an Account
                         </a>

                         <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2">
                             <i class="bi bi-box-arrow-in-right"></i>
                             Login
                         </a>

                     </div>

                 </div>

             </div>

         </section>

         <!-- Team Section -->
         <!-- Team Section -->
         <section id="team" class="team section light-background">

             <!-- Section Title -->
             <div class="container section-title" data-aos="fade-up">
                 <h2>Executive Leadership</h2>
                 <p>
                     Meet the experienced leadership team driving innovation, security, and
                     customer excellence at {{ \App\Models\Setting::get('bank_name', 'Default Bank') }} Bank.
                 </p>
             </div>

             <div class="container">

                 <div class="row gy-4">

                        @foreach ($managers as $manager)
                     <!-- Member 1 -->
                     <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                         <div class="team-member d-flex align-items-start">

                             <div class="pic">
                                  @if ($manager->image)
                                            <img src="{{ asset('uploads/managers/' . $manager->image) }}"
                                                class="rounded-circle mb-3" width="90" height="90"
                                                style="object-fit:cover;">
                                        @else
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($manager->name) }}&background=0D6EFD&color=fff"
                                                class="rounded-circle mb-3" width="90" height="90">
                                        @endif
                                    
                             </div>

                             <div class="member-info">

                                 <h4>{{ $manager->name }}</h4>

                                 <span>{{ $manager->position }}</span>

                                 <p>
                                        {{ $manager->department }}
                                 </p>

                                 <div class="social">
                                     <a href="#"><i class="bi bi-linkedin"></i></a>
                                     <a href="#"><i class="bi bi-twitter-x"></i></a>
                                     <a href="#"><i class="bi bi-envelope-fill"></i></a>
                                 </div>

                             </div>

                         </div>

                     </div>
                        @endforeach


                 </div>

             </div>

         </section>

         <!-- Testimonials Section -->
         <section id="testimonials" class="testimonials section">

             <!-- Section Title -->
             <div class="container section-title" data-aos="fade-up">
                 <h2>What Our Customers Say</h2>
                 <p>
                     Thousands of customers trust ATA Bank for secure, reliable, and innovative banking services.
                 </p>
             </div>

             <div class="container" data-aos="fade-up" data-aos-delay="100">

                 <div class="swiper init-swiper">

                     <script type="application/json" class="swiper-config">
{
  "loop": true,
  "speed": 700,
  "autoplay": {
    "delay": 4000
  },
  "slidesPerView": 1,
  "spaceBetween": 30,
  "pagination": {
    "el": ".swiper-pagination",
    "clickable": true
  }
}
</script>

                     <div class="swiper-wrapper">

                         <!-- Review 1 -->
                         <div class="swiper-slide">

                             <div class="testimonial-item">

                                 <img src="{{ asset('asset/img/person/person-m-9.webp') }}" class="testimonial-img"
                                     alt="">

                                 <h3>Ahmed Hassan</h3>

                                 <h4>Business Owner</h4>

                                 <div class="stars">
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                 </div>

                                 <p>
                                     <i class="bi bi-quote quote-icon-left"></i>

                                     <span>
                                         Opening my account with ATA Bank was quick and simple.
                                         The online banking platform is secure, fast, and very easy to use.
                                     </span>

                                     <i class="bi bi-quote quote-icon-right"></i>
                                 </p>

                             </div>

                         </div>

                         <!-- Review 2 -->
                         <div class="swiper-slide">

                             <div class="testimonial-item">

                                 <img src="{{ asset('asset/img/person/person-f-5.webp') }}" class="testimonial-img"
                                     alt="">

                                 <h3>Sara Mohamed</h3>

                                 <h4>Marketing Manager</h4>

                                 <div class="stars">
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                 </div>

                                 <p>
                                     <i class="bi bi-quote quote-icon-left"></i>

                                     <span>
                                         I use the mobile banking application every day.
                                         Transfers are completed instantly and customer support is always available.
                                     </span>

                                     <i class="bi bi-quote quote-icon-right"></i>
                                 </p>

                             </div>

                         </div>

                         <!-- Review 3 -->
                         <div class="swiper-slide">

                             <div class="testimonial-item">

                                 <img src="{{ asset('asset/img/person/person-f-12.webp') }}" class="testimonial-img"
                                     alt="">

                                 <h3>Mohamed Ali</h3>

                                 <h4>Software Engineer</h4>

                                 <div class="stars">
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                 </div>

                                 <p>
                                     <i class="bi bi-quote quote-icon-left"></i>

                                     <span>
                                         ATA Bank provides one of the safest digital banking experiences.
                                         Everything from bill payments to account management is effortless.
                                     </span>

                                     <i class="bi bi-quote quote-icon-right"></i>
                                 </p>

                             </div>

                         </div>

                         <!-- Review 4 -->
                         <div class="swiper-slide">

                             <div class="testimonial-item">

                                 <img src="{{ asset('asset/img/person/person-m-12.webp') }}" class="testimonial-img"
                                     alt="">

                                 <h3>Omar Ibrahim</h3>

                                 <h4>Financial Consultant</h4>

                                 <div class="stars">
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                 </div>

                                 <p>
                                     <i class="bi bi-quote quote-icon-left"></i>

                                     <span>
                                         Excellent loan services with competitive interest rates.
                                         The approval process was transparent and surprisingly fast.
                                     </span>

                                     <i class="bi bi-quote quote-icon-right"></i>
                                 </p>

                             </div>

                         </div>

                         <!-- Review 5 -->
                         <div class="swiper-slide">

                             <div class="testimonial-item">

                                 <img src="{{ asset('asset/img/person/person-m-13.webp') }}" class="testimonial-img"
                                     alt="">

                                 <h3>Youssef Adel</h3>

                                 <h4>Entrepreneur</h4>

                                 <div class="stars">
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                 </div>

                                 <p>
                                     <i class="bi bi-quote quote-icon-left"></i>

                                     <span>
                                         Secure banking, professional staff, and outstanding digital services.
                                         ATA Bank has become my primary banking partner.
                                     </span>

                                     <i class="bi bi-quote quote-icon-right"></i>
                                 </p>

                             </div>

                         </div>

                     </div>

                     <div class="swiper-pagination"></div>

                 </div>

             </div>

         </section>
         <!-- Faq 2 Section -->




         <!-- Contact Section -->
         <section id="contact" class="contact section">

             <!-- Section Title -->
             <div class="container section-title" data-aos="fade-up">
                 <h2>Contact</h2>
                 <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
             </div><!-- End Section Title -->

             <div class="container" data-aos="fade-up" data-aos-delay="100">

                 <div class="row gy-4">

                     <div class="col-lg-5">

                         <div class="info-wrap">
                             <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                 <i class="bi bi-geo-alt flex-shrink-0"></i>
                                 <div>
                                     <h3>Address</h3>
                                     <p>A108 Adam Street, Egypt, NY 535022</p>
                                 </div>
                             </div><!-- End Info Item -->

                             <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                 <i class="bi bi-telephone flex-shrink-0"></i>
                                 <div>
                                     <h3>Call Us</h3>
                                     <p>+1 5589 55488 55</p>
                                 </div>
                             </div><!-- End Info Item -->

                             <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                 <i class="bi bi-envelope flex-shrink-0"></i>
                                 <div>
                                     <h3>Email Us</h3>
                                     <p>{{ \App\Models\Setting::get('bank_name', 'Default Bank') }} bank.com</p>
                                 </div>
                             </div><!-- End Info Item -->

                             <iframe
                                 src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                                 frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                 loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div>
                     </div>

                     <div class="col-lg-7">
                         @if (session('success'))
                             <div class="alert alert-success">

                                 {{ session('success') }}

                             </div>
                         @endif

                         <div class="container section-title" data-aos="fade-up">
                             <h2>Report</h2>
                         </div>

                         <form action="{{ route('reports.store') }}" method="POST">

                             @csrf

                             <input type="text" name="name" class="form-control" placeholder="Full Name" required>

                             <input type="email" name="email" class="form-control mt-3" placeholder="Email"
                                 required>

                             <select name="report_type" class="form-select mt-3">

                                 <option>Complaint</option>

                                 <option>Suggestion</option>

                                 <option>Inquiry</option>

                             </select>

                             <input type="text" name="subject" class="form-control mt-3" placeholder="Subject">

                             

                             <textarea name="message" rows="6" class="form-control mt-3" placeholder="Write your message..." required></textarea>

                             <button class="btn btn-primary mt-3 w-100">

                                 Submit Report

                             </button>

                         </form>
                     </div><!-- End Contact Form -->

                 </div>

             </div>

         </section><!-- /Contact Section -->

     </main>
 @endsection
