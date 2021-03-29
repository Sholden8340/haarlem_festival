<?php
require APPROOT . '/views/includes/header.php';
include APPROOT . '/views/includes/adminNav.php';
?>

<main role="main">
    <title>Dance View</title>
    <table width="100%" border="1" style="border-collapse: collapse">
        <thead>
        <tr>
            <th><strong>Name</strong></th>
            <th><strong>Date</strong></th>
            <th><strong>Time</strong></th>
            <th><strong>edit</strong></th>
            <th><strong>delete</strong></th>
        </tr>
        </thead>
        <tbody>
        <?php
        //var_dump($data);
        foreach ($data as $datum){ ?>
            <tr>
            <td align="center"><?php echo $datum['event_name']; ?></td>
            <td align="center"><?php echo $datum['event_date']; ?></td>
            <td align="center"><?php echo $datum['start_time']; ?></td>

            <td align="center">
                <a href="edit.php?id=<?php echo $datum['event_id']; ?>">Edit</a>
            </td>

            <td align="center">
                <a href="delete.php?id=<?php echo $datum['event_id']; ?>">Delete</a>
            </td>
        </tr>
        <?php }?>
        </tbody>
    </table>
</main>
