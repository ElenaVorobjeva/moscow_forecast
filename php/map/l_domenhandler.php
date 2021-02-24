<?php
    include "map_params.php";


    foreach ($domens["mos"] as $key) {
        $selected = ($key == $domens["mos"][0]) ? ' selected="selected"' : '';
        echo "<option value='".$key."' ".$selected.">".$maps[$key][0]."</option>";
    }
?>
