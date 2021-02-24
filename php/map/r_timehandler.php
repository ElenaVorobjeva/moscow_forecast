<?php
    include "map_params.php";

    $id_domen = $_POST["id_domen"];
    $id_model = $_POST["id_model"];
    $id_elem = $_POST["id_elem"];
    $id_init_term = $_POST["id_init_term"];

    $a = $maps[$id_domen][$id_model][$id_elem][1][$id_init_term][0];
    $b = $maps[$id_domen][$id_model][$id_elem][1][$id_init_term][1];
    $delta = $maps[$id_domen][$id_model][$id_elem][1][$id_init_term][2];

    $j = 0;
    for($i = $a; $i <= $b; $i = $i + $delta) {
        $end = ($i == $b) ? " end" : "";
        echo "<button id='r_but_".$j."' value='".$j."' class='controls time".$end."' onClick='r_getImg($(this).val());'>".$i."</button>";
        $j++;
    }
?>
