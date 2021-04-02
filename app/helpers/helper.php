<?php

function isLoggedIn(){
    if (isset($_SESSION['userID'])) {
        return true;
    } else {
        return false;
    }
}