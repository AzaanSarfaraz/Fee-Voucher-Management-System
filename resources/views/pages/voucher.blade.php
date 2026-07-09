@extends('layouts.app')

@section('content')

<!-- PAGE HEADER -->
<section class="hero d-flex align-items-center text-center" style="height: 40vh;">
    <div class="hero-overlay"></div>

    <div class="container position-relative">
        <h1 class="mb-3">CREATE VOUCHER</h1>
        <p>Generate and manage fee vouchers easily</p>
    </div>
</section>

<!-- FORM SECTION -->
<section class="container my-5">

    <div class="p-4">


        @if(session('success'))
        <script>
            alert("{{session('success')}}")
        </script>
        @endif


        <form action="/voucher" method="POST">
            @csrf

            <div class="row">

                <!-- STUDENT ID -->
                <div class="col-md-6 mb-4">
                    <label class="form-label text-uppercase">
                        Student ID <span class="required-star">*</span>
                    </label>

                    <input type="text"
                        name="studentid"
                        class="form-control custom-input"
                        placeholder="Enter student ID"
                        required>
                </div>

                <!-- FULL NAME -->
                <div class="col-md-6 mb-4">
                    <label class="form-label text-uppercase">
                        Full Name <span class="required-star">*</span>
                    </label>

                    <input type="text"
                        name="fullname"
                        class="form-control custom-input"
                        placeholder="Enter full name"
                        required>
                </div>

                <!-- PHONE -->
                <div class="col-md-6 mb-4">
                    <label class="form-label text-uppercase">
                        Phone Number <span class="required-star">*</span>
                    </label>

                    <input type="text"
                        name="number"
                        class="form-control custom-input"
                        placeholder="Enter phone number">
                </div>

                <!-- ADDRESS -->
                <div class="col-md-6 mb-4">
                    <label class="form-label text-uppercase">
                        Address <span class="required-star">*</span>
                    </label>

                    <input type="text"
                        name="address"
                        class="form-control custom-input"
                        placeholder="Enter address">
                </div>

                <!-- DATE -->
                <div class="col-md-6 mb-4">
                    <label class="form-label text-uppercase">
                        Date <span class="required-star">*</span>
                    </label>

                    <input type="date"
                        name="date"
                        class="form-control custom-input"
                        required>
                </div>

                <!-- PAYMENT METHOD -->
                <div class="col-md-6 mb-4">
                    <label class="form-label text-uppercase">
                        Payment Method <span class="required-star">*</span>
                    </label>

                    <select name="paymentmethod"
                        id="payment_method"
                        class="form-control custom-input"
                        required>

                        <option value="">Select Method</option>
                        <option value="cash">Cash</option>
                        <option value="online">Online</option>
                        <option value="cheque">Cheque</option>

                    </select>
                </div>

                <!-- TRANSACTION / CHEQUE -->
                <div class="col-md-6 mb-4" id="payment_field_box">

                    <label class="form-label text-uppercase"
                        id="payment_label">
                        Transaction ID
                    </label>

                    <input type="text"
                        name="paymentid"
                        id="payment_input"
                        class="form-control custom-input"
                        placeholder="Enter transaction ID"
                        required>
                </div>

                <!-- AMOUNT -->
                <div class="col-md-6 mb-4">
                    <label class="form-label text-uppercase">
                        Amount <span class="required-star">*</span>
                    </label>

                    <input type="number"
                        name="amount"
                        class="form-control custom-input"
                        placeholder="Enter amount"
                        required>
                </div>

            </div>

            <!-- BUTTON -->
            <div class="btn-wrap">
                <button type="submit"

                    class="nav-btn text-uppercase">
                    Generate Voucher
                </button>
            </div>

        </form>

    </div>

</section>

@endsection