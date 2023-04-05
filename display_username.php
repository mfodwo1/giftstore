<?php

function is_user_logged_in() {
    return isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true;
}

function get_user_firstname() {
    if (is_user_logged_in()) {
        return $_SESSION["fname"];
    } else {
        return "";
    }
}
function logout_user() {
    session_destroy();
    header("Location: login.php");
}


?>