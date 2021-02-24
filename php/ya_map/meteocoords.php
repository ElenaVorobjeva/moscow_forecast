<?php
    include "../../../meteo_params.php";

    $i = 0;
    foreach ($meteograms as $domenKey => $pointList) {
        if($domenKey != 0) {
            foreach ($pointList as $pointKey => $value) {
                if($pointKey != 0) {
                    $arr[$i]["title"] = $value[0];
                    $arr[$i]["lat"] = $value[1][0];
                    $arr[$i]["lng"] = $value[1][1];
                    $arr[$i]["domen"] = $domenKey;
                    $arr[$i]["point"] = $pointKey;
                    $i++;
                }
            }
        }
    }

    echo json_encode($arr);

?>
