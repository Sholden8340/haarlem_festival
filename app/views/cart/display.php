<?php include APPROOT . '/views/includes/header.php'; ?>
<?php include APPROOT . '/views/includes/navigation.php'; ?>

<main class='container'>

    <section id="cart" class="card">
        <section id="cart-tickets">
            <?php
            if ($data['tickets'] != null) {
                foreach ($data['tickets'] as $key => $value) {
                    echo $value;
                }
            ?>
                <span id="cart-buttons">
                    <a href="<?php echo URLROOT . '/cart/clear' ?>" class="button"><i class="bi bi-trash"></i>Clear Cart</a>
                    <a href="<?php echo URLROOT . '/checkout/display' ?>" class="button">Continue To Checkout</a>
                </span>

            <?php
            } else {
                echo "<h3>Shopping cart is empty</h3>";
            }
            ?>
        </section>
    </section>

</main>

<?php include APPROOT . '/views/includes/footer.php'; ?>