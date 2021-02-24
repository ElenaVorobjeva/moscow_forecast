<?php
    include "meteo_params.php";

    $id_domen = $_POST["id_domen"];
    $id_point = $_POST["id_point"];

    echo "<p class='label'>Пункт:</p>";
    foreach ($meteograms[$id_domen] as $key => $value) {
        if($key != 0) {
            $checked = ($key == $id_point) ? ' checked="checked"' : '';
            echo "<label><input type='radio' id='point_".$key."' name='pointSel' value='".$key."' ".$checked." onClick='getModelList(2);'>".$value[0]."</label>";
        }
    }
?>
