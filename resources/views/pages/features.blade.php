@extends('layouts.app')

@section('content')

<!-- HERO HEADER -->
<section class="hero d-flex align-items-center text-center" style="height: 50vh;">
    <div class="hero-overlay"></div>

    <div class="container position-relative">
        <h1 class="mb-3">FEATURES</h1>
        <p>POWERFUL TOOLS • BUILT FOR CONTROL • DESIGNED FOR SPEED</p>
    </div>
</section>

<!-- FEATURES GRID -->
<section class="container my-5">

    <div class="row text-center">

        <!-- FEATURE 1 -->
        <div class="col-md-4 mb-4">
            <div class="card feature-card p-4 h-100">
                <i class="fa-solid fa-file-invoice mb-3"></i>
                <h5>CREATE VOUCHERS</h5>
                <p>Generate fee vouchers instantly with automated calculations and structured formats.</p>
            </div>
        </div>

        <!-- FEATURE 2 -->
        <div class="col-md-4 mb-4">
            <div class="card feature-card p-4 h-100">
                <i class="fa-solid fa-database mb-3"></i>
                <h5>MANAGE RECORDS</h5>
                <p>Securely store, update, and organize all student and fee voucher data in one system.</p>
            </div>
        </div>

        <!-- FEATURE 3 -->
        <div class="col-md-4 mb-4">
            <div class="card feature-card p-4 h-100">
                <i class="fa-solid fa-chart-line mb-3"></i>
                <h5>REPORTS & ANALYTICS</h5>
                <p>Track payments, generate reports, and analyze financial data in real time.</p>
            </div>
        </div>

        <!-- FEATURE 4 -->
        <div class="col-md-4 mb-4">
            <div class="card feature-card p-4 h-100">
                <i class="fa-solid fa-shield-halved mb-3"></i>
                <h5>SECURITY CONTROL</h5>
                <p>Role-based access and secure authentication to protect sensitive financial data.</p>
            </div>
        </div>

        <!-- FEATURE 5 -->
        <div class="col-md-4 mb-4">
            <div class="card feature-card p-4 h-100">
                <i class="fa-solid fa-bolt mb-3"></i>
                <h5>FAST PROCESSING</h5>
                <p>Optimized system for quick voucher generation and instant data retrieval.</p>
            </div>
        </div>

        <!-- FEATURE 6 -->
        <div class="col-md-4 mb-4">
            <div class="card feature-card p-4 h-100">
                <i class="fa-solid fa-print mb-3"></i>
                <h5>PRINT VOUCHERS</h5>
                <p>Generate print-ready vouchers with professional formatting and layout.</p>
            </div>
        </div>

        <!-- FEATURE 7 -->
        <div class="col-md-4 mb-4">
            <div class="card feature-card p-4 h-100">
                <i class="fa-solid fa-user-graduate mb-3"></i>
                <h5>STUDENT MANAGEMENT</h5>
                <p>Maintain complete student profiles linked with fee structures and records.</p>
            </div>
        </div>

        <!-- FEATURE 8 -->
        <div class="col-md-4 mb-4">
            <div class="card feature-card p-4 h-100">
                <i class="fa-solid fa-wallet mb-3"></i>
                <h5>PAYMENT TRACKING</h5>
                <p>Monitor paid, unpaid, and partial payments with full transparency.</p>
            </div>
        </div>

        <!-- FEATURE 9 -->
        <div class="col-md-4 mb-4">
            <div class="card feature-card p-4 h-100">
                <i class="fa-solid fa-cloud mb-3"></i>
                <h5>CLOUD READY</h5>
                <p>Access your voucher system anytime with scalable cloud deployment support.</p>
            </div>
        </div>

    </div>

</section>

@endsection