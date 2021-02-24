<?php
    include "meteo_params.php";

    $id_domen = $_POST["id_domen"];
    $id_point = $_POST["id_point"];
    $id_model = $_POST["id_model"];
    $id_init_term = $_POST["id_init_term"];
    $date = $_POST["date"];

    $i = 0;
    foreach ($meteograms[$id_domen] as $key => $value) {
        if($key != 0) {
            if(isset($value[$id_model][1])) {
                $link = $value[$id_model][1];
                $link = str_replace("yyyymmddhh", formDate($date, $id_init_term), $link);
                $arr["links"][$i] = $link; //массив со всеми подходящими ссылками
                $arr["id"][$i] = "#point_".$key;
                if($key == $id_point) {
                    $arr["current"] = $i; //id текущего элемента массива ссылок
                }
                $i++;
            }
        }
    }
    $arr["end"] = $i-1; //id последнего элемента массива ссылок

    echo json_encode($arr);

    function formDate($date, $id_init_term) {
        $initTermArr = ["00", "06", "12", "18"];
        return $date.$initTermArr[$id_init_term];
    }


?>
