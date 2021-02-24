<?php

    include "aero_params.php";

    $id_point = $_POST["id_point"];

    echo "<p class='label'>Модель:</p>";
    foreach ($aero_diagram[$id_point] as $key => $value) {
        if($key != 0 && $key != 1) {
            $checked = ($key == 2) ? ' checked="checked"' : '';
            echo "<label><input type='radio' name='modelSel' value='".$key."' ".$checked." onClick='getTime();'>".$value[0]."</label>";
        }
    }
?>
