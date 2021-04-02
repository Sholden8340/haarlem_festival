<?php include APPROOT . '/views/includes/header.php'; ?>
<?php include APPROOT . '/views/includes/navigation.php'; ?>

<main id="home">
    <?php //var_dump($data); 
    ?>

    <section class="title-screen" id="jazz-title-screen">
        <section id="jazz-title">
            <h1>Haarlem Festival Jazz</h1>
            <h2>The Haarlem Festival brings you the best jazz acts, both local and from around the world.
                Performing in Haarlem's very own Patronaat as well as the Grote Markt, this is an event you won't want to miss!</h2>
            <a href="#jazz-info-page" class="button transparent">Show more</a>
        </section>

    </section>

    <section id="jazz-info-page">
        <section id="jazz-info" class="card">

            <img src="../img/jazz_in_haarlem.jpg" alt="Haarlem festival jazz stage" id="jazz-in-haarlem-image">
            <section id="jazz-in-haarlem">
                <h3>Jazz In Haarlem</h3>
                <p>
                    Haarlem is no stranger to the Jazz scene with many local acts and venues embracing it.
                </p>
                <p>
                    Haarlem Jazz & More is an Illustrious event in the old city centre of Haarlem.
                    We aim to bring a bit of this Incredible event to the Haarlem Festival giving you a taste of the real thing.
                </p>
            </section>

            <img src="../img/patronaat.jpg" alt="Patronaat" id="patronaat-image">
            <section id="patronaat">

                <h3>Patronaat</h3>
                <p>
                    Patronaat is one of the top 10 music venues in the Netherlands.
                    The Haarlemsezaal has existed since 1984 and nowadays presents a distinctive program of bands and electronic music.
                    It is located at the Zijlsingel in Haarlem, near the city centre.
                </p>
                <p>
                    In 2003 the old building was replaced with a brand new concert hall, which was used for the first time in 2005.
                </p>
            </section>

            <img src="../img/grote_markt.jpg" alt="Grote Markt" id="grote-markt-image">
            <section id="grote-markt">

                <h3>Grote Markt</h3>
                <p>
                    The Grote Markt is the central market square of Haarlem.
                    With the Grote of St.-Bavokerk towering over it make a fitting venue for the final day of the Jazz celebrations.
                    During this final day a select few acts will take to the stage and perform in Haarlems main square for everyone. Free of charge!
                </p>

            </section>

            <a href="#jazz-timetable-page" class="button transparent">See What's On</a>

        </section>

        <aside id="jazz-artists">
            <img src="../img/placeholder.png" alt="Dance Image">
            <img src="../img/placeholder.png" alt="History Image">
            <img src="../img/placeholder.png" alt="Jazz Image">
        </aside>

    </section>

    <section id=jazz-timetable-page>
        <section class="timetable card table" id="jazz-timetable">

            <?php

            if (isset($data['timetable'])) {

                // Date
                foreach ($data['timetable'] as $key => $event) {

                    $date = new DateTime($key);
                    echo "<h4>". date_format($date, "l d/m") ."</h4>";
                    // Location
                    foreach ($event as $key => $location) {

                        echo "<section class='table__row jazz-table-row'>";

                        // event
                        foreach ($location as $key => $value) {
                            echo $value;
                        }
                        echo "</section>";
                    }
                }
            } else {

                echo "There was an error loading the timetable";
            }

            ?>

        </section>
    </section>

</main>

<?php include APPROOT . '/views/includes/footer.php'; ?>