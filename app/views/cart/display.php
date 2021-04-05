<?php include APPROOT . '/views/includes/header.php'; ?>
<?php include APPROOT . '/views/includes/navigation.php'; ?>

<main class='container'>

    <form id="cart" class="card"  action="<?php echo URLROOT . "/cart/update/"; ?>" method="post">
        <section id="cart-tickets">
            <?php
            if ($data['tickets'] != null) {
                foreach ($data['tickets'] as $key => $value) {
                    echo $value;
                }
            ?>
                <section>
                    <span id="cart-buttons">
                        <a href="<?php echo URLROOT . '/cart/clear' ?>" class="button regular"><i class="bi bi-trash"></i>Clear Cart</a>
                        <a href="<?php echo URLROOT . '/checkout/display' ?>" class="button regular">Continue To Checkout</a>
                        <input type="submit" value="Update Cart">
                    </span>
                    <span id='cart-total'> </span>
                </section>
            <?php
            } else {
                echo "<h3>Shopping cart is empty</h3>";
            }
            ?>
        </section>
    </form>

</main>

<?php include APPROOT . '/views/includes/footer.php'; ?>