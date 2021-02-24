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
                </div>
            </header>
        </div>
        <div class="index_wrapper">
            <div class="left">
                <div>
                    <h1>САЙТ ЧИСЛЕННЫХ ПРОГНОЗОВ ПОГОДЫ ДЛЯ МЕТЕОРОЛОГИЧЕСКОГО ОБЕСПЕЧЕНИЯ МОСКОВСКОГО МЕГАПОЛИСА</h1>
                    <form class="form" name="form_2">
                        <div class="radio-container">
                            <div class="form-item radio-btn nth-2">
                                <input type="radio" name="option1" id="radio1" value = "1" onchange="window.location.href = 'http://u2019.meteoinfo.ru/services/moscow/workspace_1.php?type=meteogram'; $(this).prop('checked', false);">
                                <label for="radio1">Одна рабочая область</label>
                            </div>
                            <div class="form-item radio-btn nth-2">
                                <input type="radio" name="option1" id="radio2"  value = "2" onchange="window.location.href = 'http://u2019.meteoinfo.ru/services/moscow/workspace_2.php?type_1=map&type_2=map';$(this).prop('checked', false);">
                                <label for="radio2">Две рабочие области</label>
                            </div>
                        </div>
                    </form>
                    <div class="help_box">
                        <img src="img/cat.png" alt="cat">
                        <div class="help_text" id="help_text"></div>
                    </div>
                </div>
            </div>
            <div class="right">
                <img src="img/msk-foto-0.jpg" alt="main photo" />
            </div>
        </div>
        <script src="js/help.js"></script>
    </body>
</html>
