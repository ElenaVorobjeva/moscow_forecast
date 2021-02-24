<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

    include "meteo_params.php";

    $id_point = $_POST["id_point"];
    $date = $_POST["date"];
    $init_term = $_POST["init_term"];
    $link = replaceData($meteograms[$id_point]['link'], $date, $init_term);

    $file_headers = get_headers($link);
    if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
        echo "<p class='text-center file-error'><i class='fa fa-exclamation-triangle fa-5x' aria-hidden='true'></i></p>";
        echo "<p class='text-center file-error'>К сожалению, данные не найдены. Попробуйте выбрать другие параметры.</p>";
    }
    else {
        $dataArr = file($link);

        echo '<table class="table table-bordered table-hover">';
            echo '<thead class="thead-dark">';
                echo '<tr>';
                    echo '<th>HH</th>';
                    echo '<th>PMSL</th>';
                    echo '<th colspan = "2">DF10M</th>';
                    echo '<th colspan = "2">DF500M</th>';
                    echo '<th colspan = "2">DF850</th>';
                    echo '<th colspan = "2">DF700</th>';
                    echo '<th colspan = "2">DF500</th>';
                    echo '<th>TG</th>';
                    echo '<th>T2M</th>';
                    echo '<th>TD2M</th>';
                    echo '<th>T850</th>';
                    echo '<th>HML</th>';
                    echo '<th>=</th>';
                    echo '<th>RR</th>';
                    echo '<th>RS</th>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>ч.</th>';
                    echo '<th>гПа</th>';
                    echo '<th colspan = "10">&deg; и м/с</th>';
                    echo '<th colspan = "4">&deg;С</th>';
                    echo '<th colspan = "2">0..8</th>';
                    echo '<th colspan = "2">мм</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            for($i = 42; $i < count($dataArr); $i++) {
                echo "<tr>";
                $dataArr[$i] = trim($dataArr[$i]);
                $dataStrArr = preg_split("/[\s]+/", $dataArr[$i]);
                for($j = 0; $j < count($dataStrArr); $j++) {
                    if(strstr($dataStrArr[$j], '/')) {
                        $dataStrArr[$j] = substr($dataStrArr[$j], 0, -1);
                    }
                    if($j >= 0 && $j <= 14 || $j == 16 || $j == 19 || $j == 20 || $j == 23 || $j == 24) {
                        echo "<td>".trim($dataStrArr[$j])."</td>";
                    }
                }
                echo "</tr>";
            }

            echo '</tbody>';
        echo '</table>';
    }

    function replaceData($link, $date, $init_term) {
        $link = str_replace('yyyymmdd', $date, $link);
        return str_replace('hh', $init_term, $link);
    }

?>
