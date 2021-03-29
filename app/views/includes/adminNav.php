<nav id="navbar-hf">
    <ul>
        <li> <img src="" alt="Haarlem Festival Logo"> </li>
        <li> <a href="<?php echo URLROOT . "/admins/homepage" ?>">Homepage</a> </li>
        <li> <a href="<?php echo URLROOT . "/jazz/home" ?>">Haarlem Jazz</a> </li>
        <li> <a href="<?php echo URLROOT . "/histories/detail" ?>">Haarlem History</a> </li>
        <li> <a href="<?php echo URLROOT . "/pages/dance" ?>">Haarlem Dance</a> </li>
        <li> <a href="<?php echo URLROOT . "/pages/dance" ?>">Overview</a> </li>

        <li>
            <?php if (isset($_SESSION['email'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/account">Your Account</a>
                <a href="<?php echo URLROOT; ?>/admins/adminLogout">Log out</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/admins/loginAdmin">Log In</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
