<?php
    // Common:
    //     (1) Центральный Федеральный округ (M_CFO_)
    //     (2) Московская область (M_CFO_MOb_)
    //     (3) Республика Беларусь (M_Bel_)
    // Central Federal district:
    //     (1), (2)
    // Volga Federal district:
    //     (4) Приволжский Федеральный округ (M_VFO_)
    //     (5) Республика Татарстан (M_VFO_Kazan_)
    // North-Western Federal district:
    //     (6) Ленинградская и Калининградская области (M_NFO_)
    //     (7) Мурманская область, республика Карелия (M_NFO_Mur_)
    //     (8) Архангельская область, республика Коми, Ненецкий АО (M_NFO_)
    //     (9) Вологодская, Новгородская и Псковская области (M_NFO_)
    // Siberian Federal district:
    //     (10) Омская и Томская область (M_Sib_)
    //     (11) Новосибирская область (M_Sib_)
    //     (12) Республика Тыва, Иркутская область, республика Бурятия, Забайкальский край (M_Sib_)
    //     (13) Алтайский край, республика Алтай (M_Sib_)
    //     (14) Красноярский край, Республика Хакасия, Кемеровская область (M_Sib_)
    //     (15) г. Красноярск (Универсиада-2019) (M_Sib_)
    // Southern and North Caucasus Federal districts:
    //     (16) Южный и Северо-Кавказский Федеральные округа (M_SFO_)
    //     (17)  Крым (M_SFO_)
    //     (18) Сочи (M_SFO_Sochi_)
    // Ural Federal district:
    //     (19) Уральский Федеральный округ (M_UFO_)
    //     (20) Ханты-Мансийский автономный округ (M_UFO_Yug_)
    // Eastern Federal district:
    //     (21) Дальневосточный Федеральный округ (M_DVO_)
    //     (22) Республика Саха (Якутия) (M_DVO_Yak_)
    // Belarus:
    //     (3), (1), (2)
    //     (23) Москва (M_CFO_MOb_)
    // Moscow:
    //     (1), (2), (23)

    $domens = [
        "cfo" => [1, 2],
        "vfo" => [4, 5],
        "szfo" => [6, 7, 8, 9],
        "sfo" => [10, 11, 12, 13, 14, 15],
        "sfo_skfo" => [16, 17 ,18],
        "ufo" => [19, 20],
        "dvfo" => [21, 22],
        "bel" => [3, 1, 2, 23],
        "mos" => [1, 2, 23]
    ];

    $meteograms = [
        // $maps[$id_domen] - домены
        // $maps[$id_domen][0] - название домена
        // $maps[$id_domen][$id_model] - модели
        // $maps[$id_domen][$id_model][0] - название модели
        // $maps[$id_domen][$id_model][$id_elem] - элементы
        // $maps[$id_domen][$id_model][$id_elem][0] - название элемента
        // $maps[$id_domen][$id_model][$id_elem][1] - время
        // $maps[$id_domen][$id_model][$id_elem][1][0] - начало прогноза
        // $maps[$id_domen][$id_model][$id_elem][1][1] - окончание прогноза
        // $maps[$id_domen][$id_model][$id_elem][1][2] - заблаговременность
        // $maps[$id_domen][$id_model][$id_elem][2] - шаблон ссылки
        // yyyymmddhh - date - заменяется в JS в соответствии с выбраной датой и начальным сроком
        // HH - time - заменяется в JS в соответствии с нажатой кнопкой времени

        // (1) Центральный Федеральный округ (M_CFO_)
        // (2) COSMO-Ru7ETR, (3) COSMO-Ru6ENA, (4) COSMO-Ru2.2CFO, (5) COSMO-RuBy2ETR, (6) COSMO-Ru1.0M
        "1" => [
            "0" => "Центральный Федеральный округ",
            "1" => [
                "0" => "Белгород",
                "1" => [50.629, 36.598],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Belgorod.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Belgorod.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Belgorod.png"
                ]
            ],
            "2" => [
                "0" => "Брянск",
                "1" => [53.241, 34.317],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Bryansk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Bryansk.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Bryansk.png"
                ]
            ],
            "3" => [
                "0" => "Владимир",
                "1" => [56.181, 40.364],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Vladimir.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Vladimir.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Vladimir.png"
                ]
            ],
            "4" => [
                "0" => "Воронеж",
                "1" => [51.708, 39.217],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Voronesh.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Voronesh.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Voronesh.png"
                ]
            ],
            "5" => [
                "0" => "Иваново",
                "1" => [56.95, 40.992],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Ivanovo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6yyyymmddhh/M_CFO_Ivanovo.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Ivanovo.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Ivanovo.png"
                ]
            ],
            "6" => [
                "0" => "Калуга",
                "1" => [54.558, 36.397],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Kaluga.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Kaluga.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Kaluga.png"
                ]
            ],
            "7" => [
                "0" => "Клинцы",
                "1" => [52.764, 32.233],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Klintsy.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_CFO_Klintsy.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Klintsy.png"
                ]
            ],
            "8" => [
                "0" => "Кострома",
                "1" => [57.77, 41.04],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Kostroma.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_CFO_Kostroma.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Kostroma.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Kostroma.png"
                ]
            ],
            "9" => [
                "0" => "Курск",
                "1" => [51.726, 36.272],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Kursk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Kursk.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Kursk.png"
                ]
            ],
            "10" => [
                "0" => "Липецк",
                "1" => [52.696, 39.508],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Lipetsk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Lipetsk.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Lipetsk.png"
                ]
            ],
            "11" => [
                "0" => "Обнинск",
                "1" => [55.113, 36.588],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Obninsk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Obninsk.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Obninsk.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Obninsk.png"
                ]
            ],
            "12" => [
                "0" => "Орел",
                "1" => [52.922, 35.993],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Orel.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Orel.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Orel.png"
                ]
            ],
            "13" => [
                "0" => "Рославль",
                "1" => [53.929, 32.825],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_CFO_Roslavl_26882.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Roslavl_26882.png"
                ]
            ],
            "14" => [
                "0" => "Рыбинск",
                "1" => [58.086, 38.679],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Rybinsk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Rybinsk.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Rybinsk.png"
                ]
            ],
            "15" => [
                "0" => "Рязань",
                "1" => [54.632, 39.716],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Ryazan.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Ryazan.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Ryazan.png"
                ]
            ],
            "16" => [
                "0" => "Сатино (Калужская обл.)",
                "1" => [55.208, 36.359],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Kal_Satino.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Kal_Satino.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Kal_Satino.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Kal_Satino.png"
                ]
            ],
            "17" => [
                "0" => "Смоленск",
                "1" => [54.742, 32.068],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Smolensk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Smolensk.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Smolensk.png"
                ]
            ],
            "18" => [
                "0" => "Тамбов",
                "1" => [52.723, 41.47],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Tambov.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Tambov.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Tambov.png"
                ]
            ],
            "19" => [
                "0" => "Тверь",
                "1" => [56.895, 35.89],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Tver.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Tver.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Tver.png"
                ]
            ],
            "20" => [
                "0" => "Тула",
                "1" => [54.236, 37.625],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Tula.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Tula.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Tula.png"
                ]
            ],
            "21" => [
                "0" => "Ярославль",
                "1" => [57.63, 39.738],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Yaroslavl.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_CFO_Yaroslavl.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Yaroslavl.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Yaroslavl.png"
                ]
            ]
        ],
        // (2) Московская область (M_CFO_MOb_)
        // (2) COsMO-Ru7ETR, (3) COSMO-Ru2.2CFO, (4) COSMO-RuBy2ETR, (5) COSMO-Ru1.0M
        "2" => [
            "0" => "Московская область",
            "1" => [
                "0" => "Волоколамск",
                "1" => [56.035, 35.979],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Volokolamsk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Volokolamsk.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Volokolamsk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Volokolamsk.png"
                ]
            ],
            "2" => [
                "0" => "Дмитров",
                "1" => [56.342, 37.539],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Dmitrov.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Dmitrov.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Dmitrov.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Dmitrov.png"
                ]
            ],
            "3" => [
                "0" => "Кашира",
                "1" => [54.833, 38.149],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Kashira.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Kashira.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Kashira.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Kashira.png"
                ]
            ],
            "4" => [
                "0" => "Клин",
                "1" => [56.318, 36.749],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Klin.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Klin.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Klin.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Klin.png"
                ]
            ],
            "5" => [
                "0" => "Коломна",
                "1" => [55.089, 38.788],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Kolomna.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Kolomna.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Kolomna.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Kolomna.png"
                ]
            ],
            "6" => [
                "0" => "Кучино",
                "1" => [55.751, 37.959],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Kuchino_27530.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Kuchino_27530.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Kuchino_27530.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Kuchino_27530.png"
                ]
            ],
            "7" => [
                "0" => "Луховицы",
                "1" => [54.905, 39.009],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Lukhovitsy.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Lukhovitsy.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Lukhovitsy.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Lukhovitsy.png"
                ]
            ],
            "8" => [
                "0" => "Можайск",
                "1" => [55.512, 35.991],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Mojaisk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Mojaisk.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Mojaisk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Mojaisk.png"
                ]
            ],
            "9" => [
                "0" => "Наро-Фоминск",
                "1" => [55.384, 36.747],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_NaroFominsk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_NaroFominsk.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_NaroFominsk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_NaroFominsk.png"
                ]
            ],
            "10" => [
                "0" => "Немчиновка",
                "1" => [55.704, 37.383],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ]
            ],
            "11" => [
                "0" => "Новошихово",
                "1" => [55.696, 36.781],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Novoshikhovo_IFA.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Novoshikhovo_IFA.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Novoshikhovo_IFA.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Novoshikhovo_IFA.png"
                ]
            ],
            "12" => [
                "0" => "Новый Иерусалим",
                "1" => [55.895, 36.822],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Novo-Ierusalim_27511.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Novo-Ierusalim_27511.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Novo-Ierusalim_27511.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Novo-Ierusalim_27511.png"
                ]
            ],
            "13" => [
                "0" => "Павлов Посад",
                "1" => [55.768, 38.688],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_PavlovPosad.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_PavlovPosad.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_PavlovPosad.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_PavlovPosad.png"
                ]
            ],
            "14" => [
                "0" => "Раменское",
                "1" => [55.554, 38.163],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Ramenskoye.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Ramenskoye.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Ramenskoye.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Ramenskoye.png"
                ]
            ],
            "15" => [
                "0" => "Серпухов",
                "1" => [54.913, 37.459],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Serpuhov.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Serpuhov.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Serpuhov.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Serpuhov.png"
                ]
            ],
            "16" => [
                "0" => "Солнцево",
                "1" => [55.647, 37.385],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Solntsevo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Solntsevo.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Solntsevo.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Solntsevo.png"
                ]
            ],
            "17" => [
                "0" => "Тушино",
                "1" => [55.874, 37.428],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ]
            ],
            "18" => [
                "0" => "Черусти",
                "1" => [55.549, 40.013],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Cherusti.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Cherusti.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Cherusti.png"
                ]
            ],
            "19" => [
                "0" => "Электроугли",
                "1" => [55.751, 37.959],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Elektrougli_27531.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Elektrougli_27531.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Elektrougli_27531.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Elektrougli_27531.png"
                ]
            ]
        ],
        // (3) Республика Беларусь (M_Bel_)
        // (2) COSMO-Ru7ETR, (3) COSMO-RuBy2ETR
        "3" => [
            "0" => "Республика Беларусь",
            "1" => [
                "0" => "Александрия",
                "1" => [54.3306, 30.2831],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Mog_Alexandria.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Mog_Alexandria.png"
                ]
            ],
            "2" => [
                "0" => "Барановичи",
                "1" => [53.117, 26.000],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Baranovichi_26941.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Baranovichi_26941.png"
                ]
            ],
            "3" => [
                "0" => "Бобруйск",
                "1" => [53.217, 29.183],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Bobruisk_26961.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Bobruisk_26961.png"
                ]
            ],
            "4" => [
                "0" => "Брест",
                "1" => [52.117,  23.683],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Brest_33008.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Brest_33008.png"
                ]
            ],
            "5" => [
                "0" => "Вискули",
                "1" => [52.62222, 23.6256],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Bre_Viskuli.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Bre_Viskuli.png"
                ]
            ],
            "6" => [
                "0" => "Витебск",
                "1" => [55.167,  30.217],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Vitebsk_26666.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Vitebsk_26666.png"
                ]
            ],
            "7" => [
                "0" => "Волосово",
                "1" => [55.55, 29.5167],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Vit_Volosovo.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Vit_Volosovo.png"
                ]
            ],
            "8" => [
                "0" => "Гомель",
                "1" => [52.400,  30.950],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Gomel_33041.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Gomel_33041.png"
                ]
            ],
            "9" => [
                "0" => "Гродно",
                "1" => [53.600,  24.050],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Grodno_26825.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Grodno_26825.png"
                ]
            ],
            "10" => [
                "0" => "Заславль",
                "1" => [53.997, 27.296],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Zaslavl.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Zaslavl.png"
                ]
            ],
            "11" => [
                "0" => "Кунцевщина",
                "1" => [53.906, 27.393],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Minsk_Kuntsevshchina.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Minsk_Kuntsevshchina.png"
                ]
            ],
            "12" => [
                "0" => "Лясковичи",
                "1" => [52.65, 28.5333],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Gom_Lyaskovichi.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Gom_Lyaskovichi.png"
                ]
            ],
            "13" => [
                "0" => "Минск",
                "1" => [53.933,  27.633],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Minsk_26850.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Minsk_26850.png"
                ]
            ],
            "14" => [
                "0" => "Мозир",
                "1" => [51.950, 29.167],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Mozir_33036.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Mozir_33036.png"
                ]
            ],
            "15" => [
                "0" => "Могилев",
                "1" => [53.950, 30.067],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Mogilev_26862.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Mogilev_26862.png"
                ]
            ],
            "16" => [
                "0" => "Обсерватория (г. Минск)",
                "1" => [53.928, 27.63],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Minsk_observatory.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Minsk_observatory.png"
                ]
            ],
            "17" => [
                "0" => "Пинск",
                "1" => [52.117, 26.117],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Pinsk_33019.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Pinsk_33019.png"
                ]
            ],
            "18" => [
                "0" => "Полоцк",
                "1" => [55.467, 28.767],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Polotsk_26653.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Polotsk_26653.png"
                ]
            ],
            "19" => [
                "0" => "Самохваловичи",
                "1" => [53.731, 27.513],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Minsk_Samokhvalovichi.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Minsk_Samokhvalovichi.png"
                ]
            ],
            "20" => [
                "0" => "Уручье",
                "1" => [53.964, 27.718],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Minsk_Uruchye.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Minsk_Uruchye.png"
                ]
            ],
            "21" => [
                "0" => "Хатежино",
                "1" => [53.925, 27.291],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Minsk_Hatezhino.png"
                ],
                "3" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Minsk_Hatezhino.png"
                ]
            ]
        ],
        // (4) Приволжский Федеральный округ
        // (2) COSMO-Ru7ETR, (3) COSMO-Ru6ENA, (4) COSMO-RuBy2ETR, (5) COSMO-Ru2.2VFO
        "4" => [
            "0" => "Приволжский Федеральный округ",
            "1" => [
                "0" => "Воткинск",
                "1" => [57.057, 53.913],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Votkinsk_28318.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Votkinsk_28318.png"
                ]
            ],
            "2" => [
                "0" => "Глазов",
                "1" => [58.138, 52.565],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Glazov_28214.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Glazov_28214.png"
                ]
            ],
            "3" => [
                "0" => "Зилаир",
                "1" => [52.242, 57.444],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Zilair.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Zilair.png"
                ]
            ],
            "4" => [
                "0" => "Ижевск",
                "1" => [56.854, 53.194],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Izhevsk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Izhevsk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Izhevsk.png"
                ]
            ],
            "5" => [
                "0" => "Йошкар-Ола",
                "1" => [56.635, 47.761],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Yoshkar-Ola_27485.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Yoshkar-Ola_27485.png"
                ]
            ],
            "6" => [
                "0" => "Киров",
                "1" => [58.565, 49.59],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kirov_27199.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kirov_27199.png"
                ]
            ],
            "7" => [
                "0" => "Кунгур",
                "1" => [57.407, 56.926],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kungur_28326.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kungur_28326.png"
                ]
            ],
            "8" => [
                "0" => "Можга",
                "1" => [56.43, 52.222],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Mozhga_28409.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Mozhga_28409.png"
                ]
            ],
            "9" => [
                "0" => "Нефтекамск",
                "1" => [56.102, 54.36],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Neftekamsk_28513.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Neftekamsk_28513.png"
                ]
            ],
            "10" => [
                "0" => "Нижний Новгород",
                "1" => [56.266, 44.013],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Nijnii_Novgorod.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Nijnii_Novgorod.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_VFO_Nizhny_Novgorod.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Nijnii_Novgorod.png"
                ]
            ],
            "11" => [
                "0" => "Оренбург",
                "1" => [51.762, 55.099],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Orenburg.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Orenburg.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Orenburg.png"
                ]
            ],
            "12" => [
                "0" => "Пермь",
                "1" => [58.013, 56.272],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Perm.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Perm.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Perm.png"
                ]
            ],
            "13" => [
                "0" => "Самара",
                "1" => [53.177, 50.107],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Samara.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Samara.png"
                ]
            ],
            "14" => [
                "0" => "Саранск",
                "1" => [54.135, 45.24],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Saransk_27760.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Saransk_27760.png"
                ]
            ],
            "15" => [
                "0" => "Сарапул",
                "1" => [56.472, 53.727],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Sarapul_28418.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Sarapul_28418.png"
                ]
            ],
            "16" => [
                "0" => "Саратов",
                "1" => [51.574, 46.027],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Saratov.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Saratov.png"
                ]
            ],
            "17" => [
                "0" => "Стерлитамак",
                "1" => [53.611, 55.938],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Sterlitamak.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Sterlitamak.png"
                ]
            ],
            "18" => [
                "0" => "Тольятти",
                "1" => [53.541, 49.292],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Tolyatti.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Tolyatti.png"
                ]
            ],
            "19" => [
                "0" => "Туймазы",
                "1" => [54.592, 53.711],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Tuimazy.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Tuimazy.png"
                ]
            ],
            "20" => [
                "0" => "Ульяновск",
                "1" => [54.322, 48.345],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Ulyanovsk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Ulyanovsk.png"
                ]
            ],
            "21" => [
                "0" => "Уфа",
                "1" => [54.718, 55.843],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Ufa.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Ufa.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Ufa.png"
                ]
            ],
            "22" => [
                "0" => "Учалы",
                "1" => [54.361, 59.409],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Uchaly.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Uchaly.png"
                ]
            ],
            "23" => [
                "0" => "Чебоксары",
                "1" => [56.08, 47.35],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Cheboksary_27581.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Cheboksary_27581.png"
                ]
            ],
            "24" => [
                "0" => "Янаул",
                "1" => [56.284, 54.959],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Yanaul.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Yanaul.png"
                ]
            ]
        ],
        // (5) Республика Татарстан (M_VFO_Kazan_)
        // (2) COSMO-Ru7ETR, (3) COSMO-Ru6ENA, (4) COSMO-RU2.Ru2VFO
        "5" => [
            "0" => "Республика Татарстан",
            "1" => [
                "0" => "Азнакаево",
                "1" => [54.869, 53.114],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Anakaevo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Anakaevo.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Anakaevo.png"
                ]
            ],
            "2" => [
                "0" => "Акташ",
                "1" => [55.028, 52.141],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Aktash.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Aktash.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Aktash.png"
                ]
            ],
            "3" => [
                "0" => "Арск",
                "1" => [56.09, 49.888],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Arsk_27593.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Arsk_27593.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Arsk_27593.png"
                ]
            ],
            "4" => [
                "0" => "Бегишево",
                "1" => [55.499, 52.049],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Begishovo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Begishovo.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Begishovo.png"
                ]
            ],
            "5" => [
                "0" => "Бугульма",
                "1" => [54.589, 52.813],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Bugulma.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Bugulma.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Bugulma.png"
                ]
            ],
            "6" => [
                "0" => "Вязовые",
                "1" => [55.822, 48.512],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Vyazovie.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Vyazovie.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Vyazovie.png"
                ]
            ],
            "7" => [
                "0" => "Дрожжаное",
                "1" => [54.726, 47.552],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Drojjanoe.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Drojjanoe.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Drojjanoe.png"
                ]
            ],
            "8" => [
                "0" => "Елабуга",
                "1" => [55.77, 52.067],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Elabuga.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Elabuga.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Elabuga.png"
                ]
            ],
            "9" => [
                "0" => "Кайбицы",
                "1" => [55.405, 48.182],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Kaibitsi.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Kaibitsi.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Kaibitsi.png"
                ]
            ],
            "10" => [
                "0" => "Лаишево",
                "1" => [55.422, 49.52],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Laishevo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Laishevo.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Laishevo.png"
                ]
            ],
            "11" => [
                "0" => "Мензелинск",
                "1" => [55.712, 53.071],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Menzelinsk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Menzelinsk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Menzelinsk.png"
                ]
            ],
            "12" => [
                "0" => "Муслюмово",
                "1" => [55.307, 53.2],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Muslyumovo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Muslyumovo.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Muslyumovo.png"
                ]
            ],
            "13" => [
                "0" => "Казань-опорная",
                "1" => [55.755, 49.2],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Opornaya.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Opornaya.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Opornaya.png"
                ]
            ],
            "14" => [
                "0" => "Сокол (Казань)",
                "1" => [55.78, 49.187],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Sokol.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Sokol.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Sokol.png"
                ]
            ],
            "15" => [
                "0" => "Тетюши",
                "1" => [54.954, 48.82],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Tetyushi.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Tetyushi.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Tetyushi.png"
                ]
            ],
            "16" => [
                "0" => "Чистополь",
                "1" => [55.32, 50.6],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Chistopol.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Chistopol.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Chistopol.png"
                ]
            ],
            "17" => [
                "0" => "Чулпаново",
                "1" => [54.508, 50.408],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Chulpanovo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_VFO_Kazan_Chulpanovo.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2VFO",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Chulpanovo.png"
                ]
            ]
        ],
        // (6) Ленинградская и Калининградская области (M_NFO_)
        // (2) COSMO-Ru7ERT, (3) COSMO-Ru6ENA, (4) COSMO-RuBy2ETR
        "6" => [
            "0" => "Ленинградская и Калининградская области",
            "1" => [
                "0" => "Выборг",
                "1" => [60.738, 28.758],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Vyborg_22892.png"
                ]
            ],
            "2" => [
                "0" => "Гогланд",
                "1" => [60.083, 26.995],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Gogland_22907.png"
                ]
            ],
            "3" => [
                "0" => "Железнодорожный",
                "1" => [54.346, 21.296],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Zheleznodorozhny_26706.png"
                ]
            ],
            "4" => [
                "0" => "Калининград",
                "1" => [54.7, 20.512],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Kaliningrad.png"
                ]
            ],
            "5" => [
                "0" => "Кронштадт",
                "1" => [59.964, 29.771],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Kronst_26060.png"
                ]
            ],
            "6" => [
                "0" => "Лисий Нос",
                "1" => [60.036, 30.01],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_LisiiNos_22899.png"
                ]
            ],
            "7" => [
                "0" => "Озерки",
                "1" => [60.183, 28.984],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Ozerki_22897.png"
                ]
            ],
            "8" => [
                "0" => "Ораниенбаум",
                "1" => [59.902, 29.78],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Ornbaum_26064.png"
                ]
            ],
            "9" => [
                "0" => "Пионерский",
                "1" => [54.919, 20.21],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Pionersky_26607.png"
                ]
            ],
            "10" => [
                "0" => "Пулково",
                "1" => [59.795, 30.292],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Pulkovo_26065.png"
                ]
            ],
            "11" => [
                "0" => "Санкт-Петербург",
                "1" => [59.982, 30.267],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_S-Ptrb_26063.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_NFO_S-Ptrb_26063.png"
                ]
            ],
            "12" => [
                "0" => "Сосновый Бор",
                "1" => [59.81, 29.048],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_SosnBor_26071.png"
                ]
            ]
        ],
        // (7) Мурманская область, республика Карелия (M_NFO_Mur_)
        // (2) COSMO-Ru7ETR
        "7" => [
            "0" => "Мурманская область",
            "1" => [
                "0" => "Апатиты",
                "1" => [67.555, 33.402],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Mur_Apatity.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_NFO_Mur_Apatity.png"
                ]
            ],
            "2" => [
                "0" => "Калевала",
                "1" => [65.206, 31.185],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Kalevala_22408.png"
                ]
            ],
            "3" => [
                "0" => "Кандалакша",
                "1" => [67.167, 32.323],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Mur_Kandalaksha.png"
                ]
            ],
            "4" => [
                "0" => "Кировск",
                "1" => [67.62, 33.718],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Mur_Kirovsk_22224.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_NFO_Mur_Kirovsk_22224.png"
                ]
            ],
            "5" => [
                "0" => "Кировск (Юкспоррйок)",
                "1" => [67.62, 33.718],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Mur_Kirovsk_Yuksporrjok.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_NFO_Mur_Kirovsk_Yuksporrjok.png"
                ]
            ],
            "6" => [
                "0" => "Ковдор",
                "1" => [67.569, 30.521],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Mur_Kovdor.png"
                ]
            ],
            "7" => [
                "0" => "Ловозеро",
                "1" => [68, 35],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Mur_Lovozero.png"
                ]
            ],
            "8" => [
                "0" => "Медвежьегорск",
                "1" => [62.937, 34.456],
                "3" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Medvezhyegorsk_22721.png"
                ]
            ],
            "9" => [
                "0" => "Мончегорск",
                "1" => [67.925, 32.893],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Mur_Monchegorsk.png"
                ]
            ],
            "10" => [
                "0" => "Мурманск",
                "1" => [68.927, 32.975],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Mur_Murmansk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_NFO_Mur_Murmansk.png"
                ]
            ],
            "11" => [
                "0" => "Никель",
                "1" => [69.377, 30.183],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Mur_Nikel.png"
                ]
            ],
            "12" => [
                "0" => "Петрозаводск",
                "1" => [61.81, 34.212],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Ptrzavodsk_22820.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_NFO_Ptrzavodsk_22820.png"
                ]
            ],
            "13" => [
                "0" => "Пудож",
                "1" => [61.805, 36.445],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Pudozh_22831.png"
                ]
            ],
            "14" => [
                "0" => "Сегежа",
                "1" => [63.478, 34.302],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Segezha_22621.png"
                ]
            ],
            "15" => [
                "0" => "Сортавала",
                "1" => [61.686, 30.678],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Sortavala_22802.png"
                ]
            ],
            "16" => [
                "0" => "Териберка",
                "1" => [69.187, 35.171],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Mur_Teriberka.png"
                ]
            ],
            "17" => [
                "0" => "Центральный Рудник",
                "1" => [67.495, 33.725],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Mur_CentralnyiRudnik.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_NFO_Mur_CentralnyiRudnik.png"
                ]
            ]
        ],
        // (8) Архангельская область, республика Коми, Ненецкий АО (M_NFO_)
        // (2) COSMO-Ru7ERT, (3) COSMO-Ru6ENA, (4) COSMO-RuBy2ETR
        "8" => [
            "0" => "Архангельская область, республика Коми, Ненецкий АО",
            "1" => [
                "0" => "Архангельск",
                "1" => [64.595, 40.464],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Arhangelsk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_NFO_Arhangelsk.png"
                ]
            ],
            "2" => [
                "0" => "Архангельск_39",
                "1" => [64.376, 39.423],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Arhangelsk_39.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_NFO_Arhangelsk_39.png"
                ]
            ],
            "3" => [
                "0" => "Архангельск_40",
                "1" => [64.35, 40.276],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Arhangelsk_40.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_NFO_Arhangelsk_40.png"
                ]
            ],
            "4" => [
                "0" => "Воркута",
                "1" => [67.496, 63.99],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Vorkuta.png"
                ]
            ],
            "5" => [
                "0" => "Нарьян-Мар",
                "1" => [67.617, 53.058],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_NFO_Naryan-Mar.png"
                ]
            ],
            "6" => [
                "0" => "Печора",
                "1" => [65.142, 57.151],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Pechora.png"
                ]
            ],
            "7" => [
                "0" => "Плесецк (аэродром)",
                "1" => [62.711, 40.544],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Plesetsk_aer.png"
                ]
            ],
            "8" => [
                "0" => "Плесецк (космодром)",
                "1" => [62.955, 40.724],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Plesetsk_kos.png"
                ]
            ],
            "9" => [
                "0" => "Сыктывкар",
                "1" => [61.65, 50.814],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Syktyvkar.png"
                ]
            ],
            "10" => [
                "0" => "Ухта",
                "1" => [63.557, 53.809],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Ukhta.png"
                ]
            ]
        ],
        // (9) Вологодская, Новгородская и Псковская области (M_NFO_)
        // (2) COSMO-Ru7ERT, (3) COSMO-Ru6ENA, (4) COSMO-RuBy2ETR
        "9" => [
            "0" => "Вологодская, Новгородская и Псковская области",
            "1" => [
                "0" => "Валдай",
                "1" => [57.988, 33.234],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Valday_26289.png"
                ]
            ],
            "2" => [
                "0" => "Великие Луки",
                "1" => [56.423, 30.591],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_VelikiyeLuki.png"
                ]
            ],
            "3" => [
                "0" => "Вологда",
                "1" => [59.288, 39.885],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Vologda.png"
                ]
            ],
            "4" => [
                "0" => "Демьянск",
                "1" => [57.662, 32.432],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Demyansk_26381.png"
                ]
            ],
            "5" => [
                "0" => "Крестцы",
                "1" => [58.227, 32.511],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Kresttsy_26285.png"
                ]
            ],
            "6" => [
                "0" => "Новгород",
                "1" => [58.534, 32.251],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Novgorod_26179.png"
                ]
            ],
            "7" => [
                "0" => "Псков",
                "1" => [57.829, 28.307],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Pskov_26258.png"
                ]
            ],
            "8" => [
                "0" => "Хотилово",
                "1" => [57.684, 34.066],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Hotilovo.png"
                ]
            ],
            "9" => [
                "0" => "Череповец",
                "1" => [59.281, 37.929],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_NFO_Cherepovets.png"
                ]
            ],
        ],
        // (10) Омская и Томская область (M_Sib_)
        // (2) COSMO-Ru7ETR, (3) COSMO-Ru6ENA
        "10" => [
            "0" => "Омская и Томская область",
            "1" => [
                "0" => "Александровское",
                "1" => [60.248, 77.504],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Tom_Aleksandrovskoe.png"
                ]
            ],
            "2" => [
                "0" => "Исилькуль",
                "1" => [54.942, 71.283],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Sib_Oms_Isilkul.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Oms_Isilkul.png"
                ]
            ],
            "3" => [
                "0" => "Калачинск",
                "1" => [55.032, 74.567],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Sib_Oms_Kalachinsk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Oms_Kalachinsk.png"
                ]
            ],
            "4" => [
                "0" => "Колпашево",
                "1" => [58.166, 82.527],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Tom_Kolpashevo.png"
                ]
            ],
            "5" => [
                "0" => "Майск",
                "1" => [57.518, 77.165],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Tom_Maysk.png"
                ]
            ],
            "6" => [
                "0" => "Омск_26698_01",
                "1" => [55.041, 73.386],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Sib_Oms_Omsk_26698_01.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Oms_Omsk_26698_01.png"
                ]
            ],
            "7" => [
                "0" => "Омск_26698_02",
                "1" => [54.925, 73.441],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Sib_Oms_Omsk_26698_02.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Oms_Omsk_26698_02.png"
                ]
            ],
            "8" => [
                "0" => "Первомайское",
                "1" => [57.016, 86.177],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Tom_Pervomayskoye.png"
                ]
            ],
            "9" => [
                "0" => "Русская Поляна",
                "1" => [53.751, 73.875],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Sib_Oms_RusskayaPolyana.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Oms_RusskayaPolyana.png"
                ]
            ],
            "10" => [
                "0" => "Томск",
                "1" => [56.288, 84.543],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Tom_Tomsk.png"
                ]
            ],
            "11" => [
                "0" => "Усть-Ишим",
                "1" => [57.693, 71.219],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Sib_Oms_Ust_Ishim.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Oms_Ust_Ishim.png"
                ]
            ],
            "12" => [
                "0" => "Усть-Озёрное",
                "1" => [58.554, 87.485],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Tom_Ust-Ozernoe.png"
                ]
            ]
        ],
        // (11) Новосибирская область (M_Sib_)
        // (2) COSMO-Ru6ENA
        "11" => [
            "0" => "Новосибирская область",
            "1" => [
                "0" => "Барабинск",
                "1" => [55.187, 78.221],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Nov_Barabinsk.png"
                ]
            ],
            "2" => [
                "0" => "Болотное",
                "1" => [55.43, 84.256],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Nov_Bolotnoye.png"
                ]
            ],
            "3" => [
                "0" => "Карасук",
                "1" => [53.448, 77.972],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Nov_Karasuk.png"
                ]
            ],
            "4" => [
                "0" => "Коченёво",
                "1" => [54.997, 82.148],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Nov_Kochenevo.png"
                ]
            ],
            "5" => [
                "0" => "Кыштовка",
                "1" => [56.383, 76.382],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Nov_Kyshtovka.png"
                ]
            ],
            "6" => [
                "0" => "Маслянино",
                "1" => [54.219, 84.144],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Nov_Maslyanino.png"
                ]
            ],
            "7" => [
                "0" => "Новосибирск_29637",
                "1" => [54.993, 82.98],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Nov_Novosibirsk_29637.png"
                ]
            ],
            "8" => [
                "0" => "Новосибирск_1",
                "1" => [55.119, 83.059],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Nov_Novosibirsk-Elt.png"
                ]
            ],
            "9" => [
                "0" => "Новосибирск_2",
                "1" => [55.046, 82.865],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Nov_Novosibirsk.png"
                ]
            ],
            "10" => [
                "0" => "Толмачёво",
                "1" => [54.973, 82.673],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Nov_Tolmachevo_29630.png"
                ]
            ],
            "11" => [
                "0" => "Чаны",
                "1" => [55.16, 76.43],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Nov_Chany.png"
                ]
            ],
            "12" => [
                "0" => "Чистоозёрное",
                "1" => [54.406, 76.299],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Nov_Chistoozernoe.png"
                ]
            ]
        ],
        // (12) Республика Тыва, Иркутская область, Забайкальский край (M_Sib_)
        // (2) COSMO-Ru7ETR, (3) COSMO-Ru6ENA
        "12" => [
            "0" => "Республика Тыва, Иркутская область, республика Бурятия, Забайкальский край",
            "1" => [
                "0" => "Агинское",
                "1" => [51.115, 114.581],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Aginskoye.png"
                ]
            ],
            "2" => [
                "0" => "Братск",
                "1" => [56.126, 101.559],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Bratsk.png"
                ]
            ],
            "3" => [
                "0" => "Ербогачён",
                "1" => [61.249, 108.051],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Irk_Erbogachen.png"
                ]
            ],
            "4" => [
                "0" => "Зима",
                "1" => [53.93, 102.087],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Irk_Zima.png"
                ]
            ],
            "5" => [
                "0" => "Иркутск",
                "1" => [52.292, 104.308],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Irk_Irkutsk.png"
                ]
            ],
            "6" => [
                "0" => "Кабанск",
                "1" => [52.045, 106.678],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Bur_Kabansk_30729.png"
                ]
            ],
            "7" => [
                "0" => "Кызыл",
                "1" => [51.701, 94.433],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Kyzyl.png"
                ]
            ],
            "8" => [
                "0" => "Тайшет",
                "1" => [55.956, 97.962],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Irk_Tayshet.png"
                ]
            ],
            "9" => [
                "0" => "Усть-Кут",
                "1" => [56.777, 105.787],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Irk_Ust-Kut.png"
                ]
            ],
            "10" => [
                "0" => "Усть-Ордынский",
                "1" => [52.848, 104.725],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Ust-Ordynsky.png"
                ]
            ],
            "11" => [
                "0" => "Чита",
                "1" => [52.026, 113.536],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Chita.png"
                ]
            ]
        ],
        // (13) Алтайский край, республика Алтай (M_Sib_)
        // (2) COSMO-Ru6ENA
        "13" => [
            "0" => "Алтайский край, республика Алтай",
            "1" => [
                "0" => "Барнаул",
                "1" => [53.264, 83.307],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Alk_Barnaul.png"
                ]
            ],
            "2" => [
                "0" => "Белокуриха",
                "1" => [51.59, 84.543],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Alk_Belokurikha.png"
                ]
            ],
            "3" => [
                "0" => "Бийск",
                "1" => [52.346, 85.203],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Alk_Biysk.png"
                ]
            ],
            "4" => [
                "0" => "Горно-Алтайск",
                "1" => [51.581, 85.581],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_rAl_Gorno-Altaysk.png"
                ]
            ],
            "5" => [
                "0" => "Горняк",
                "1" => [50.566, 81.275],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Alk_Gornyak.png"
                ]
            ],
            "6" => [
                "0" => "Заринск",
                "1" => [53.458, 84.562],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Alk_Zarinsk.png"
                ]
            ],
            "7" => [
                "0" => "Камень-на-Оби",
                "1" => [53.467, 81.177],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Alk_Kamen-na-Obi.png"
                ]
            ],
            "8" => [
                "0" => "Катанда",
                "1" => [50.101, 86.11],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_rAl_Katanda.png"
                ]
            ],
            "9" => [
                "0" => "Кош-Агач",
                "1" => [49.986, 88.377],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_rAl_Kosh-Agach.png"
                ]
            ],
            "10" => [
                "0" => "Кызыл-Озёк",
                "1" => [51.538, 85.963],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_rAl_Kyzyl-Ozek.png"
                ]
            ],
            "11" => [
                "0" => "Славгород",
                "1" => [52.575, 78.352],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Alk_Slavgorod.png"
                ]
            ],
            "12" => [
                "0" => "Угловское",
                "1" => [51.24, 80.083],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Alk_Uglovskoe.png"
                ]
            ],
            "13" => [
                "0" => "Усть-Калманка",
                "1" => [52.052, 83.233],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Alk_Ust-Kalmanka.png"
                ]
            ],
            "14" => [
                "0" => "Чемал",
                "1" => [51.238, 85.994],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_rAl_Chemal.png"
                ]
            ],
            "15" => [
                "0" => "Шипуново",
                "1" => [52.095, 82.17],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Alk_Shipunovo.png"
                ]
            ],
            "16" => [
                "0" => "Яйлю",
                "1" => [51.465, 87.377],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_rAl_Yailu.png"
                ]
            ]
        ],
        // (14) Красноярский край, Республика Хакасия, Кемеровская область (M_Sib_)
        // (2) COSMO-Ru6ENA
        "14" => [
            "0" => "Красноярский край, республика Хакасия, Кемеровская область",
            "1" => [
                "0" => "Абакан",
                "1" => [53.711, 91.392],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Abakan.png"
                ]
            ],
            "2" => [
                "0" => "Белово",
                "1" => [54.251, 86.163],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Kem_Belovo.png"
                ]
            ],
            "3" => [
                "0" => "Кемерово",
                "1" => [55.153, 86.169],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Kem_Kemerovo.png"
                ]
            ],
            "4" => [
                "0" => "Красноярск",
                "1" => [56.021, 92.97],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Krasnoyarsk.png"
                ]
            ],
            "5" => [
                "0" => "Мариинск",
                "1" => [56.091, 87.449],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Kem_Mariinsk.png"
                ]
            ],
            "6" => [
                "0" => "Междуреченск",
                "1" => [53.403, 88.127],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Kem_Mezhdurechensk.png"
                ]
            ],
            "7" => [
                "0" => "Новокузнецк",
                "1" => [53.483, 86.54],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Kem_Novokuznetsk.png"
                ]
            ],
            "8" => [
                "0" => "Норильск",
                "1" => [69.31, 88.137],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Norilsk.png"
                ]
            ],
            "9" => [
                "0" => "Саяногорск",
                "1" => [53.111, 91.369],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Sayanogorsk.png"
                ]
            ],
            "10" => [
                "0" => "Таштагол",
                "1" => [52.489, 87.498],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Kem_Tashtagol.png"
                ]
            ],
            "11" => [
                "0" => "Тисуль",
                "1" => [55.446, 88.226],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Kem_Tisul.png"
                ]
            ],
            "12" => [
                "0" => "Тура",
                "1" => [64.279, 100.275],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Tura.png"
                ]
            ],
            "13" => [
                "0" => "Усть-Кабырза",
                "1" => [52.267, 88.267],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Kem_Ust-Kabyrza.png"
                ]
            ],
            "14" => [
                "0" => "Черёмушки",
                "1" => [52.87, 91.458],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Cheryomushki-HPS.png"
                ]
            ]
        ],
        // (15) г. Красноярск (Универсиада-2019) (M_Sib_UNI_)
        // (2) COSMO-Ru13.2ENA, (3) COSMO-Ru6ENA, (4) COSMO-Ru2.2KRS, (5) COSMO-Ru1.1KRS
        "15" => [
            "0" => "г. Красноярск (Универсиада-2019)",
            "1" => [
                "0" => "Академия биатлона",
                "1" => [55.997, 92.721],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_BiatlonSt_29584.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_BiatlonSt_29584.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_BiatlonSt_29584.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_BiatlonSt_29584.png"
                ]
            ],
            "2" => [
                "0" => "Бобровый Лог (старт)",
                "1" => [55.945, 92.787],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_BobrovyiLog_start.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_BobrovyiLog_start.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_BobrovyiLog_start.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_BobrovyiLog_start.png"
                ]
            ],
            "3" => [
                "0" => "Бобровый Лог (финиш)",
                "1" => [55.965, 92.789],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_BobrovyiLog_finish.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_BobrovyiLog_finish.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_BobrovyiLog_finish.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_BobrovyiLog_finish.png"
                ]
            ],
            "4" => [
                "0" => "Емельяново",
                "1" => [56.18, 92.611],
                "5" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_Emelyanovo_29474.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_Emelyanovo_29474.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Emelyanovo_29474.png"
                ],
                "2" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Emelyanovo_29474.png"
                ]
            ],
            "5" => [
                "0" => "Железногорск",
                "1" => [56.255, 93.525],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_Jeleznigorsk_AMS.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_Jeleznigorsk_AMS.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Jeleznigorsk_AMS.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Jeleznigorsk_AMS.png"
                ],
            ],
            "6" => [
                "0" => "Кача",
                "1" => [56.118, 92.198],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_Kacha_29563.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_Kacha_29563.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Kacha_29563.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Kacha_29563.png"
                ]
            ],
            "7" => [
                "0" => "Красноярск (29570)",
                "1" => [56.036, 92.742],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29570.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29570.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29570.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29570.png"
                ],
            ],
            "8" => [
                "0" => "Красноярск (29574)",
                "1" => [56.003, 92.88],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29574.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29574.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29574.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29574.png"
                ],
            ],
            "9" => [
                "0" => "Минино",
                "1" => [56.067, 92.726],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_Minino_29571.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_Minino_29571.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Minino_29571.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Minino_29571.png"
                ]
            ],
            "10" => [
                "0" => "Радуга",
                "1" => [56.007, 92.722],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_RadugaSkiStadion_29588.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_RadugaSkiStadion_29588.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_RadugaSkiStadion_29588.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_RadugaSkiStadion_29588.png"
                ],
            ],
            "11" => [
                "0" => "Роев Ручей",
                "1" => [55.966, 92.736],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_RoevRuchey_29579.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_RoevRuchey_29579.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_RoevRuchey_29579.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_RoevRuchey_29579.png"
                ]
            ],
            "12" => [
                "0" => "Сопка (финиш)",
                "1" => [56.006, 92.739],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_SopkaFinish.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_SopkaFinish.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_SopkaFinish.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_SopkaFinish.png"
                ]
            ],
            "13" => [
                "0" => "Шалинское",
                "1" => [55.716, 93.752],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_Shalinskoe_29578.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_Shalinskoe_29578.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Shalinskoe_29578.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Shalinskoe_29578.png"
                ]
            ],
            "14" => [
                "0" => "Шумиха",
                "1" => [55.946, 92.293],
                "2" => [
                    "0" => "COSMO-Ru13.2ENA",
                    "1" => "http://193.7.160.224/images/cosmo13/yyyymmddhh/M_Sib_UNI_Shumikha_29566.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_UNI_Shumikha_29566.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2KRS",
                    "1" => "http://193.7.160.224/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Shumikha_29566.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.1KRS",
                    "1" => "http://193.7.160.224/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Shumikha_29566.png"
                ]
            ],
        ],
        // (16) Южный и Северо-Кавказский Федеральные округа (M_SFO_)
        // (2) COSMO-Ru7ETR, (3) COSMO-Ru2SFO, (4) COSMO-Ru1.1S
        "16" => [
            "0" => "Южный и Северо-Кавказский Федеральные округа",
            "1" => [
                "0" => "Анапа",
                "1" => [44.911, 37.26],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Anapa.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Anapa.png"
                ]
            ],
            "2" => [
                "0" => "Армавир",
                "1" => [44.997, 41.102],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Armavir_37031.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Armavir_37031.png"
                ]
            ],
            "3" => [
                "0" => "Астрахань",
                "1" => [46.29, 47.959],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Astrakhan.png"
                ]
            ],
            "4" => [
                "0" => "Волгоград",
                "1" => [48.703, 44.444],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Volgograd.png"
                ]
            ],
            "5" => [
                "0" => "Геленджик",
                "1" => [44.578, 38.021],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Gelendzhik.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Gelendzhik.png"
                ]
            ],
            "6" => [
                "0" => "Геленджик (восток)",
                "1" => [44.575, 38.108],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Gelendzhik_E.png"
                ]
            ],
            "7" => [
                "0" => "Геленджик (запад)",
                "1" => [44.58, 37.935],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Gelendzhik_W.png"
                ]
            ],
            "8" => [
                "0" => "Геленджик (север)",
                "1" => [44.64, 38.025],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Gelendzhik_N.png"
                ]
            ],
            "9" => [
                "0" => "Геленджик (юг)",
                "1" => [44.515, 38.018],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Gelendzhik_S.png"
                ]
            ],
            "10" => [
                "0" => "Горячий Ключ",
                "1" => [44.602, 39.061],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_GoryachiyKlyuch.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Gelendzhik.png"
                ]
            ],
            "11" => [
                "0" => "Джубга",
                "1" => [44.304, 38.692],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Djubga.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Djubga.png"
                ]
            ],
            "12" => [
                "0" => "Краснодар",
                "1" => [45.035, 39.184],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Krasnodar.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Krasnodar.png"
                ]
            ],
            "13" => [
                "0" => "Майкоп",
                "1" => [44.616, 40.101],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Maykop.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Maykop.png"
                ]
            ],
            "14" => [
                "0" => "Махачкала",
                "1" => [42.977, 47.531],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Makhachkala.png"
                ]
            ],
            "15" => [
                "0" => "Новороссийск",
                "1" => [44.708, 37.856],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Novorossiisk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk.png"
                ]
            ],
            "16" => [
                "0" => "Новороссийск (восток)",
                "1" => [44.705, 37.943],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Novorossiisk_E.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk_E.png"
                ]
            ],
            "17" => [
                "0" => "Новороссийск (запад)",
                "1" => [44.71, 37.77],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Novorossiisk_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk_W.png"
                ]
            ],
            "18" => [
                "0" => "Новороссийск (север)",
                "1" => [44.77, 37.86],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Novorossiisk_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk_N.png"
                ]
            ],
            "19" => [
                "0" => "Новороссийск (юг)",
                "1" => [44.645, 37.853],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Novorossiisk_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk_S.png"
                ]
            ],
            "20" => [
                "0" => "Новороссийск (юго-запад)",
                "1" => [44.7, 37.797],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk_SW.png"
                ]
            ],
            "21" => [
                "0" => "Ростов-на-Дону",
                "1" => [47.26, 39.841],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_RostovNaDonu.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk_W.png"
                ]
            ],
            "22" => [
                "0" => "Славянск-на-Кубани",
                "1" => [45.327, 38.068],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_SlavyanskNaKuba.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_SlavyanskNaKuba.png"
                ]
            ],
            "23" => [
                "0" => "Туапсе",
                "1" => [44.099, 39.105],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Tuapse_37018.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Tuapse_37018.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Tuapse_37018.png"
                ]
            ],
            "24" => [
                "0" => "Туапсе (восток)",
                "1" => [44.096, 39.19],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Tuapse_E.png"
                ]
            ],
            "25" => [
                "0" => "Туапсе (запад)",
                "1" => [44.103, 39.02],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Tuapse_W.png"
                ]
            ],
            "26" => [
                "0" => "Туапсе (север)",
                "1" => [44.162, 39.11],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Tuapse_N.png"
                ]
            ],
            "27" => [
                "0" => "Туапсе (юг)",
                "1" => [44.037, 39.1],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Tuapse_S.png"
                ]
            ],
            "28" => [
                "0" => "Элиста",
                "1" => [46.324, 44.246],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Elista.png"
                ]
            ]
        ],
        // (17) Крым (M_SFO_)
        // (2) COSMO-Ru7ETR, (3) COSMO-Ru2SFO, (4) COSMO-Ru1.1S
        "17" => [
            "0" => "Крым",
            "1" => [
                "0" => "Севастополь (33991)",
                "1" => [44.605, 33.531],
                "2" => [
                    "0" => "COSMO-Ru2SFO ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Crm_Sevastopol_33991.png"
                ]
            ],
            "2" => [
                "0" => "Севастополь (33994)",
                "1" => [44.584, 33.393],
                "2" => [
                    "0" => "COSMO-Ru2SFO ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Crm_Sevastopol_33994.png"
                ]
            ],
            "3" => [
                "0" => "Симферополь (аэродром)",
                "1" => [45.052, 33.965],
                "2" => [
                    "0" => "COSMO-Ru2SFO ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Crm_Simferopol_aerodrom.png"
                ]
            ],
            "4" => [
                "0" => "Симферополь (33946)",
                "1" => [44.96, 34.114],
                "2" => [
                    "0" => "COSMO-Ru2SFO ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Crm_Simferopol_33946.png"
                ]
            ]
        ],
        // (18) Сочи (M_SFO_Sochi_)
        // (2) COSMO-Ru7ETR, (3) COSMO-Ru2SFO, (4) COSMO-Ru1.1S
        "18" => [
            "0" => "Сочи",
            "1" => [
                "0" => "Адлер",
                "1" => [43.444, 39.93],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Adler_AMSG_37171.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Adler.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_AdlerAirport.png"
                ]
            ],
            "2" => [
                "0" => "Адлер (восток)",
                "1" => [43.435, 39.862],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Adler_E.png"
                ]
            ],
            "3" => [
                "0" => "Адлер (запад)",
                "1" => [43.432, 39.916],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Adler_AMSG_37171_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Adler_W.png"
                ]
            ],
            "4" => [
                "0" => "Адлер (север)",
                "1" => [43.451, 39.945],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Adler_AMSG_37171_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Adler_N.png"
                ]
            ],
            "5" => [
                "0" => "Адлер (юг)",
                "1" => [43.411, 39.941],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Adler_AMSG_37171_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Adler_S.png"
                ]
            ],
            "6" => [
                "0" => "Аибга",
                "1" => [43.633, 40.289],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_SnL_Aibga.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_SnL_Aibga.png"
                ]
            ],
            "7" => [
                "0" => "Аибга (восток)",
                "1" => [43.631, 40.316],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_E.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_E.png"
                ]
            ],
            "8" => [
                "0" => "Аибга (запад)",
                "1" => [43.634, 40.262],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_W.png"
                ]
            ],
            "9" => [
                "0" => "Аибга (север)",
                "1" => [43.652, 40.291],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_N.png"
                ]
            ],
            "10" => [
                "0" => "Аибга (северо-запад)",
                "1" => [43.637, 40.281],
                "2" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Aibga_NW.png"
                ]
            ],
            "11" => [
                "0" => "Аибга (юг)",
                "1" => [43.613, 40.287],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_S.png"
                ]
            ],
            "12" => [
                "0" => "Аибга (юго-восток)",
                "1" => [43.63, 40.291],
                "2" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Aibga_SE.png"
                ]
            ],
            "13" => [
                "0" => "Арго",
                "1" => [43.572, 39.756],
                "2" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_SochiAgro.png"
                ]
            ],
            "14" => [
                "0" => "Ахун (гора)",
                "1" => [43.55, 39.843],
                "2" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_AkhunMount.png"
                ]
            ],
            "15" => [
                "0" => "Биатлон",
                "1" => [43.689, 40.349],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Biathlon.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Biathlon.png"
                ]
            ],
            "16" => [
                "0" => "Биатлон (восток)",
                "1" => [43.693, 40.34],
                "2" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Biathlon_E.png"
                ]
            ],
            "17" => [
                "0" => "Биатлон (запад)",
                "1" => [43.693, 40.321],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Biathlon_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Biathlon_W.png"
                ]
            ],
            "18" => [
                "0" => "Биатлон (север)",
                "1" => [43.724, 40.35],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Biathlon_N.png"
                ]
            ],
            "19" => [
                "0" => "Волноисследовательская станция",
                "1" => [43.561, 39.739],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_VolnIsslStation.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_VolnIsslStation.png"
                ]
            ],
            "20" => [
                "0" => "Горная Карусель (станция 37098)",
                "1" => [43.654, 40.264],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_MCarousel_37098.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_MCarousel_37098.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_MCarousel_1500.png"
                ]
            ],
            "21" => [
                "0" => "Горная Карусель (станция 37102)",
                "1" => [43.674, 40.266],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_MCarousel_37102.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_MCarousel_37102.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_MCarousel_1000.png"
                ]
            ],
            "22" => [
                "0" => "Имеретинка",
                "1" => [43.409, 39.967],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Imeretinka_37095.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Imeretinka_37095.png"
                ]
            ],
            "23" => [
                "0" => "Имеретинка (восток)",
                "1" => [43.411, 39.941],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Imeretinka_37095_E.png"
                ]
            ],
            "24" => [
                "0" => "Имеретенская бухта",
                "1" => [43.401, 39.988],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_ImeretinskyBay.png"
                ]
            ],
            "25" => [
                "0" => "Кепша",
                "1" => [43.612, 40.047],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kepsha_37100.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kepsha_37100.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Kepsha.png"
                ]
            ],
            "26" => [
                "0" => "Кепша (восток)",
                "1" => [43.604, 40.068],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_E.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_E.png"
                ]
            ],
            "27" => [
                "0" => "Кепша (запад)",
                "1" => [43.607, 40.014],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_W.png"
                ]
            ],
            "28" => [
                "0" => "Кепша (север)",
                "1" => [43.626, 40.044],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_N.png"
                ]
            ],
            "29" => [
                "0" => "Кепша (северо-восток)",
                "1" => [43.624, 40.071],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_NE.png"
                ]
            ],
            "30" => [
                "0" => "Кепша (юг)",
                "1" => [43.586, 40.039],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_S.png"
                ]
            ],
            "31" => [
                "0" => "Кепша (юго-запад)",
                "1" => [43.556, 39.992],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_SW.png"
                ]
            ],
            "32" => [
                "0" => "Кичмай",
                "1" => [43.833, 39.519],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kichmay_37094.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kichmay_37094.png"
                ]
            ],
            "33" => [
                "0" => "Кичмай (запад)",
                "1" => [43.834, 39.492],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_W.png"
                ]
            ],
            "34" => [
                "0" => "Кичмай (север)",
                "1" => [43.853, 39.521],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_N.png"
                ]
            ],
            "35" => [
                "0" => "Кичмай (юг)",
                "1" => [43.813, 39.517],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_S.png"
                ]
            ],
            "36" => [
                "0" => "Кичмай (юго-запад)",
                "1" => [43.814, 39.49],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_SW.png"
                ]
            ],
            "37" => [
                "0" => "Кордон Лаура",
                "1" => [43.701, 40.272],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KorLa.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_CFM_KorLa.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_KorLa.png"
                ]
            ],
            "38" => [
                "0" => "Кордон Лаура (восток)",
                "1" => [43.662, 40.343],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KorLa_E.png"
                ]
            ],
            "39" => [
                "0" => "Кордон Лаура (запад)",
                "1" => [43.734, 40.18],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KorLa_W.png"
                ]
            ],
            "40" => [
                "0" => "Кордон Лаура (юг)",
                "1" => [43.667, 40.258],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KorLa_S.png"
                ]
            ],
            "41" => [
                "0" => "Красная Поляна",
                "1" => [43.681, 40.204],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KrPol.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_CFM_KrPol.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_KrPol.png"
                ]
            ],
            "42" => [
                "0" => "Красная Поляна (восток)",
                "1" => [43.675, 40.239],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_E.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_E.png"
                ]
            ],
            "43" => [
                "0" => "Красная Поляна (запад)",
                "1" => [43.678, 40.185],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_W.png"
                ]
            ],
            "44" => [
                "0" => "Красная Поляна (север)",
                "1" => [43.697, 40.214],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_N.png"
                ]
            ],
            "45" => [
                "0" => "Красная Поляна (юг)",
                "1" => [43.657, 40.21],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_S.png"
                ]
            ],
            "46" => [
                "0" => "Лазаревское",
                "1" => [43.906, 39.336],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Lazarevskoye.png"
                ]
            ],
            "47" => [
                "0" => "Лазаревское (восток)",
                "1" => [43.897, 39.429],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093_E.png"
                ]
            ],
            "48" => [
                "0" => "Лазаревское (запад)",
                "1" => [43.903, 39.307],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093_W.png"
                ],
            ],
            "49" => [
                "0" => "Лазаревское (север)",
                "1" => [43.921, 39.336],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093_N.png"
                ]
            ],
            "50" => [
                "0" => "Лазаревское (северо-восток)",
                "1" => [43.92, 39.363],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093NE.png"
                ]
            ],
            "51" => [
                "0" => "Лыжный трамплин (север)",
                "1" => [43.68, 40.243],
                "2" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_SkiJump_N.png"
                ]
            ],
            "52" => [
                "0" => "Лыжный трамплин (юг)",
                "1" => [43.667, 40.258],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_SkiJump-800.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_SkiJump-800.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_SkiJump_S.png"
                ]
            ],
            "53" => [
                "0" => "Магри",
                "1" => [44.019, 39.16],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Magry_37015.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Magry_37015.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Magry.png"
                ]
            ],
            "54" => [
                "0" => "Магри (север)",
                "1" => [44.05, 39.156],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Magry_37015_N.png"
                ]
            ],
            "55" => [
                "0" => "Магри (юг)",
                "1" => [44.01, 39.152],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Magry_37015_S.png"
                ]
            ],
            "56" => [
                "0" => "Роза Хутор",
                "1" => [43.644, 40.33],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_RKhut4.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_RKhut4.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_RKhut7.png"
                ]
            ],
            "57" => [
                "0" => "Роза Хутор (восток)",
                "1" => [43.631, 40.316],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_RKhut4_E.png"
                ]
            ],
            "58" => [
                "0" => "Роза Хутор (северо-запад)",
                "1" => [43.644, 40.31],
                "2" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_RKhut4_NW.png"
                ]
            ],
            "59" => [
                "0" => "Роза Хутор (юг)",
                "1" => [43.6, 40.336],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_RKhut4_S.png"
                ]
            ],
            "60" => [
                "0" => "Роза Хутор (юго-восток)",
                "1" => [43.637, 40.32],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_RKhut4_SE.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_RKhut4_SE.png"
                ]
            ],
            "61" => [
                "0" => "Роза Хутор (финиш)",
                "1" => [43.649, 40.345],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_RKhut_finish.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_RKhut_finish.png"
                ]
            ],
            "62" => [
                "0" => "Сани (север)",
                "1" => [43.672, 40.291],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Sledge-700.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Sledge-700.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Sledge_N.png"
                ]
            ],
            "63" => [
                "0" => "Сани (юг)",
                "1" => [43.658, 40.291],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Sledge-830.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Sledge-830.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Sledge_S.png"
                ]
            ],
            "64" => [
                "0" => "Солохаул",
                "1" => [43.798, 39.639],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Solokh-Aul.png"
                ]
            ],
            "65" => [
                "0" => "Солохаул (восток)",
                "1" => [43.786, 39.651],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092_E.png"
                ]
            ],
            "66" => [
                "0" => "Солохаул (запад)",
                "1" => [43.827, 39.593],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092_W.png"
                ]
            ],
            "67" => [
                "0" => "Солохаул (север)",
                "1" => [43.808, 39.626],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092_N.png"
                ]
            ],
            "68" => [
                "0" => "Солохаул (северо-восток)",
                "1" => [43.806, 39.653],
                "2" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092_NE.png"
                ]
            ],
            "69" => [
                "0" => "Солохаул (юг)",
                "1" => [43.76, 39.672],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092_S.png"
                ]
            ],
            "70" => [
                "0" => "Солохаул (юго-запад)",
                "1" => [43.764, 39.588],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092_SW.png"
                ]
            ],
            "71" => [
                "0" => "Сочи",
                "1" => [43.58, 39.767],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_A_Sochi.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_A_Sochi.png"
                ]
            ],
            "72" => [
                "0" => "Сочи (восток)",
                "1" => [43.579, 39.794],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_A_Sochi_E.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_A_Sochi_E.png"
                ]
            ],
            "73" => [
                "0" => "Сочи (запад)",
                "1" => [43.581, 39.74],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_A_Sochi_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_A_Sochi_W.png"
                ]
            ],
            "74" => [
                "0" => "Сочи (север)",
                "1" => [43.6, 39.769],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_A_Sochi_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_A_Sochi_N.png"
                ]
            ],
            "75" => [
                "0" => "Сочи (юг)",
                "1" => [43.56, 39.766],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_A_Sochi_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_A_Sochi_S.png"
                ]
            ],
            "76" => [
                "0" => "Фристайл",
                "1" => [43.651, 40.32],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Freestyle_1080.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2SFO",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Freestyle_1080.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru1.1S",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Freestyle_1080.png"
                ]
            ]
        ],
        // (19) Уральский Федеральный округ (M_UFO_)
        // (2) COSMO-Ru7ETR, (3) COSMO-Ru6ENA
        "19" => [
            "0" => "Уральский Федеральный округ",
            "1" => [
                "0" => "Екатеринбург",
                "1" => [60.592, 56.793],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_UFO_Ekaterinburg.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Ekaterinburg.png"
                ]
            ],
            "2" => [
                "0" => "Ишим",
                "1" => [56.111, 69.401],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_UFO_Ishim.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Ishim.png"
                ]
            ],
            "3" => [
                "0" => "Курган",
                "1" => [55.442, 65.322],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_UFO_Kurgan.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Kurgan.png"
                ]
            ],
            "4" => [
                "0" => "Салехард",
                "1" => [66.647, 66.473],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_UFO_Salekhard.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Salekhard.png"
                ]
            ],
            "5" => [
                "0" => "Тазовский",
                "1" => [67.492, 78.666],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_UFO_Tazovsky.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Tazovsky.png"
                ]
            ],
            "6" => [
                "0" => "Тарко-Сале",
                "1" => [64.919, 77.751],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_UFO_Tarko-Sale.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Tarko-Sale.png"
                ]
            ],
            "7" => [
                "0" => "Тобольск",
                "1" => [58.17, 68.193],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_UFO_Tobolsk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Tobolsk.png"
                ]
            ],
            "8" => [
                "0" => "Тюмень",
                "1" => [57.179, 65.55],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_UFO_Tyumen.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Tyumen.png"
                ]
            ],
            "9" => [
                "0" => "Челябинск",
                "1" => [55.166, 61.407],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_UFO_Chelyabinsk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Chelyabinsk.png"
                ]
            ]
        ],
        // (20) Ханты-Мансийский автономный округ (M_UFO_Yug_)
        // (2) COSMO-Ru6ENA
        "20" => [
            "0" => "Ханты-Мансийский автономный округ",
            "1" => [
                "0" => "Алтай",
                "1" => [60.321, 69.967],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Altai_23939.png"
                ]
            ],
            "2" => [
                "0" => "Берёзово",
                "1" => [63.872, 64.969],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Beryozovo_23631.png"
                ]
            ],
            "3" => [
                "0" => "Когалым",
                "1" => [62.204, 74.55],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Kogalym_23748.png"
                ]
            ],
            "4" => [
                "0" => "Кондинское",
                "1" => [59.62, 67.413],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Kondinskoye_28066.png"
                ]
            ],
            "5" => [
                "0" => "Корлики",
                "1" => [61.776, 82.253],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Korliki_23862.png"
                ]
            ],
            "6" => [
                "0" => "Куминская (станция)",
                "1" => [58.828, 66.003],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Kuminskaya_28165.png"
                ]
            ],
            "7" => [
                "0" => "Ларьяк",
                "1" => [61.319, 79.976],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Laryak_23867.png"
                ]
            ],
            "8" => [
                "0" => "Нефтеюганск",
                "1" => [60.994, 72.36],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Nefteyugansk_23848.png"
                ]
            ],
            "9" => [
                "0" => "Нижневартовск",
                "1" => [60.833, 76.636],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Nizhnevartovsky_23471.png"
                ]
            ],
            "10" => [
                "0" => "Нижнесортымский",
                "1" => [62.772, 71.657],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Nignesortimky_23741.png"
                ]
            ],
            "11" => [
                "0" => "Октябрьское",
                "1" => [62.381, 66.021],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Oktyabrskoye_23734.png"
                ]
            ],
            "12" => [
                "0" => "Саранпауль",
                "1" => [64.317, 60.891],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Saranpaul_23527.png"
                ]
            ],
            "13" => [
                "0" => "Сургут",
                "1" => [61.211, 73.523],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Surgut_23849.png"
                ]
            ],
            "14" => [
                "0" => "Таурова",
                "1" => [59.507, 73.319],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Taurovo_28097.png"
                ]
            ],
            "15" => [
                "0" => "Ханты-Мансийск",
                "1" => [69.01, 60.948],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_UFO_Yug_Khanty-Mansiysk_23933.png"
                ]
            ]
        ],
        // (21) Дальневосточный Федеральный округ (M_DVO_)
        // (2) COSMO-Ru6ENA
        "21" => [
            "0" => "Дальневосточный Федеральный округ",
            "1" => [
                "0" => "Агинское",
                "1" => [51.115, 114.581],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Aginskoye.png"
                ]
            ],
            "2" => [
                "0" => "Анадырь",
                "1" => [64.783, 177.567],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Anadyr_25563.png"
                ]
            ],
            "3" => [
                "0" => "Аян",
                "1" => [56.45, 138.15],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Ayan_31168.png"
                ]
            ],
            "4" => [
                "0" => "Бикин",
                "1" => [46.8, 134.267],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Bikin_31832.png"
                ]
            ],
            "5" => [
                "0" => "Биробиджан",
                "1" => [48.733, 132.950],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Birobidjan_31713.png"
                ]
            ],
            "6" => [
                "0" => "Благовещенск",
                "1" => [50.533, 127.5],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Blagoveschensk_31510.png"
                ]
            ],
            "7" => [
                "0" => "Владивосток",
                "1" => [43.117, 131.933],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Vladivostok_31960.png"
                ]
            ],
            "8" => [
                "0" => "Кабанск",
                "1" => [52.045, 106.678],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Bur_Kabansk_30729.png"
                ]
            ],
            "9" => [
                "0" => "Комсомольск-на-Амуре",
                "1" => [50.533, 137.033],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Komsomolsk-on-Amur_31561.png"
                ]
            ],
            "10" => [
                "0" => "Магадан",
                "1" => [59.55, 150.783],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Magadan_25913.png"
                ]
            ],
            "11" => [
                "0" => "Николаевск-на-Амуре",
                "1" => [53.15, 140.7],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Nikolayevsk-on-Amur_31369.png"
                ]
            ],
            "12" => [
                "0" => "Охотск",
                "1" => [59.367, 143.2],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Okhotsk_31088.png"
                ]
            ],
            "13" => [
                "0" => "Палана",
                "1" => [59.083, 159.967],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Palana_32227.png"
                ]
            ],
            "14" => [
                "0" => "Петропавловск-Камчатск",
                "1" => [53.083, 158.583],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Petropavl-Kamchatsk_32540.png"
                ]
            ],
            "15" => [
                "0" => "Советская Гавань",
                "1" => [49, 140.3],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_SovetskayaGavan_31770.png"
                ]
            ],
            "16" => [
                "0" => "Хабаровск",
                "1" => [48.517, 135.167],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Khabarovsk_31735.png"
                ]
            ],
            "17" => [
                "0" => "Чегдомын",
                "1" => [51.167, 132.95],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Chegdomyn_31469.png"
                ]
            ],
            "18" => [
                "0" => "Чита",
                "1" => [52.026, 113.536],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_Sib_Chita.png"
                ]
            ],
            "19" => [
                "0" => "Чумикан",
                "1" => [54.717, 135.3],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Chumikan_31286.png"
                ]
            ],
            "20" => [
                "0" => "Южно-Курильск",
                "1" => [44.34, 146.15],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_YuKurilsk_32165.png"
                ]
            ],
            "21" => [
                "0" => "Южно-Сахалинск",
                "1" => [46.950, 142.717],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_YuSakhalinsk_32150.png"
                ]
            ]
        ],
        // (22) Республика Саха (Якутия) (M_DVO_Yak_)
        // (2) COSMO-Ru6ENA
        "22" => [
            "0" => "Республика Саха (Якутия)",
            "1" => [
                "0" => "Верхоянск",
                "1" => [67.55, 133.383],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Yak_Verkhoyansk_24266.png"
                ]
            ],
            "2" => [
                "0" => "Витим",
                "1" => [59.27, 112.35],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Yak_Vitim_30054.png"
                ]
            ],
            "3" => [
                "0" => "Депутатский",
                "1" => [69.33, 139.67],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Yak_Deputatsky_24076.png"
                ]
            ],
            "4" => [
                "0" => "Жиганск",
                "1" => [66.46, 123.24],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Yak_Zhigansk_24343.png"
                ]
            ],
            "5" => [
                "0" => "Зырянка",
                "1" => [65.73, 150.9],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Yak_Zyryanka_25400.png"
                ]
            ],
            "6" => [
                "0" => "Мирный",
                "1" => [62.32, 113.52],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Yak_Mirny_24726.png"
                ]
            ],
            "7" => [
                "0" => "Олёкминск",
                "1" => [60.4, 120.42],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Yak_Olyokminsk_24944.png"
                ]
            ],
            "8" => [
                "0" => "Полярный",
                "1" => [66.73, 112.43],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Yak_Polyarny_24322.png"
                ]
            ],
            "9" => [
                "0" => "Тёплый Ключ",
                "1" => [62.8, 136.85],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Yak_TeplyyKlyuch_24771.png"
                ]
            ],
            "10" => [
                "0" => "Тикси",
                "1" => [71.58, 128.92],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Yak_Tiksi_21824.png"
                ]
            ],
            "11" => [
                "0" => "Чульман",
                "1" => [56.5, 124.52],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Yak_Chulman_30393.png"
                ]
            ],
            "12" => [
                "0" => "Якутск",
                "1" => [62.01, 129.43],
                "2" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_DVO_Yak_Yakutsk_24959.png"
                ]
            ]
        ],
        // (23) Москва (M_CFO_MOb_)
        // (2) COSMO-Ru7ETR, (3) COSMO-Ru6ENA, (4) COSMO-Ru2.2CFO, (5) COSMO-RuBy2ETR, (6) COSMO-Ru1.0M
        "23" => [
            "0" => "Москва",
            "1" => [
                "0" => "ВДНХ",
                "1" => [55.833, 37.605],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Moscow.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru6ENA",
                    "1" => "http://193.7.160.224/images/cosmo6/yyyymmddhh/M_CFO_Moscow.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Moscow.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Moscow.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Moscow.png"
                ]
            ],
            "2" => [
                "0" => "ТСХА",
                "1" => [55.834, 37.584],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_TCXA_27519.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_TCXA_27519.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_TCXA_27519.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_TCXA_27519.png"
                ]
            ],
            "3" => [
                "0" => "МГУ",
                "1" => [55.705, 37.534],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MosMSU.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MosMSU.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MosMSU.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MosMSU.png"
                ]
            ],
            "4" => [
                "0" => "ГМЦ",
                "1" => [55.762, 37.582],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MosHMC.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MosHMC.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MosHMC.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MosHMC.png"
                ]
            ],
            "5" => [
                "0" => "Балчуг",
                "1" => [55.735, 37.633],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Balchug_27605.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Balchug_27605.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Balchug_27605.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Balchug_27605.png"
                ]
            ],
            "6" => [
                "0" => "МКАД С-З 92 км",
                "1" => [55.877, 37.73],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Mkadne92.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Mkadne92.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Mkadne92.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Mkadne92.png"
                ]
            ],
            "7" => [
                "0" => "МКАД С-В 66 км",
                "1" => [55.789, 37.38],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Mkadnw66.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Mkadnw66.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Mkadnw66.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Mkadnw66.png"
                ]
            ],
            "8" => [
                "0" => "МКАД Ю-З 11 км",
                "1" => [55.708, 37.835],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Mkadse11.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Mkadse11.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Mkadse11.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Mkadse11.png"
                ]
            ],
            "9" => [
                "0" => "МКАД Ю-В 43 км",
                "1" => [55.578, 37.563],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Mkadsw43.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Mkadsw43.png"
                ],
                "5" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Mkadsw43.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Mkadsw43.png"
                ]
            ],
            "10" => [
                "0" => "Бутово",
                "1" => [55.574, 37.548],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MosButovo_27504.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MosButovo_27504.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MosButovo_27504.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MosButovo_27504.png"
                ]
            ],
            "11" => [
                "0" => "Немчиновка",
                "1" => [55.704, 37.383],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ]
            ],
            "12" => [
                "0" => "Тушино",
                "1" => [55.874, 37.428],
                "2" => [
                    "0" => "COSMO-Ru7ETR",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru2.2CFO",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ],
                "4" => [
                    "0" => "COSMO-RuBy2ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru1.0M",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ]
            ]
        ]
    ];

?>
