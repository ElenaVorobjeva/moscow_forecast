<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Личный кабинет</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/one_workspace.css">
        <script src="js/jq.js"></script>
    </head>
    <body>

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
                    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Интерфейс</a>
                </div>

                <form class="form">
                    <p>Рабочие области:</p>
                    <div class="radio-container">
                        <div class="form-item radio-btn nth-2">
                            <input type="radio" name="option1" id="radio1" value = "1" onchange="window.location.href = 'http://u2019.meteoinfo.ru/services/moscow/workspace_1.php?type=meteogram'; $(this).prop('checked', false);">
                            <label for="radio1">Одна</label>
                        </div>
                        <div class="form-item radio-btn nth-2">
                            <input type="radio" name="option1" id="radio2"  value = "2" onchange="window.location.href = 'http://u2019.meteoinfo.ru/services/moscow/workspace_2.php?type_1=map&type_2=map'; $(this).prop('checked', false);">
                            <label for="radio2">Две</label>
                        </div>
                    </div>
                </form>
            </div>
        </header>
        <div class="wrapper extrainfo">
            <script>
                jQuery(function($) {
                    $("#instraction").show();
                    $("#submenu_1").show();
                });
                function show(obj) {
                    $("#instraction").hide();
                    $("#cash").hide();
                    $("#area").hide();
                    $("#time").hide();
                    $("#link").hide();
                    $(obj).animate({
                        scrollTop:0
                    }, 0);
                    $(obj).show();
                }
            </script>
            <nav class="opened extrainfo">
                <ul>
                    <li>
                        <a onClick="show('#instraction'); $('#submenu_2').hide(); $('#submenu_1').show();">Инструкция по пользованию сайтом</a>
                        <ul id="submenu_1">
                            <li><a href="#map">Карты прогнозов</a></li>
                            <li><a href="#meteogram">Метеограммы</a></li>
                            <li><a href="#aerodiagram">Аэрологические диаграммы</a></li>
                            <li><a href="#errors">Возможные ошибки и их решение</a></li>
                        </ul>
                    </li>
                    <li>
                        <a onClick="show('#cash'); $('#submenu_2').show(); $('#submenu_1').hide();">Очистка кэш-памяти браузера</a>
                        <ul id="submenu_2">
                            <li><a href="#chrome">Google Chrome</a></li>
                            <li><a href="#firefox">Mozilla Firefox</a></li>
                            <li><a href="#opera">Opera</a></li>
                            <li><a href="#yandex">Yandex</a></li>
                            <li><a href="#safari">Safari</a></li>
                            <li><a href="#explorer">Internet Explorer</a></li>
                        </ul>
                    </li>
                    <li><a href="#" onClick="show('#area'); $('#submenu_1').hide(); $('#submenu_2').hide();">Области счета модели COSMO-Ru</a></li>
                    <li><a href="#" onClick="show('#time'); $('#submenu_1').hide(); $('#submenu_2').hide();">Примерное время окончания расчетов</a></li>
                    <li><a href="#" onClick="show('#link'); $('#submenu_1').hide(); $('#submenu_2').hide();">Полезные ссылки</a></li>
                </ul>
            </nav>
            <section class="extrainfo">
                <?php include "instraction.php"; ?>

                <div id="cash">
                    <h2 id="cash_header">Очистка кэш-памяти браузера</h2>

                    <p>Очиска кэш-памяти браузера необходима, если представленные данные устарели, или сайт выглядит неправильно.</p>

                    <h3 id="chrome">Браузер Google Chrome:</h3>
                    <ol>
                        <li>Откройте инструменты разработчика:  нажмите клавишу <i>F12</i> или сочетание клавиш <i>Ctrl+Shift+I</i>.</li>
                        <li>Теперь, оставив панель открытой, кликните левой кнопкой мыши на кнопку «Обновить» (рядом со строкой адреса). Откроется выпадающее меню.</li>
                        <li>В меню необходимо выбрать пункт "Очистка кэша и жесткая перезагрузка" и дождаться полной перезагрузки сайта.</li>
                    </ol>
                    <figure>
                        <img src="img/cashChrome.png" alt="">
                    </figure>

                    <h3 id="firefox">Браузер Mozilla Firefox:</h3>

                    <p>Необходимо воспользоваться функцией "Забыть об этом сайте". Для этого достаточно открыть историю браузера (<i>Ctrl+H</i>), кликнуть правой кнопкой на выбранном сайте и выбрать в выпадающем меню "забыть об этом сайте". Затем перезагрузить сайт.</p>
                    <figure>
                        <img src="img/cashFirefox.png" alt="">
                    </figure>

                    <h3 id="opera">Браузер Opera:</h3>

                    <p>Раскройте меню и выберите пункт «Удалить личные данные» в разделе «Настройки». В появившемся окне кликните по надписи «Детальная настройка» и поставьте флажок в поле «Очистить кэш». Для запуска процесса нажмите кнопку «Удалить».</p>

                    <h3 id="yandex">Браузер Yandex:</h3>

                    <p>Нажать <i>Ctrl+Shift+Del</i> на клавиатуре. Снять все флажки, кроме «Файлы, сохранённые в кэше» (установить его, если не установлен).Нажать кнопку «Очистить».</p>

                    <h3 id="safari">Браузер Safari:</h3>

                    <p>Сначала либо воспользуйтесь горячими клавишами <i>Ctrl+Alt+E</i>, либо выберите пункт «Очистить кэш-память» в разделе «Правка» меню браузера. Затем нажмите кнопку «Очистить» в появившемся диалоге подтверждения операции.</p>

                    <h3 id="explorer">Браузер Internet Explorer:</h3>

                    <p>Раскройте в меню раздел «Сервис» и выберите строку «Свойства обозревателя». Затем в окне настроек браузера перейдите на вкладку «Общие» в секции «История просмотра» и щелкните по кнопке «Удалить». Разные типы хранящихся данных удаляются отдельно - для этого окно «Удаление истории просмотра» разделено на секции, в каждую из которых помещена кнопка удаления информации определенного типа. Нужный вам раздел назван «Временные файлы Интернета» - нажмите кнопку «Удалить файлы», помещенную в него.</p>
                </div>
                <div id="area">
                    <h2>Области счета модели COSMO-Ru</h2>
                    <h3>Суперкомпьютер SGI ICE-X</h3>
                    <figure>
                        <img src="img/area_1.png" alt="">
                    </figure>
                    <table>
                        <thead>
                            <tr>
                                <td rowspan="2">Модель</td>
                                <td rowspan="2">Количество узлов</td>
                                <td colspan="2">Шаг сетки</td>
                                <td rowspan="2">Примечание</td>
                            </tr>
                            <tr>
                                <td><span style="font-size: 1.4em;">&deg;</span></td>
                                <td>км</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>COSMO-Ru13 ENA</td><td>1000x500x40</td><td>0.12</td><td>&asymp;13.2</td><td>Розовый контур</td>
                            </tr>
                            <tr>
                                <td>COSMO-Ru7 ETR</td><td>700x620x40</td><td>0.0625</td><td>7</td><td>Синий контур</td>
                            </tr>
                            <tr>
                                <td>COSMO-Ru2 CFO</td><td>420x470x50</td><td>0.02</td><td>2.2</td><td>Зеленый контур</td>
                            </tr>
                            <tr>
                                <td>COSMO-Ru2 SFO</td><td>420x470x50</td><td>0.02</td><td>2.2</td><td>Зеленый контур</td>
                            </tr>
                            <tr>
                                <td>COSMO-Ru2 VFO</td><td>470x450x50</td><td>0.02</td><td>2.2</td><td>Зеленый контур</td>
                            </tr>
                            <tr>
                                <td>COSMO-Ru1 Sochi</td><td>190x190x50</td><td>0.01</td><td>1.1</td><td>Красный контур</td>
                            </tr>
                        </tbody>
                    </table>
                    <br><br>
                    <h3>Суперкомпьютер CRAY XC40</h3>
                    <figure>
                        <img src="img/area_3.png" alt="">
                    </figure>
                    <table>
                        <thead>
                            <tr>
                                <td rowspan="2">Модель</td>
                                <td rowspan="2">Количество узлов</td>
                                <td colspan="2">Шаг сетки</td>
                                <td rowspan="2">Примечание</td>
                            </tr>
                            <tr>
                                <td><span style="font-size: 1.4em;">&deg;</span></td>
                                <td>км</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>cm06ena</td><td>1000x500x40</td><td>0.06</td><td>6.6</td><td>Синий контур</td>
                            </tr>
                            <tr>
                                <td>cm02krs</td><td>396x326x50</td><td>0.02</td><td>2.2</td><td>Зеленый контур</td>
                            </tr>
                            <tr>
                                <td>cm01krs</td><td>300x300x50</td><td>0.01</td><td>1.1</td><td>Красный контур</td>
                            </tr>
                            <tr>
                                <td>cm02etr</td><td>1200x1400x50</td><td>0.02</td><td>2.2</td><td>Зелёный контур</td>
                            </tr>
                            <tr>
                                <td>cm01msk</td><td>180x180x50</td><td>0.009</td><td>1</td><td>Красный контур</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="time">
                    <h2>Примерное время окончания расчетов</h2>
                    <table>
                        <thead>
                            <tr>
                                <td>Начальный срок (UTC)</td>
                                <td>Примерное время окончания расчетов (UTC)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>00:00</td>
                                <td>04:30</td>
                            </tr>
                            <tr>
                                <td>06:00</td>
                                <td>10:00</td>
                            </tr>
                            <tr>
                                <td>12:00</td>
                                <td>16:30</td>
                            </tr>
                            <tr>
                                <td>18:00</td>
                                <td>22:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="link">
                    <h2>Полезные ссылки</h2>
                    <a href="https://meteoinfo.ru/" target="_blank" class="off_site_link">> Официальный сайт Гидрометцентра России</a>
                </div>
            </section>
        </div>

        <script src="js1/accordeon.js"></script>

    </body>
</html>
