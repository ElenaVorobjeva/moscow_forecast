<?php
    $date = $_POST["date"];

    session_start();
    $_SESSION["date"] = $date;
?>
