<?php
    session_start();
    if((!isset($_SESSION["date"])) || (isset($_SESSION["date"]) && $_SESSION["time"] + 3600 < time())) {
        $_SESSION["date"] = date("Y-m-d");
        $_SESSION["time"] = time();
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Личный кабинет</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/one_workspace.css">
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=ccccee5e-f337-4a57-872d-3da01c5d9c59" type="text/javascript"></script>
        <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
        <script src ="js/ya_map.js" type="text/javascript"></script>
        <script src="js/jq.js"></script>
    </head>
    <body>
        <div class="header_wrapper">
            <header>
                <div class="flex">
                    <div class="logo">
                        <img src="img/logo-hmc.png" alt="logo">
                    </div>

                    <div class="main_text"><a href="http://u2019.meteoinfo.ru/services/moscow/index.php">Гидрометцентр России</a></div>
                </div>
                <div class="flex">
                    <div class="feedback_button">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSf6DfYoNiEdB022UzWBNrNbaQ97IbzQaROFSCA7_ANJ3ThjVQ/viewform" target="_blank">Оставить отзыв</a>
                    </div>

                    <div class="extra_info">
                        <a href="http://u2019.meteoinfo.ru/services/moscow/extra_info.php">Дополнительная информация</a>
                    </div>

                    <form class="form">
                        <p>Рабочие области:</p>
                        <div class="radio-container">
                            <div class="form-item radio-btn nth-2">
                                <input type="radio" name="option1" id="radio1" value = "1" checked>
                                <label for="radio1">Одна</label>
                            </div>
                            <div class="form-item radio-btn nth-2">
                                <input type="radio" name="option1" id="radio2"  value = "2" onchange="window.location.href = 'http://u2019.meteoinfo.ru/services/moscow/workspace_2.php?type_1=map&type_2=map';">
                                <label for="radio2">Две</label>
                            </div>
                        </div>
                    </form>
                </div>
            </header>
            <nav class = "horizontal">
                <ul class="nav">
                    <?php
                        $url = "http://u2019.meteoinfo.ru/services/moscow/workspace_1.php?type=";
                        $navArr = [["type" => "map", "title" => "Карты прогнозов COSMO-Ru"],["type" => "meteogram", "title" => "Метеограммы"],["type" => "adiagram", "title" => "Аэрологические диаграммы"]];
                        for ($row = 0; $row < 3; $row++) {
                            $class = ($_GET["type"] == $navArr[$row]["type"])?" class='selected'":"";
                            echo "<li".$class."><a href='".$url.$navArr[$row]['type']."'>".$navArr[$row]['title']."</a></li>";
                        }
                    ?>
                    <li><a href="http://u2019.meteoinfo.ru/services/moscow/table">Табличные данные</a></li>
                </ul>
            </nav>
        </div>
        <div class="wrapper">
            <nav class = "opened">
                <div class="nav_header">Навигация</div>
                <ul class="nav">
                    <?php
                    $url = "http://u2019.meteoinfo.ru/services/moscow/workspace_1.php?type=";
                        $navArr = [["type" => "map", "title" => "Карты прогнозов COSMO-Ru"],["type" => "meteogram", "title" => "Метеограммы"],["type" => "adiagram", "title" => "Аэрологические диаграммы"]];
                        for ($row = 0; $row < 3; $row++) {
                            $class = ($_GET["type"] == $navArr[$row]["type"])?" class='selected'":"";
                            echo "<li".$class."><a href='".$url.$navArr[$row]['type']."'>".$navArr[$row]['title']."</a></li>";
                        }
                    ?>
                    <li><a href="http://u2019.meteoinfo.ru/services/moscow/table">Табличные данные</a></li>
                </ul>
            </nav>
            <!--map-->
            <?php if($_GET["type"] == "map") { ?>
                <section id="section">
                    <div class="map_container_wrapper">
                        <div class="previous_button" id="previous">
                            <img src="img/previous.png" alt="previous">
                        </div>
                        <div class="map_container">
                            <img id="map" class="map grace" src="" alt="map">
                            <img id="plug" src="img/loading.gif" alt="loading">
                            <div id="not_find" class="not_find">Попробуйте выбрать другую модель или другие параметры.</div>
                        </div>
                        <div class="next_pause_button">
                            <div class="pause_button" id="pause">
                                <img src="img/play.png" alt="play/pause" id="pause_img">
                            </div>
                            <div class="next_button" id="next">
                                <img src="img/next.png" alt="next" id="next_img">
                            </div>
                        </div>
                    </div>
                    <div class="nav_button_wrapper">
                        <div class="nav_button_center">
                            <div id="time_wrapper" class="nav_button"></div>
                        </div>
                    </div>
                </section>
                <div class="nav_popup_bg" onClick = "if( $('.nav_controls_opened').is(':visible') ) { $('.nav_controls_opened').hide(); $('.nav_controls_closed img').css('visibility', 'visible'); $('.nav_popup_bg').hide();}"></div>
                <div class="nav_controls_opened">
                    <div class="nav_header" onClick = "if(window.matchMedia('(max-width: 1431px)').matches) { if( $('.nav_controls_opened').is(':visible') ) { $('.nav_controls_opened').hide(); $('.nav_controls_closed img').css('visibility', 'visible'); $('.nav_popup_bg').hide(); }}">
                        Параметры
                        <img src="img/right-arrow.png" alt="come back">
                    </div>
                    <div id="domen_wrapper" class = "select"></div>
                    <div id="model_wrapper" class = "select"></div>
                    <div id="elem_wrapper" class="select"></div>
                    <div id="init_term_wrapper" class="select">
                        <p class="label">Начальный срок (UTC):</p>
                        <label><input type="radio" name="initTermSel" value="0" onClick="getTime();" checked="checked">00</label>
                        <label><input type="radio" name="initTermSel" value="1" onClick="getTime();">06</label>
                        <label><input type="radio" name="initTermSel" value="2" onClick="getTime();">12</label>
                        <label><input type="radio" name="initTermSel" value="3" onClick="getTime();">18</label>
                    </div>
                    <div id="date_wrapper" class="select">
                        <p class="label">Дата прогноза:</p>
                        <input type="date" id="date" name="dateSel" value="<?php echo $_SESSION['date']; ?>" min="2019-04-20" max="<?php echo date("Y-m-d"); ?>">
                    </div>
                    <div class="select">
                        <p class="label">Скорость воспроизведения:</p>
                        <label><input type="radio" name="speed" value="750">0.75</label>
                        <label><input type="radio" name="speed" value="1000" checked>1</label>
                        <label><input type="radio" name="speed" value="1250">1.25</label>
                        <label><input type="radio" name="speed" value="1500">1.5</label>
                    </div>
                </div>
                <div class="nav_controls_closed" onClick = "if( $('.nav_controls_closed').is(':visible') ) { $('.nav_controls_opened').show(); $('.nav_controls_closed img').css('visibility', 'hidden'); $('.nav_popup_bg').show(); $('.nav_header img').show(); }">
                    <img src="img/double-left.png" alt="open parameters">
                </div>
                <script src="js/js1/map_ajax.js"></script>
            <?php } ?>

        <!--meteogram-->
        <?php if($_GET["type"] == "meteogram") { ?>
            <section id="section">
                <div class="map_container">
                    <img id="map" class="map meteo" src="" alt="map">
                    <img id="plug" src="img/loading.gif" alt="loading">
                    <div id="not_find" class="not_find">Попробуйте выбрать другую модель или другой пункт.</div>
                </div>
                <div id="gmap_container">
                    <div id="meteo_map"></div>
                </div>
            </section>
            <div class="nav_popup_bg" onClick = "if( $('.nav_controls_opened').is(':visible') ) { $('.nav_controls_opened').hide(); $('.nav_controls_closed img').css('visibility', 'visible'); $('.nav_popup_bg').css('display', 'none'); }"></div>
            <div class="nav_controls_opened">
                <div class="nav_header">
                    <a href="#" onClick = "if( $('.nav_controls_opened').is(':visible') ) { $('.nav_controls_opened').hide(); $('.nav_controls_closed img').css('visibility', 'visible'); $('.nav_popup_bg').css('display', 'none'); }">
                        Параметры
                        <img src="img/right-arrow.png" alt="come back">
                    </a>
                </div>
                <div class="select" id="domen_wrapper"></div>
                <div class = "select" id="point_wrapper"></div>
                <div id="gmap_button_wrapper">
                    <button id="gmap_button" onClick="
                    if($('#gmap_container').css('display') == 'none' ) {
                        $('.map_container').hide();
                        $('#gmap_container').show();
                        $('#gmap_button').html('Закрыть карту');
                    }
                    else {
                        $('#gmap_container').hide();
                        $('.map_container').show();
                        $('#gmap_button').html('Показать на карте');
                    }
                    ">Показать на карте</button>
                </div>
                <div class = "select" id="model_wrapper"></div>
                <div class="select" id="init_term_wrapper">
                    <p class="label">Начальный срок (UTC):</p>
                    <label><input type="radio" name="initTermSel" value="0" checked="checked">00</label>
                    <label><input type="radio" name="initTermSel" value="1">06</label>
                    <label><input type="radio" name="initTermSel" value="2">12</label>
                    <label><input type="radio" name="initTermSel" value="3">18</label>
                </div>
                <div class="select" id="date_wrapper">
                    <p class="label">Дата прогноза:</p>
                    <input type="date" id="date" name="forecast_date" value="<?php echo $_SESSION['date']; ?>" min="2019-04-20" max="<?php echo date("Y-m-d"); ?>">
                </div>
            </div>
            <div class="nav_controls_closed" onClick = "if( $('.nav_controls_closed').is(':visible') ) { $('.nav_controls_opened').show(); $('.nav_controls_closed img').css('visibility', 'hidden'); $('.nav_popup_bg').css('display', 'block'); $('.nav_header img').show(); }">
                <img src="img/double-left.png" alt="open parameters">
            </div>
            <div id="l_meteo_popup" class="meteo_popup">
                <div id='l_meteo_popup_bg' class="meteo_popup_bg"></div>
                <div id="l_meteo_popup_cont" class="meteo_workspace">
                    <h2 id="l_meteo_title"></h2>
                    <div id="l_meteo_nav" class="meteo_workspace_nav">
                        <div id="l_model_wrapper"></div>
                        <div id="l_init_term_wrapper">
                            <label for="l_meteo_init_term">Начальный срок (UTC):
                                <select id="l_meteo_init_term">
                                    <option value="0" selected="selected">00</option>
                                    <option value="1">06</option>
                                    <option value="2">12</option>
                                    <option value="3">18</option>
                                 </select>
                            </label>
                        </div>
                        <div id="l_meteo_date_wrapper">
                            <label for="l_date">Дата прогноза:
                                <input type="date" id="l_date" name="forecast_date" value="<?php echo $_SESSION['date']; ?>" min="2019-04-20" max="<?php echo date("Y-m-d"); ?>">
                            </label>
                        </div>
                    </div>
                    <div id="l_meteo_img_wrapper" class="workspace_map">
                        <img id="l_meteo_img" src="" alt="meteogram">
                        <img id="l_plug" src="img/loading.gif" alt="loading">
                        <div id="l_meteo_not_find" class="not_find">Попробуйте выбрать другую модель.</div>
                    </div>
                </div>
            </div>

            <script src="js/js1/meteo_ajax.js"></script>
            <script src="js/js2/l_meteo_ajax.js"></script>
        <?php } ?>

        <!--adiagram-->
        <?php if($_GET["type"] == "adiagram") {
            if(!isset($_POST["objSel"])) {
                $_POST["objSel"] = 0;
            }
        ?>
            <section id="section">
                <div id="map_cont">
                    <div class="map_container_wrapper">
                        <div class="previous_button" id="previous">
                            <img src="img/previous.png" alt="presious">
                        </div>
                        <div class="map_container">
                            <img id="map" class="map aero" src="" alt="map">
                            <img id="plug" src="img/loading.gif" alt="loading">
                            <div id="not_find" class="not_find">Попробуйте выбрать другую модель или другие параметры.</div>
                        </div>
                        <div class="next_pause_button">
                            <div class="pause_button" id="pause">
                                <img src="img/play.png" alt="play/pause" id="pause_img">
                            </div>
                            <div class="next_button" id="next">
                                <img src="img/next.png" alt="next" id="next_img">
                            </div>
                        </div>
                    </div>
                    <div class="nav_button_wrapper">
                        <div class="nav_button_center">
                            <div id="time_wrapper" class="nav_button"></div>
                        </div>
                    </div>
                </div>
                <div id="gmap_container">
                    <div id="aero_map"></div>
                </div>
            </section>
            <div class="nav_popup_bg" onClick = "if( $('.nav_controls_opened').is(':visible') ) { $('.nav_controls_opened').hide(); $('.nav_controls_closed img').css('visibility', 'visible'); $('.nav_popup_bg').css('display', 'none'); }"></div>
            <div class="nav_controls_opened">
                <div class="nav_header">
                    <a href="#" onClick = "if( $('.nav_controls_opened').is(':visible') ) { $('.nav_controls_opened').hide(); $('.nav_controls_closed img').css('visibility', 'visible'); $('.nav_popup_bg').css('display', 'none'); }">
                        Параметры
                        <img src="img/right-arrow.png" alt="come back">
                    </a>
                </div>
                <div id="point_wrapper" class = "select"></div>
                <div id="gmap_button_wrapper">
                    <button id="gmap_button" onClick="
                    if($('#gmap_container').css('display') == 'none' ) {
                        $('#map_cont').hide();
                        $('#gmap_container').show();
                        $('#gmap_button').html('Закрыть карту');
                    }
                    else {
                        $('#gmap_container').hide();
                        $('#map_cont').show();
                        $('#gmap_button').html('Показать на карте');
                    }
                    ">Показать на карте</button>
                </div>
                <div id="model_wrapper" class = "select"></div>
                <div id="init_term_wrapper" class="select">
                    <p class="label">Начальный срок (UTC):</p>
                    <label><input type="radio" name="initTermSel" value="0" checked="checked">00</label>
                    <label><input type="radio" name="initTermSel" value="1">06</label>
                    <label><input type="radio" name="initTermSel" value="2">12</label>
                    <label><input type="radio" name="initTermSel" value="3">18</label>
                </div>
                <div id="date_wrapper" class="select">
                    <p class="label">Дата прогноза:</p>
                    <input type="date" id="date" name="forecast_date" value="<?php echo $_SESSION['date']; ?>" min="2019-04-20" max="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="select">
                    <p class="label">Скорость воспроизведения:</p>
                    <label><input type="radio" name="speed" value="750">0.75</label>
                    <label><input type="radio" name="speed" value="1000" checked>1</label>
                    <label><input type="radio" name="speed" value="1250">1.25</label>
                    <label><input type="radio" name="speed" value="1500">1.5</label>
                </div>
            </div>
            <div class="nav_controls_closed" onClick = "if( $('.nav_controls_closed').is(':visible') ) { $('.nav_controls_opened').show(); $('.nav_controls_closed img').css('visibility', 'hidden'); $('.nav_popup_bg').css('display', 'block'); $('.nav_header img').show();}">
                <img src="img/double-left.png" alt="open parameters">
            </div>
            <div id="l_aero_popup" class="meteo_popup">
                <div id='l_aero_popup_bg' class="meteo_popup_bg"></div>
                <div id="l_aero_popup_cont" class="meteo_workspace">
                    <h2 id="l_aero_title"></h2>
                    <div id="l_aero_nav" class="meteo_workspace_nav">
                        <div id="l_aero_model_wrapper"></div>
                        <div id="l_aero_init_term_wrapper">
                            <label for="l_aero_init_term">Начальный срок (UTC):
                                <select id="l_aero_init_term">
                                    <option value="0" selected="selected">00</option>
                                    <option value="1">06</option>
                                    <option value="2">12</option>
                                    <option value="3">18</option>
                                </select>
                            </label>
                        </div>
                        <div id="l_aero_date_wrapper">
                            <label for="l_date">Дата прогноза:
                                <input type="date" id="l_date" name="forecast_date" value="<?php echo $_SESSION['date_1']; ?>" min="2019-04-20" max="<?php echo date("Y-m-d"); ?>">
                            </label>
                        </div>
                    </div>
                    <div id="l_aero_button" class="aero_button">
                        <button class="controls" id="l_aero_previous">&lt;</button>
                        <div id="l_aero_time_wrapper" style="display: inline;"></div>
                        <button class="controls" id="l_aero_next">&gt;</button>
                        <button class="controls" id="l_aero_pause">&#9658;</button>
                        <label for="l_aero_speed">Скорость воспроизведения:
                            <select id="l_aero_speed">
                                <option value="750">0.75</option>
                                <option value="1000" selected>1</option>
                                <option value="1250">1.25</option>
                            </select>
                        </label>
                    </div>
                    <div id="l_aero_img_wrapper" class="workspace_map">
                        <img id="l_aero_img" src="" alt="aerogram">
                        <img id="l_plug" src="img/loading.gif" alt="loading">
                        <div id="l_aero_not_find" class="not_find">Нет аэрологических диаграмм для данного пункта. Попробуйте выбрать другие параметры.</div>
                    </div>
                </div>
            </div>
            <script src="js/js1/aero_ajax.js"></script>
            <script src="js/js2/l_aero_ajax.js"></script>
        <?php } ?>

        <script src="js/js1/accordeon.js"></script>
        <script src="js/js1/nav.js"></script>
    </body>
</html>
