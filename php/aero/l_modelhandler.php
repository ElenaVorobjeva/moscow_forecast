<?php
    include "aero_params.php";

    $id_point = $_POST["id_point"];

    echo "<label for='l_aero_model'>Модель:";
    echo "<select id='l_aero_model' onChange='l_getTime(".$id_point.")'>";
    foreach ($aero_diagram[$id_point] as $key => $value) {
        if($key != 0 && $key != 1) {
            $selected = ($key == 2) ? ' selected="selected"' : '';
            echo "<option value=".$key.">".$value[0]."</option>";
        }
    }
    echo "</select>";
    echo "</label>";
?>
