<?php
    include "../../../map_params.php";

    $id_domen = $_POST["id_domen"];
    $id_model = $_POST["id_model"];
    $id_elem = $_POST["id_elem"];
    $id_init_term = $_POST["id_init_term"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    $link = $maps[$id_domen][$id_model][$id_elem][2];
    $link = str_replace("yyyymmddhh", formDate($date, $id_init_term), $link);

    $a = $maps[$id_domen][$id_model][$id_elem][1][$id_init_term][0];
    $b = $maps[$id_domen][$id_model][$id_elem][1][$id_init_term][1];
    $delta = $maps[$id_domen][$id_model][$id_elem][1][$id_init_term][2];

    $j = 0;
    if(strpos($link, "HHH") === false) {
        //HH
        for($i = $a; $i <= $b; $i = $i + $delta) {
            if($i >= 0 && $i < 10) {$str = "0".$i;}
            else {$str = $i;}
            $arr[$j] = str_replace("HH", $str, $link);
            $j++;
        }
    }
    else {
        // HHH
        for($i = $a; $i <= $b; $i = $i + $delta) {
            if($i >= 0 && $i < 10) {$str = "00".$i;}
            else if($i >= 10 && $i <= 99) {$str = "0".$i;}
            else {$str = $i;}
            $arr[$j] = str_replace("HHH", $str, $link);
            $j++;
        }
    }


    echo json_encode($arr);

    function formDate($date, $id_init_term) {
        $initTermArr = ["00", "06", "12", "18"];
        return $date.$initTermArr[$id_init_term];
    }
?>
