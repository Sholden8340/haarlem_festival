<main>
    <section class="main-payment-container">
        <section class="payment-container">
            <h1></h1>
            <form class="payment-info-container" action="<?php echo URLROOT; ?>/payment/payment" method="post">

                <section class="payment-person-info-container">
                    <label for="payment-first-name">Firstname</label>
                    <input type="text" id="payment-first-name">

                    <label for="payment-last-name">Lastname</label>
                    <input type="text" id="payment-last-name">

                    <label for="payment-email">Email</label>
                    <input type="text" id="payment-email">

                    <label for="payment-address">Address</label>
                    <input type="text" id="payment-address">

                    <label for="payment-city">City</label>
                    <input type="text" id="payment-city">

                    <label for="payment-postal">Postal Code</label>
                    <input type="text" id="payment-postal">

                    <label for="payment-phone">Phone number</label>
                    <input type="text" id="payment-phone">
                </section>

                <section class="payment-method-container">
                    <section class="payment-method-dropdown-container">
                        <label id="payment-dropdown-lbl" for="payment-dropdown">Select a payment method</label>
                        <select id="payment-dropdown">
                            <option value="pay_paypal">Paypal</option>
                            <option value="pay_ideal">Ideal</option>
                            <option value="pay_master">Mastercard</option>
                        </select>
                    </section>
                </section>
            </section>
            <aside class="payment-basket-info-container">
                <h2>Shopping cart</h2>
            </aside>
        </section>
    </section>
</main>

<script>
    function myFunction() {
        document.getElementsByClassName("payment-dropdown").classList.toggle("show");
    }

    function filterFunction() {
        var input;
        var filter;
        var ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        dropdown = document.getElementById("myDropdown");

        a = dropdown.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            value = a[i].textContent || a[i].innerText;
            if (value.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
</script>

