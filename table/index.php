<?php
    include "php/meteo_params.php";
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Табличные данные</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/index.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="return col-12 pull-left">
                    <a href = "javascript:history.back()">Вернуться назад</a>
                </div>
                <div class="feedback col-12 pull-right">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSf6DfYoNiEdB022UzWBNrNbaQ97IbzQaROFSCA7_ANJ3ThjVQ/viewform" target="_blank">Оставить отзыв</a>
                </div>
                <header>
                    <div class="col-12">
                        <h1>Табличные данные</h1>
                    </div>
                </header>
                <section id="parameters">
                    <div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="model">Модель</label>
                                <select id="model" class="form-control">
                                    <option value="0" selected>COSMO-Ru-1</option>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="point">Пункт</label>
                                <select id="point" class="form-control">
                                    <?php
                                        foreach ($meteograms as $key => $value) {
                                            $selected = ($key == 0) ? ' selected="selected"' : '';
                                            echo "<option value='".$key."'".$selected.">".$value['name']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="date">Дата прогноза <i id="helper-icon" class="fa fa-question-circle" aria-hidden="true"></i></label>
                                <div id="helper" class="helper">
                                    <button type="button" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    Введите дату в формате <span>дд.мм.гггг</span>
                                </div>
                                <input id="date" type="text" class="form-control" name="date" value="<?php echo date("d.m.Y"); ?>" size="10" maxlength="10">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="init_term">Начальный срок</label>
                                <select id="init_term" class="form-control">
                                    <option value="00" selected>00</option>
                                    <option value="06">06</option>
                                    <option value="12">12</option>
                                    <option value="18">18</option>
                                </select>
                            </div>
                        </div>
                        <p class="small-grey">Изменив параметры, не забудьте нажать на кнопку <span>Выбрать</span>.</p>
                        <button class="btn btn-primary pull-right" onclick="getForcast();">
                            <i class="loading fa fa-spinner fa-pulse fa-fw"></i>
                            <span class="loading sr-only">Loading...</span>
                            Выбрать
                        </button>
                    </div>
                    <div class="clear"></div>
                </section>
                <section id="meaning">
                    <div id="accordion">
                        <div class="acc-header">
                            <p id="acc-header-link"><span>Значения параметров <i class="fa fa-angle-double-down" aria-hidden="true"></i></span></p>
                        </div>
                        <div id="acc-body" class="acc-body">
                            <table class="table">
                                <tr><td>HH</td><td>Время прогноза</td><td>ч.</td></tr>
                                <tr><td>PMSL</td><td>Давление на у.м.</td><td>гПа</td></tr>
                                <tr><td>DF10M</td><td>Направление и скорость ветра на высоте 10 м</td><td>&deg; и м/с</td></tr>
                                <tr><td>DF500M</td><td>Направление и скорость ветра на уровне 950 гПа</td><td>&deg; и м/с</td></tr>
                                <tr><td>DF850</td><td>Направление и скорость ветра на уровне 850 гПа</td><td>&deg; и м/с</td></tr>
                                <tr><td>DF700</td><td>Направление и скорость ветра на уровне 700 гПа</td><td>&deg; и м/с</td></tr>
                                <tr><td>DF500</td><td>Направление и скорость ветра на уровне 500 гПа</td><td>&deg; и м/с</td></tr>
                                <tr><td>TG</td><td>Температура на поверхности земли</td><td>&deg;С</td></tr>
                                <tr><td>T2M</td><td>Температура на высоте 2 м</td><td>&deg;С</td></tr>
                                <tr><td>TD2M</td><td>Точка росы на высоте 2 м</td><td>&deg;С</td></tr>
                                <tr><td>T850</td><td>Температура на уровне 850 гПа</td><td>&deg;С</td></tr>
                                <tr><td>HML</td><td>Облачность (верхний, средний и нижний ярусы)</td><td>0..8</td></tr>
                                <tr><td> = </td><td>Наземный туман</td><td>0..8</td></tr>
                                <tr><td>RR</td><td>Количество осадков</td><td>мм</td></tr>
                                <tr><td>RS</td><td>Количество снега</td><td>мм</td></tr>
                            </table>
                        </div>
                    </div>
                </section>
                <section id="table_wrapper">
                    <div id="table"></div>
                </section>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>
