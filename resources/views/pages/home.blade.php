@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="hero d-flex align-items-center text-center">
    
    <!-- Moving gradient layer -->
    <div class="hero-overlay"></div>

    <div class="container position-relative">
        <h1 class="mb-4">FEE VOUCHER SYSTEM</h1>
        <p class="mb-4">SMART • SECURE • POWERFUL</p>

        <a href="/voucher" class="hero-btn px-5 py-2 text-uppercase">
            Get Started
        </a>
    </div>

</section>

<!-- FEATURES SECTION -->
<section class="container my-5" id="features">
    <div class="row text-center">

        <!-- CARD 1 -->
        <div class="col-md-4 mb-4">
            <div class="card feature-card p-4 h-100">
                <i class="fa fa-file-invoice mb-3"></i>
                <h5 class="mt-3">CREATE VOUCHERS</h5>
                <p>Generate fee vouchers instantly with automated calculations and structured formats.</p>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4 mb-4">
            <div class="card feature-card p-4 h-100">
                <i class="fa fa-database mb-3"></i>
                <h5 class="mt-3">MANAGE RECORDS</h5>
                <p>Securely store, update, and organize all student and fee voucher data in one system.</p>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4 mb-4">
            <div class="card feature-card p-4 h-100">
                <i class="fa fa-chart-line mb-3"></i>
                <h5 class="mt-3">REPORTS & ANALYTICS</h5>
                <p>Track payments, generate reports, and analyze financial data in real time.</p>
            </div>
        </div>

    </div>

    <div class="text-center mt-4">
    <a href="/features" class="hero-btn px-5 py-2 text-uppercase">
        See More
    </a>
</div>

</section>

@endsection