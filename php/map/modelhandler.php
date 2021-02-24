<?php
    include "map_params.php";

    $id_domen = $_POST["id_domen"];

    echo "<p class='label'>Модель:</p>";
    foreach ($maps[$id_domen] as $key => $value) {
        if($key != 0) {
            $checked = ($key == 1) ? ' checked="checked"' : '';
            echo "<label><input type='radio' name='modelSel' value='".$key."' ".$checked." onClick='getElemList();'>".$value[0]."</label>";
        }
    }
?>
