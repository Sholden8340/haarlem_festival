<?php include APPROOT . '/views/includes/header.php'; ?>
<?php include APPROOT . '/views/includes/navigation.php'; ?>

<main class='container'>
    <section id='payment-info'>
        <form action="checkout/confirm" method="post">

            <section id='billing-info'>
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname">

                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname">

                <label for="address">Address</label>
                <input type="text" id="address" name="address">

                <label for="city">City</label>
                <input type="text" id="city" name="city">

                <label for="post-code">Post Code</label>
                <input type="text" id="post-code" name="post-code">

                <label for="email">Email</label>
                <input type="email" id="email" name="email">

                <label for="phone">Phone No.</label>
                <input type="text" id="phone" name="phone">
            </section>

            <section id='payment-method'>
                <input type="submit" value="Submit">
            </section>

        </form>


    </section>
    <section id='order-info'>
        
    </section>

</main>

<?php include APPROOT . '/views/includes/footer.php'; ?>