<?php 
$ticket = $data['ticket'];
?>

<section id='overlay-background' onclick="this.style.display = 'none'">
    <form action="<?php echo URLROOT . "/cart/add/$ticket->ticketId";?>" method="post" id='add-ticket-overlay' class='card'>

        <section id='event-info-overlay'>

            <section id='event-image-overlay'>
                <img src='<?php echo URLROOT ?>/img/placeholder.png' alt='' id='artist-image'>
                <p id='event-social-overlay'>
                    <a href=""> <i class="bi bi-facebook"></i> </a>
                    <a href=""> <i class="bi bi-twitter"></i></a>
                    <a href=""> <i class="bi bi-youtube"></i></a>
                    <a href=""> <i class="bi bi-globe2"></i></a>
                </p>

            </section>
            <section id='event-details-overlay'>
                <h2><?php echo $ticket->event->artist->name;?></h2>
                <p>
                    <?php echo $ticket->event->artist->description;?>
                </p>
            </section>



        </section>


        <section id='ticket-info-overlay'>
            <span id='ticket-info-header-overlay'>
                <h3>Ticket</h3>
                <h3>Price</h3>
                <h3>Amount</h3>
            </span>
            <span>
                <section id='ticket-overlay'>
                    <?php echo $ticket->event->artist->description;?>
                </section>
                <span><?php echo $ticket->price;?></span>
                <input type="number" name="quantity" id="quantity" min="1" max="10" value="1">

            </span>
            <span id='weekend-pass-overlay'>
                <a href=""><img src="<?php echo URLROOT ?>/img/jazz_all access.png" alt=""></a>
                <a href=""><img src="<?php echo URLROOT ?>/img/jazz_day_pass.png" alt=""></a>
            </span>
        </section>

        <section id='ticket-total-overlay'>
            <h2>Total</h2>
            <h2>&euro;99.99</h2>
            <section id='ticket-total-breakdown-overlay'>
                <span>
                    <h4>Sub Total</h4>
                    <p>&euro;22.22</p>
                </span>
                <span>
                    <h4>VAT @ 21%</h4>
                    <p>&euro;33.33</p>
                </span>
                <span>
                    <h4>Total</h4>
                    <p>&euro;44.44</p>
                </span>
                <span id='ticket-add-buttons-overlay'>
                    <button type="submit">Add To Cart</button>
                    <button type="submit">Checkout</button>
                </span>
            </section>
        </section>

    </form>
</section>