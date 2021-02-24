<?php
    include "../../../map_params.php";

    $id_domen = $_POST["id_domen"];
    $id_model = $_POST["id_model"];

    echo "<p class='label'>Метеоэлементы:</p>";
    foreach ($maps[$id_domen][$id_model] as $key => $value) {
        if($key != 0) {
            $checked = ($key == 1) ? ' checked="checked"' : '';
            echo "<label><input type='radio' name='elemSel' value='".$key."' ".$checked." onClick='getTime();'>".$value[0]."</label>";
        }
    }
?>
