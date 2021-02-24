<?php
    include "../../../meteo_params.php";

    $id_domen = $_POST["id_domen"];
    $id_point = $_POST["id_point"];
    $id_model = $_POST["id_model"];
    $id_init_term = $_POST["id_init_term"];
    $date = $_POST["date"];

    $link = $meteograms[$id_domen][$id_point][$id_model][1];
    $link = str_replace("yyyymmddhh", formDate($date, $id_init_term), $link);
    echo $link;

    function formDate($date, $id_init_term) {
        $initTermArr = ["00", "06", "12", "18"];
        return $date.$initTermArr[$id_init_term];
    }


?>
