<?php
require APPROOT . '/views/includes/header.php';
?>

<main role="main">

    <section class="login-container">
        <aside class="wrapper-login">
            <h2>Sign in</h2>
            <form action="<?php echo URLROOT; ?>/admins/loginAdmin" method="post">
                <input type="text" placeholder="Email *" name="email">
                <span class="invalidFeedback">
                    <?php echo $data['emailError']; ?>
                </span>

                <input type="password" placeholder="Password *" name="password">
                <span class="invalidFeedback">
                    <?php echo $data['passwordError']; ?>
                </span>

                <button id="submit" type="submit" value="submit">Submit</button>

                <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account </a></p>
            </form>
        </aside>
    </section>

</main>

