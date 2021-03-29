
<html>
<?php
require APPROOT . '/views/includes/header.php';
include APPROOT . '/views/includes/adminNav.php';
?>

<body>
<section>
    <form action="<?php echo URLROOT; ?>/admins/newDance" method="post">
        <h2>Dance Festival</h2>
        <label>Title</label>
        <input type="text" name="title">
        <aside>
            <label>Start time</label>
            <?php
            $start = "00:00"; //you can write here 00:00:00 but not need to it
            $end = "23:30";

            $tStart = strtotime($start);
            $tEnd = strtotime($end);
            $tNow = $tStart;
            echo '<select name="schedule_time">';
            while($tNow <= $tEnd){
                echo '<option value="'.date("H:i",$tNow).'">'.date("H:i",$tNow).'</option>';
                $tNow = strtotime('+30 minutes',$tNow);
            }
            echo '</select>';
            ?>
        </aside>
        <label>Description</label>

        <section>
            <textarea class="FormElement" type="text" name="description" cols="140" rows="10"></textarea>
        </section>


        <label></label>


    </form>
</section>
</body>
</html>
