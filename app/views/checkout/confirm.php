<?php include APPROOT . '/views/includes/header.php'; ?>
<?php include APPROOT . '/views/includes/navigation.php'; ?>

<main id='order-confirm-container'>

    <section id='order-confirm-page'>

        <section id='order-header'>
            <h1>Thank you for your order</h1>
            <h2>Your tickets are on the way!</h2>
        </section>
        <section id='order-tickets'>
            <?php

            foreach ($data['tickets'] as $key => $value) {
                echo $value;
            }

            ?>
        </section>
    </section>

    <aside id='order-confirm-info'>
        <h3>Order Details</h3>
        <span>
            <h4>Order Number</h4>
            <h4><?php //echo $data['order']->orderId; 
                ?> fake number</h4>
        </span>
        <span>
            <h4>Order Date</h4>
            <h4><?php echo date("j M Y"); ?></h4>
        </span>

        <h3>Your Details</h3>
        <span>
            <h4>Name</h4>
            <h4>Jazz Man</h4>
        </span>
        <span>
            <h4>Address</h4>
            <p>
                Jazzstreet 52
                Groningen
                2011OP
                Nederland
            </p>
        </span>
        <span>
            <h4>Phone</h4>
            <p>
                +34 64 739 0279
            </p>
        </span>

        <h3>Summary</h3>
        <span>
            <h4>Sub Total</h4>
            <h4>&euro;<?php echo number_format($data['order']->getTotal() * 0.79, 2); ?></h4>
        </span>
        <span>
            <h4>VAT @ 21%</h4>
            <h4>&euro;<?php echo number_format($data['order']->getTotal() * 0.21, 2); ?></h4>
        </span>
        <span>
            <h4>Total</h4>
            <h4>&euro;<?php echo number_format($data['order']->getTotal(), 2); ?></h4>
        </span>

    </aside>

</main>

<?php include APPROOT . '/views/includes/footer.php'; ?>