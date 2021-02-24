<?php
    include "../../../meteo_params.php";

    echo "<p class='label'>Район:</p>";
    foreach ($domens["mos"] as $key) {
        $checked = ($key == $domens["mos"][0]) ? ' checked="checked"' : '';
        echo "<label><input type='radio' name='domenSel' value='".$key."' ".$checked." onClick='getPointList(1);'>".$meteograms[$key][0]."</label>";
    }
?>
