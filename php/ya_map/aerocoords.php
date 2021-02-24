<?php
    include "../aero/aero_params.php";

    $i = 0;
    foreach ($aero_diagram as $key => $value) {
        if($key != 0) {
            $arr[$i]["title"] = $value[0];
            $arr[$i]["lat"] = $value[1][0];
            $arr[$i]["lng"] = $value[1][1];
            $arr[$i]["point"] = $key;
            $i++;
        }
    }

    echo json_encode($arr);

?>
