<?php
   session_start();
   if((!isset($_SESSION["date_1"])) || (isset($_SESSION["date_1"]) && $_SESSION["time_1"] + 3600 < time())) {
       $_SESSION["date_1"] = date("Y-m-d");
       $_SESSION["time_1"] = time();
   }
   if((!isset($_SESSION["date_2"])) || (isset($_SESSION["date_2"]) && $_SESSION["time_2"] + 3600 < time())) {
       $_SESSION["date_2"] = date("Y-m-d");
       $_SESSION["time_2"] = time();
   }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Личный кабинет</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/adaptive.css">
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=ccccee5e-f337-4a57-872d-3da01c5d9c59" type="text/javascript"></script>
        <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
        <script src ="js/ya_map.js" type="text/javascript"></script>
        <script src="js/jq.js"></script>
    </head>

    <body>
        <script type="text/javascript">
            $(window).scroll(function() {
                    $('header').toggleClass('scroll', $(this).scrollTop() > 100);
            });
        </script>
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
                            <input type="radio" name="option1" id="radio1" value = "1" onchange="window.location.href = 'http://u2019.meteoinfo.ru/services/moscow/workspace_1.php?type=meteogram';">
                            <label for="radio1">Одна</label>
                        </div>
                        <div class="form-item radio-btn nth-2">
                            <input type="radio" name="option1" id="radio2"  value = "2" checked>
                            <label for="radio2">Две</label>
                        </div>
                    </div>
                </form>
            </div>
        </header>

        <div id="section_wrapper">
            <section id="left_part">
                <?php if($_GET["type_1"] == "map") { ?>
                    <script>
                        jQuery(function($){
                            $(window).on('load resize', function() {
                                resizeImg("#l_map", "#l_map_wrapper", 430, 125);
                            });
                            $( "#l_map" ).on("load", function() {
                                resizeImg("#l_map", "#l_map_wrapper", 430, 125);
                            });
                        });
                    </script>
                    <div id="l_workspace" class="workspace">
                        <nav id="l_nav" class = "horizontal">
                            <ul class="nav">
                                <?php
                                    $url = "http://u2019.meteoinfo.ru/services/moscow/workspace_2.php?type_1=";
                                    $navArr = [["type" => "map", "title" => "Карты прогнозов COSMO-Ru"],["type" => "meteogram", "title" => "Метеограммы"],["type" => "adiagram", "title" => "Аэрологические диаграммы"]];
                                    for ($row = 0; $row < 3; $row++) {
                                        $class = ($_GET["type_1"] == $navArr[$row]["type"])?" class='selected'":"";
                                        echo "<li".$class."><a href='".$url.$navArr[$row]['type']."&type_2=".$_GET['type_2']."'>".$navArr[$row]['title']."</a></li>";
                                    }
                                ?>
                            </ul>
                        </nav>
                        <div id="l_nav_wrapper" class="workspace_nav_wrapper">
                            <div id="l_nav" class="workspace_nav">
                                <div class="select_wrapper">
                                    <label for="l_domen">Домен:
                                        <select id="l_domen" class="domen" name="l_domen" onChange="l_getModelList();"></select>
                                    </label>
                                    <label for="l_model">Модель:
                                        <select id="l_model" class="model" name="l_model" onChange="l_getElemList();"></select>
                                    </label>
                                    <label for="l_elem">Метеоэлементы:
                                        <select id="l_elem" class="elem" name="l_elem" onChange="l_getTime();"></select>
                                    </label>
                                </div>
                                <div class="select_wrapper">
                                    <label for="l_init_term">Начальный срок (UTC):
                                        <select id="l_init_term" class="init_term" name="l_init_term" onChange="l_getTime();">
                                            <option value="0" selected="selected">00</option>
                                            <option value="1">06</option>
                                            <option value="2">12</option>
                                            <option value="3">18</option>
                                        </select>
                                    </label>
                                    <label for="l_date">Дата прогноза:
                                        <input type="date" id="l_date" name="forecast_date" value="<?php echo $_SESSION['date_1']; ?>" min="2019-04-20" max="<?php echo date("Y-m-d"); ?>">
                                    </label>
                                </div>
                            </div>
                            <div id="l_button" class="workspace_button">
                                <button class="controls" id="l_previous">&lt;</button>
                                <div id="l_time_wrapper" style="display: inline;"></div>
                                <button class="controls" id="l_next">&gt;</button>
                                <button class="controls" id="l_pause">&#9658;</button>
                                <br />
                                <label for="l_speed">Скорость воспроизведения:
                                    <select id="l_speed">
                                        <option value="750">0.75</option>
                                        <option value="1000" selected>1</option>
                                        <option value="1250">1.25</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div id="l_map_wrapper" class="workspace_map">
                            <img id="l_map" src="" alt="map">
                            <img id="l_plug" src="img/loading.gif" alt="loading">
                            <div id="l_not_find" class="not_find">Попробуйте выбрать другую модель или параметры.</div>
                        </div>
                    </div>
                    <script src="js/js2/l_map_ajax.js"></script>
                <?php } ?>

                <?php if($_GET["type_1"] == "meteogram") { ?>
                    <div id="l_meteogram">
                        <div class="header">
                            <nav id="l_nav" class = "horizontal">
                                <ul class="nav">
                                    <?php
                                        $url = "http://u2019.meteoinfo.ru/services/moscow/workspace_2.php?type_1=";
                                        $navArr = [["type" => "map", "title" => "Карты прогнозов COSMO-Ru"],["type" => "meteogram", "title" => "Метеограммы"],["type" => "adiagram", "title" => "Аэрологические диаграммы"]];
                                        for ($row = 0; $row < 3; $row++) {
                                            $class = ($_GET["type_1"] == $navArr[$row]["type"])?" class='selected'":"";
                                            echo "<li".$class."><a href='".$url.$navArr[$row]['type']."&type_2=".$_GET['type_2']."'>".$navArr[$row]['title']."</a></li>";
                                        }
                                    ?>
                                </ul>
                            </nav>
                            <button id="l_meteo_list_button" onClick="if($('#l_meteo_list_wrapper').css('display') == 'none' ){ $('#l_meteo_list_wrapper').show(); $('#l_meteo_map').hide(); $('#l_meteo_list_button').html('Показать на карте');} else{ $('#l_meteo_list_wrapper').hide(); $('#l_meteo_map').show(); $('#l_meteo_list_button').html('Закрыть карту');}">Показать на карте</button>
                        </div>
                        <div id="l_meteo_map" class="map"></div>
                        <div id="l_meteo_list_wrapper" class="list"></div>
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
                                    <div id="l_date_wrapper">
                                        <label for="l_date">Дата прогноза:
                                            <input type="date" id="l_date" name="forecast_date" value="<?php echo $_SESSION['date_1']; ?>" min="2019-04-20" max="<?php echo date("Y-m-d"); ?>">
                                        </label>
                                    </div>
                                </div>
                                <script>
                                    jQuery(function($){
                                        $("#l_meteo_img").on('load resize', function() {
                                            resizeImg("#l_meteo_img", "#l_meteo_img_wrapper", 200, 100);
                                        });
                                        $(window).on('load resize', function() {
                                            resizeImg("#l_meteo_img", "#l_meteo_img_wrapper", 200, 100);
                                        });
                                    });
                                </script>
                                <div id="l_meteo_img_wrapper" class="workspace_map">
                                    <img id="l_meteo_img" src="" alt="meteogram">
                                    <img id="l_plug" src="img/loading.gif" alt="loading">
                                    <div id="l_meteo_not_find" class="not_find">Попробуйте выбрать другую модель.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="js/js2/l_meteo_ajax.js"></script>
                <?php } ?>

                <?php if($_GET["type_1"] == "adiagram") { ?>
                    <div id="l_aerogram">
                        <div class="header">
                            <nav id="l_nav" class = "horizontal">
                                <ul class="nav">
                                    <?php
                                        $url = "http://u2019.meteoinfo.ru/services/moscow/workspace_2.php?type_1=";
                                        $navArr = [["type" => "map", "title" => "Карты прогнозов COSMO-Ru"],["type" => "meteogram", "title" => "Метеограммы"],["type" => "adiagram", "title" => "Аэрологические диаграммы"]];
                                        for ($row = 0; $row < 3; $row++) {
                                            $class = ($_GET["type_1"] == $navArr[$row]["type"])?" class='selected'":"";
                                            echo "<li".$class."><a href='".$url.$navArr[$row]['type']."&type_2=".$_GET['type_2']."'>".$navArr[$row]['title']."</a></li>";
                                        }
                                    ?>
                                </ul>
                            </nav>
                            <button id="l_aero_list_button" onClick="if($('#l_aero_list_wrapper').css('display') == 'none' ){ $('#l_aero_list_wrapper').show(); $('#l_aero_map').hide(); $('#l_aero_list_button').html('Показать на карте');} else{ $('#l_aero_list_wrapper').hide(); $('#l_aero_map').show(); $('#l_aero_list_button').html('Закрыть карту');}">Показать на карте</button>
                        </div>
                        <div id="l_aero_map" class="map"></div>
                        <div id="l_aero_list_wrapper" class="list"></div>
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
                                <script>
                                    jQuery(function($){
                                        $("#l_aero_img").on('load resize', function() {
                                            resizeImg("#l_aero_img", "#l_aero_img_wrapper", 270, 100);
                                        });
                                        $(window).on('load resize', function() {
                                            resizeImg("#l_aero_img", "#l_aero_img_wrapper", 270, 100);
                                        });
                                    });
                                </script>
                                <div id="l_aero_img_wrapper" class="workspace_map">
                                    <img id="l_aero_img" src="" alt="aerogram">
                                    <img id="l_plug" src="img/loading.gif" alt="loading">
                                    <div id="l_aero_not_find" class="not_find">Нет аэрологических диаграмм для данного пункта. Попробуйте выбрать другие параметры.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="js/js2/l_aero_ajax.js"></script>
                <?php } ?>
            </section>


            <section id="right_part">
                <?php if($_GET["type_2"] == "map") { ?>
                    <script>
                        jQuery(function($){
                            $(window).on('load resize', function() {
                                resizeImg("#r_map", "#r_map_wrapper", 430, 125);
                            });
                            $( "#r_map" ).on("load", function() {
                                resizeImg("#r_map", "#r_map_wrapper", 430, 125);
                            });
                        });
                    </script>
                    <div id="r_workspace" class="workspace">
                        <nav id="r_nav" class = "horizontal">
                            <ul class="nav">
                                <?php
                                    $url = "http://u2019.meteoinfo.ru/services/moscow/workspace_2.php?type_1=";
                                    $navArr = [["type" => "map", "title" => "Карты прогнозов COSMO-Ru"],["type" => "meteogram", "title" => "Метеограммы"],["type" => "adiagram", "title" => "Аэрологические диаграммы"]];
                                    for ($row = 0; $row < 3; $row++) {
                                        $class = ($_GET["type_2"] == $navArr[$row]["type"])?" class='selected'":"";
                                        echo "<li".$class."><a href='".$url.$_GET['type_1']."&type_2=".$navArr[$row]['type']."'>".$navArr[$row]['title']."</a></li>";
                                    }
                                ?>
                            </ul>
                        </nav>
                        <div id="r_nav_wrapper" class="workspace_nav_wrapper">
                            <div id="r_nav" class="workspace_nav">
                                <div class="select_wrapper">
                                    <label for="r_domen">Домен:
                                        <select id="r_domen" class="domen" name="r_domen" onChange="r_getModelList();"></select>
                                    </label>
                                    <label for="r_model">Модель:
                                        <select id="r_model" class="model" name="r_model" onChange="r_getElemList();"></select>
                                    </label>
                                    <label for="r_elem">Метеоэлементы:
                                        <select id="r_elem" class="elem" name="r_elem" onChange="r_getTime();"></select>
                                    </label>
                                </div>
                                <div class="select_wrapper">
                                    <label for="r_init_term">Начальный срок (UTC):
                                        <select id="r_init_term" class="init_term" name="r_init_term" onChange="r_getTime();">
                                            <option value="0" selected="selected">00</option>
                                            <option value="1">06</option>
                                            <option value="2">12</option>
                                            <option value="3">18</option>
                                        </select>
                                    </label>
                                    <label for="r_date">Дата прогноза:
                                        <input type="date" id="r_date" name="forecast_date" value="<?php echo $_SESSION['date_2']; ?>" min="2019-04-20" max="<?php echo date("Y-m-d"); ?>">
                                    </label>
                                </div>
                            </div>
                            <div id="r_button" class="workspace_button">
                                <button class="controls" id="r_previous">&lt;</button>
                                <div id="r_time_wrapper" style="display: inline;"></div>
                                <button class="controls" id="r_next">&gt;</button>
                                <button class="controls" id="r_pause">&#9658;</button>
                                <br />
                                <label for="r_speed">Скорость воспроизведения:
                                    <select id="r_speed">
                                        <option value="750">0.75</option>
                                        <option value="1000" selected>1</option>
                                        <option value="1250">1.25</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div id="r_map_wrapper" class="workspace_map">
                            <img id="r_map" src="" alt="map">
                            <img id="r_plug" src="img/loading.gif" alt="loading">
                            <div id="r_not_find" class="not_find">Попробуйте выбрать другую модель или параметры.</div>
                        </div>
                    </div>
                    <script src="js/js2/r_map_ajax.js"></script>
                <?php } ?>

                <?php if($_GET["type_2"] == "meteogram") { ?>
                    <div id="r_meteogram">
                        <div class="header">
                            <nav id="r_nav" class = "horizontal">
                                <ul class="nav">
                                    <?php
                                        $url = "http://u2019.meteoinfo.ru/services/moscow/workspace_2.php?type_1=";
                                        $navArr = [["type" => "map", "title" => "Карты прогнозов COSMO-Ru"],["type" => "meteogram", "title" => "Метеограммы"],["type" => "adiagram", "title" => "Аэрологические диаграммы"]];
                                        for ($row = 0; $row < 3; $row++) {
                                            $class = ($_GET["type_2"] == $navArr[$row]["type"])?" class='selected'":"";
                                            echo "<li".$class."><a href='".$url.$_GET['type_1']."&type_2=".$navArr[$row]['type']."'>".$navArr[$row]['title']."</a></li>";
                                        }
                                    ?>
                                </ul>
                            </nav>
                            <button id="r_meteo_list_button" onClick="if($('#r_meteo_list_wrapper').css('display') == 'none' ){ $('#r_meteo_list_wrapper').show(); $('#r_meteo_map').hide(); $('#r_meteo_list_button').html('Показать на карте');} else{ $('#r_meteo_list_wrapper').hide(); $('#r_meteo_map').show(); $('#r_meteo_list_button').html('Закрыть карту');}">Показать на карте</button>
                        </div>
                        <div id="r_meteo_map" class="map"></div>
                        <div id="r_meteo_list_wrapper" class="list"></div>
                        <div id="r_meteo_popup" class="meteo_popup">
                            <div id='r_meteo_popup_bg' class="meteo_popup_bg"></div>
                            <div id="r_meteo_popup_cont" class="meteo_workspace">
                                <h2 id="r_meteo_title"></h2>
                                <div id="r_meteo_nav" class="meteo_workspace_nav">
                                    <div id="r_model_wrapper"></div>
                                    <div id="r_init_term_wrapper">
                                        <label for="r_meteo_init_term">Начальный срок (UTC):
                                            <select id="r_meteo_init_term">
                                                <option value="0" selected="selected">00</option>
                                                <option value="1">06</option>
                                                <option value="2">12</option>
                                                <option value="3">18</option>
                                            </select>
                                       </label>
                                   </div>
                                   <div id="r_date_wrapper">
                                        <label for="r_date">Дата прогноза:
                                            <input type="date" id="r_date" name="forecast_date" value="<?php echo $_SESSION['date_2']; ?>" min="2019-04-20" max="<?php echo date("Y-m-d"); ?>">
                                        </label>
                                   </div>
                                </div>
                                <script>
                                jQuery(function($){
                                    $("#r_meteo_img").on('load resize', function() {
                                        resizeImg("#r_meteo_img", "#r_meteo_img_wrapper", 200, 100);
                                    });
                                    $(window).on('load resize', function() {
                                        resizeImg("#r_meteo_img", "#r_meteo_img_wrapper", 200, 100);
                                    });
                                });
                                </script>
                                <div id="r_meteo_img_wrapper" class="workspace_map">
                                    <img id="r_meteo_img" src="" alt="meteogram">
                                    <img id="r_plug" src="img/loading.gif" alt="loading">
                                    <div id="r_meteo_not_find" class="not_find">Попробуйте выбрать другую модель.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="js/js2/r_meteo_ajax.js"></script>
                <?php } ?>

                <?php if($_GET["type_2"] == "adiagram") { ?>
                    <div id="r_aerogram">
                        <div class="header">
                            <nav id="r_nav" class = "horizontal">
                                <ul class="nav">
                                    <?php
                                        $url = "http://u2019.meteoinfo.ru/services/moscow/workspace_2.php?type_1=";
                                        $navArr = [["type" => "map", "title" => "Карты прогнозов COSMO-Ru"],["type" => "meteogram", "title" => "Метеограммы"],["type" => "adiagram", "title" => "Аэрологические диаграммы"]];
                                        for ($row = 0; $row < 3; $row++) {
                                            $class = ($_GET["type_2"] == $navArr[$row]["type"])?" class='selected'":"";
                                            echo "<li".$class."><a href='".$url.$_GET['type_1']."&type_2=".$navArr[$row]['type']."'>".$navArr[$row]['title']."</a></li>";
                                        }
                                    ?>
                                </ul>
                            </nav>
                            <button id="r_aero_list_button" onClick="if($('#r_aero_list_wrapper').css('display') == 'none' ){ $('#r_aero_list_wrapper').show(); $('#r_aero_map').hide(); $('#r_aero_list_button').html('Показать на карте');} else{ $('#r_aero_list_wrapper').hide(); $('#r_aero_map').show(); $('#r_aero_list_button').html('Закрыть карту');}">Показать на карте</button>
                        </div>
                        <div id="r_aero_map" class="map"></div>
                        <div id="r_aero_list_wrapper" class="list"></div>
                        <div id="r_aero_popup" class="meteo_popup">
                            <div id='r_aero_popup_bg' class="meteo_popup_bg"></div>
                            <div id="r_aero_popup_cont" class="meteo_workspace">
                                <h2 id="r_aero_title"></h2>
                                <div id="r_aero_nav" class="meteo_workspace_nav">
                                    <div id="r_aero_model_wrapper"></div>
                                    <div id="r_aero_init_term_wrapper">
                                        <label for="r_aero_init_term">Начальный срок (UTC):
                                            <select id="r_aero_init_term">
                                                <option value="0" selected="selected">00</option>
                                                <option value="1">06</option>
                                                <option value="2">12</option>
                                                <option value="3">18</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div id="r_aero_date_wrapper">
                                        <label for="r_date">Дата прогноза:
                                            <input type="date" id="r_date" name="forecast_date" value="<?php echo $_SESSION['date_2']; ?>" min="2019-04-20" max="<?php echo date("Y-m-d"); ?>">
                                        </label>
                                    </div>
                                </div>
                                <div id="r_aero_button" class="aero_button">
                                    <button class="controls" id="r_aero_previous">&lt;</button>
                                    <div id="r_aero_time_wrapper" style="display: inline;"></div>
                                    <button class="controls" id="r_aero_next">&gt;</button>
                                    <button class="controls" id="r_aero_pause">&#9658;</button>
                                    <label for="r_aero_speed">Скорость воспроизведения:
                                        <select id="r_aero_speed">
                                            <option value="750">0.75</option>
                                            <option value="1000" selected>1</option>
                                            <option value="1250">1.25</option>
                                        </select>
                                    </label>
                                </div>
                                <script>
                                jQuery(function($){
                                    $("#r_aero_img").on('load resize', function() {
                                        resizeImg("#r_aero_img", "#r_aero_img_wrapper", 270, 100);
                                    });
                                    $(window).on('load resize', function() {
                                        resizeImg("#r_aero_img", "#r_aero_img_wrapper", 270, 100);
                                    });
                                });
                                </script>
                                <div id="r_aero_img_wrapper" class="workspace_map">
                                    <img id="r_aero_img" src="" alt="aerogram">
                                    <img id="r_plug" src="img/loading.gif" alt="loading">
                                    <div id="r_aero_not_find" class="not_find">Нет аэрологических диаграмм для данного пункта. Попробуйте выбрать другие параметры.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="js/js2/r_aero_ajax.js"></script>
                <?php } ?>
            </section>
        </div>

        <script>
            function resizeImg(obj, wrapper, height, width) {
                if($(obj).width()/$(obj).height() > 1) {
                    $(wrapper).attr("class", "workspace_map width");
                    $(obj).attr("class", "width");
                    if($(obj).height() > $(window).height() - height) {
                        $(wrapper).attr("class", "workspace_map height");
                        $(obj).attr("class", "height");
                    }
                }
                else{
                    $(wrapper).attr("class", "workspace_map height");
                    $(obj).attr("class", "height");
                    if($(obj).width() > $(window).width() / 2 - width) {
                        $(wrapper).attr("class", "workspace_map width");
                        $(obj).attr("class", "width");
                    }
                }
            }
        </script>
    </body>
</html>
