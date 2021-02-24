<?php
    include "map_params.php";

    $id_domen = $_POST["id_domen"];
    $id_model = $_POST["id_model"];

    foreach ($maps[$id_domen][$id_model] as $key => $value) {
        if($key != 0) {
            $selected = ($key == 1) ? ' selected="selected"' : '';
            echo "<option value='".$key."' ".$selected.">".$value[0]."</option>";
        }
    }
?>
