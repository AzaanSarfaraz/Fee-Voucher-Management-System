<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fee Voucher System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>



<body class="app-body">

    @include('partials.header')

    <main class="app-content">
        @yield('content')
    </main>

    @include('partials.footer')




<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const method = document.getElementById("payment_method");
    const box = document.getElementById("payment_field_box");
    const label = document.getElementById("payment_label");
    const input = document.getElementById("payment_input");

    function updatePaymentField() {
        const value = method.value;

        if (value === "cash") {
            box.style.display = "none";
            input.value = 0; // Set payment ID to 0 for cash
            input.removeAttribute("required");
        }

        else if (value === "cheque") {
            box.style.display = "block";
            input.value = ""; // Clear previous value
            label.innerHTML = 'Cheque ID <span class="required-star">*</span>';
            input.placeholder = "Enter cheque ID";
            input.setAttribute("required", "true");
        }

        else if (value === "online") {
            box.style.display = "block";
            input.value = ""; // Clear previous value
            label.innerHTML = 'Transaction ID <span class="required-star">*</span>';
            input.placeholder = "Enter transaction ID";
            input.setAttribute("required", "true");
        }

        else {
            box.style.display = "block";
            input.value = "";
            label.innerHTML = 'Transaction ID <span class="required-star">*</span>';
            input.placeholder = "Enter transaction ID";
        }
    }

    method.addEventListener("change", updatePaymentField);

    updatePaymentField();
});
</script>

</body>
</html>