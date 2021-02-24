<?php
    include "aero_params.php";

    echo "<ul class='r_aero_list'>";
    foreach ($aero_diagram as $key => $value) {
        if($key == 9 || $key == 11 || $key == 14) {
            echo "<li onClick='r_show(".$key.");'><a href='#'>".$value[0]."</a></li>";
        }
    }
    echo "</ul>";
?>
