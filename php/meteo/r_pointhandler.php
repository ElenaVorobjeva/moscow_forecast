<?php
    include "../../../meteo_params.php";

    foreach ($domens["mos"] as $id) {
        echo "<div id='point_wrapper'>";
        echo "<ul class='r_meteo_list'>";
        echo "<h3>".$meteograms[$id][0]."</h3>";
        foreach ($meteograms[$id] as $key => $value) {
            if($key != 0) {
                echo "<li onClick = 'r_show(".$id.", ".$key.");'><a href='#'>".$value[0]."</a></li>";
            }
        }
        echo "</ul>";
        echo "</div>";
    }
?>
