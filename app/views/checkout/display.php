<?php include APPROOT . '/views/includes/header.php'; ?>
<?php include APPROOT . '/views/includes/navigation.php'; ?>

<main>

    <section id='checkout'>
        <section id='payment-info'>
            <form action="<?php echo URLROOT ?>/checkout/confirm" method="post" id="billing-info">

                <section id='user-info'>
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
                    <input type="submit" value="Pay" class='button regular'>
                </section>

            </form>


        </section>
        <section id='order-info'>
            <?php
            foreach ($data['tickets'] as $key => $value) {
                echo $value;
            }
            ?>
            <section id='checkout-total'>
                <span>
                    <h3>Sub Total</h3>
                    <h3>&euro;<?php echo number_format($data['order']->getTotal() * .79, 2); ?></h3>
                </span>
                <span>
                    <h3>VAT @ 21%</h3>
                    <h3>&euro;<?php echo number_format($data['order']->getTotal() * .21, 2); ?></h3>
                </span>
                <span>
                    <h3>Total</h3>
                    <h3>&euro;<?php echo number_format($data['order']->getTotal(), 2); ?></h3>
                </span>
            </section>
        </section>

    </section>

</main>

<?php include APPROOT . '/views/includes/footer.php'; ?>