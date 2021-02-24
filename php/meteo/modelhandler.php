<?php

    include "../../../meteo_params.php";

    $id_domen = $_POST["id_domen"];
    $id_point = $_POST["id_point"];
    $val = $_POST["val"];

    echo "<p class='label'>Модель:</p>";
    foreach ($meteograms[$id_domen][$id_point] as $key => $value) {
        if($key != 0 && $key != 1) {
            $checked = ($key == $val) ? ' checked="checked"' : '';
            echo "<label><input type='radio' name='modelSel' value='".$key."' ".$checked." onClick='getLink();'>".$value[0]."</label>";
        }
    }
?>
