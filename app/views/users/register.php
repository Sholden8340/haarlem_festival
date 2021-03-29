<?php
require APPROOT . '/views/includes/header.php';
include APPROOT . '/views/includes/navigation.php';
?>

<main role="main">
    <section class="login-container">
        <aside class="wrapper-login">
            <h2>Register</h2>
            <form action="<?php echo URLROOT; ?>/users/register" method="post">

                <input type="text" placeholder="Firstname *" name="firstname">
                <input type="text" placeholder="Lastname *" name="lastname">

                <input type="text" placeholder="Email *" name="email">
                <span class="invalidFeedback">
                    <?php echo $data['emailError']; ?>
                </span>

                <input type="password" placeholder="Password *" name="password">
                <span class="invalidFeedback">
                    <?php echo $data['passwordError']; ?>
                </span>

                <input type="password" placeholder="Confirm Password *" name="confirmPassword">
                <span class="invalidFeedback">
                    <?php echo $data['confirmPasswordError']; ?>
                </span>


                <button id="submit" type="submit" value="submit">Submit</button>
            </form>
        </aside>
    </section>

</main>