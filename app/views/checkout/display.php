<?php include APPROOT . '/views/includes/header.php'; ?>
<?php include APPROOT . '/views/includes/navigation.php'; ?>

<main class='container'>

    <section id='checkout'>
        <section id='payment-info'>
            <form action="<?php echo URLROOT?>/checkout/confirm" method="post">

                <section id='billing-info'>
                    <span class='form-input'>
                        <label for="fname">First name:</label>
                        <input type="text" id="fname" name="fname">
                    </span>
                    <span class='form-input'>
                        <label for="lname">Last name:</label>
                        <input type="text" id="lname" name="lname">
                    </span>
                    <span class='form-input'>

                        <label for="address">Address</label>
                        <input type="text" id="address" name="address">
                    </span>
                    <span class='form-input'>
                        <label for="city">City</label>
                        <input type="text" id="city" name="city">
                    </span>
                    <span class='form-input'>
                        <label for="post-code">Post Code</label>
                        <input type="text" id="post-code" name="post-code">
                    </span>
                    <span class='form-input'>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </span>
                    <span class='form-input'>

                        <label for="phone">Phone No.</label>
                        <input type="text" id="phone" name="phone">
                    </span>
                </section>

                <section id='payment-method'>
                    <input type="submit" value="Submit">
                </section>

            </form>


        </section>
        <section id='order-info'>
            <?php var_dump($data['order']); ?>
        </section>

    </section>

</main>

<?php include APPROOT . '/views/includes/footer.php'; ?>