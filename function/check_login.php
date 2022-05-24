<?php

if (!isset($_SESSION)) {
    session_start();
}

function redirect($url) {
    echo "<script> location.replace('" . $url . "');</script>";
}

function is_login() {
    if (!isset($_SESSION['baccarat'])) {
        redirect('logout.php');
    }
}