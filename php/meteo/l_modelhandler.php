<?php
    include "meteo_params.php";

    $id_domen = $_POST["id_domen"];
    $id_point = $_POST["id_point"];
    $val = $_POST["val"];

    echo "<label for='l_meteo_model'>Модель:";
    echo "<select id='l_meteo_model' onChange='l_getLink(".$id_domen.",".$id_point.")'>";
    foreach ($meteograms[$id_domen][$id_point] as $key => $value) {
        if($key != 0 && $key != 1) {
            $selected = ($key == 2) ? ' selected="selected"' : '';
            echo "<option value=".$key.">".$value[0]."</option>";
        }
    }
    echo "</select>";
    echo "</label>";


?>
