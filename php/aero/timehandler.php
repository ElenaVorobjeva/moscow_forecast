<?php
    include "aero_params.php";

    $id_point = $_POST["id_point"];
    $id_model = $_POST["id_model"];
    $id_init_term = $_POST["id_init_term"];

    $a = $aero_diagram[$id_point][$id_model][1][$id_init_term][0];
    $b = $aero_diagram[$id_point][$id_model][1][$id_init_term][1];
    $delta = $aero_diagram[$id_point][$id_model][1][$id_init_term][2];

    $j = 0;
    for($i = $a; $i <= $b; $i = $i + $delta) {
        $end = ($i == $b) ? " end" : "";
        echo "<button id='but_".$j."' value='".$j."' class='controls time".$end."' onClick='getImg($(this).val());'>".$i."</button>";
        $j++;
    }
?>
