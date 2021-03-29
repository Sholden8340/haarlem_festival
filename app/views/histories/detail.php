

<main role ="main" id="history-main">
    <section class="nav-bar">
        <?php
        require APPROOT . '/views/includes/header.php';
        require APPROOT . '/views/includes/navigation.php';
        ?>
    </section>

    <section class="main-history-container">
        <section class="intro-history-container">
            <h1 id="history-intro-h">Haarlem History</h1>
            <p id="history-intro">Haarlem history gives you a unique experience of Haarlem,
                <br>it is something you do not want to miss.
                <br>Join one of our tours on Thursday, Friday, Saturday
                or Sunday.</p>
            <a id="history-show-more" href="#detail-history-container" type="button">Join us</a>
        </section>
    </section>

    <section id="detail-history-container">
        <h2 id="history-detail-h">Travel through history with us</h2>
        <section class="tour-history-container">
            <section class="history_map_modal" id="map_popup">
                <section class="modal-content">
                    <img src="../img/history_map_locations.jpg" id="location_image">
                </section>
            </section>
            <section class="tour-text-cont">
                <h1 id="tour-title">Tour Information</h1>
                <p>Our tours are for anyone to enjoy, it is especially a way for some quality family time.
                    It is available in Chinese, Dutch and English on Thursday, Friday, Saturday and Sunday.</p>
                <p>All our tours start at the location "De Grote of St.-Bavokerk", the guides will make sure you're experiencing the best of Haarlem.
                </p>
                <p>We only have 12 seats per tour so make sure you book your tickets on time.
                </p>
                <p>Standard tickets: 17,50 euros
                    <br>Family tickets for groups of four: 60,00 euros. </p>

                <a href="<?php echo URLROOT; ?>/histories/tickets"><button type="button" id="history_order_btn">Order tickets</button></a>


            </section>
            <aside class="history-map-aside">
                <img src="../img/history_map.jpg" alt="Show map" id="show_map_img">
                <p id="history-quote">Explore<br>Haarlem...</p>
            </aside>

            <button id = "map_popup_btn">Show locations</button>


        </section>



    </section>
</main>

<script>
    //popup
    var btn = document.getElementById("map_popup_btn");
    var modal=document.getElementById("map_popup");

    btn.onclick=function (){
        modal.style.display = "block";
    }
/*
    this.window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }*/

</script>