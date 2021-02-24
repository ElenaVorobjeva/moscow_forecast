<?php
    include "aero_params.php";

    $id_point = $_POST["id_point"];
    $id_model = $_POST["id_model"];
    $id_init_term = $_POST["id_init_term"];
    $date = $_POST["date"];

    $link = $aero_diagram[$id_point][$id_model][2];
    $link = str_replace("yyyymmddhh", formDate($date, $id_init_term), $link);

    $a = $aero_diagram[$id_point][$id_model][1][$id_init_term][0];
    $b = $aero_diagram[$id_point][$id_model][1][$id_init_term][1];
    $delta = $aero_diagram[$id_point][$id_model][1][$id_init_term][2];

    $j = 0;
    for($i = $a; $i <= $b; $i = $i + $delta) {
        if($i >= 0 && $i < 10) {$str = "0".$i;}
        else {$str = $i;}
        $arr[$j] = str_replace("HH", $str, $link);
        $j++;
    }

    echo json_encode($arr);

    function formDate($date, $id_init_term) {
        $initTermArr = ["00", "06", "12", "18"];
        return $date.$initTermArr[$id_init_term];
    }
?>
