<?php
    include "../../../meteo_params.php";

    $id_domen = $_POST["id_domen"];
    $id_point = $_POST["id_point"];

    echo $meteograms[$id_domen][$id_point][0];
?>
