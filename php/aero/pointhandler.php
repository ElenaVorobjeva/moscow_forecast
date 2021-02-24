<?php

    include "aero_params.php";

    echo "<p class='label'>Населенный пункт:</p>";
    foreach ($aero_diagram as $key => $value) {
        if($key == 9 || $key == 11 || $key == 14) {
            $checked = ($key == 9) ? ' checked="checked"' : '';
            echo "<label><input type='radio' name='pointSel' value='".$key."' ".$checked." onClick='getModelList();'>".$value[0]."</label>";
        }
    }
?>
