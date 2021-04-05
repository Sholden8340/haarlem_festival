<?php include APPROOT . '/views/includes/header.php'; ?>
<?php include APPROOT . '/views/includes/navigation.php'; ?>

<main>

    <section id='checkout'>
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
                <section id='payment-method'>
                    <a href="<?php echo URLROOT ?>/checkout/confirm" class='button regular'>Pay</a>
                </section>
            </section>
        </section>

    </section>

</main>

<?php include APPROOT . '/views/includes/footer.php'; ?>