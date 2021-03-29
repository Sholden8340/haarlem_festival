<?php
if(!$_SESSION['email']){
    header('location:' . URLROOT . '/users/login');
}

echo $_SESSION['firstname'];
