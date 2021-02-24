<?php
    include "map_params.php";

    echo "<p class='label'>Домен:</p>";
    foreach ($domens["mos"] as $key) {
        $checked = ($key == $domens["mos"][0]) ? ' checked="checked"' : '';
        echo "<label><input type='radio' name='domenSel' value='".$key."' ".$checked." onClick='getModelList();'>".$maps[$key][0]."</label>";
    }
?>
