<?php

//$meteograms[$id_domen] - регион
//$meteograms[$id_domen][0] - название региона
//$meteograms[$id_domen][$id_point] - населенный пункт
//$meteograms[$id_domen][$id_point][0] - название населенного пункта
//$meteograms[$id_domen][$id_point][1] - координаты населенного пункта
//$meteograms[$id_domen][$id_point][$id_model] - модели
//$meteograms[$id_domen][$id_point][$id_model][0] - название модели
//$meteograms[$id_domen][$id_point][$id_model][1] - шаблон ссылки

    $meteograms = [
        "1" => [
            "0" => "Республика Беларусь",
            "1" => [
                "0" => "Александрия",
                "1" => [54.3306, 30.2831],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Mog_Alexandria.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Mog_Alexandria.png"
                ]
            ],
            "2" => [
                "0" => "Барановичи",
                "1" => [53.117, 26.000],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Baranovichi_26941.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Baranovichi_26941.png"
                ]
            ],
            "3" => [
                "0" => "Бобруйск",
                "1" => [53.217, 29.183],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Bobruisk_26961.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Bobruisk_26961.png"
                ]
            ],
            "4" => [
                "0" => "Брест",
                "1" => [52.117,  23.683],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Brest_33008.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Brest_33008.png"
                ]
            ],
            "5" => [
                "0" => "Вискули",
                "1" => [52.62222, 23.6256],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Bre_Viskuli.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Bre_Viskuli.png"
                ]
            ],
            "6" => [
                "0" => "Витебск",
                "1" => [55.167,  30.217],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Vitebsk_26666.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Vitebsk_26666.png"
                ]
            ],
            "7" => [
                "0" => "Волосово",
                "1" => [55.55, 29.5167],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Vit_Volosovo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Vit_Volosovo.png"
                ]
            ],
            "8" => [
                "0" => "Гомель",
                "1" => [52.400,  30.950],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Gomel_33041.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Gomel_33041.png"
                ]
            ],
            "9" => [
                "0" => "Гродно",
                "1" => [53.600,  24.050],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Grodno_26825.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Grodno_26825.png"
                ]
            ],
            "10" => [
                "0" => "Заславль",
                "1" => [53.997, 27.296],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Zaslavl.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Zaslavl.png"
                ]
            ],
            "11" => [
                "0" => "Кунцевщина",
                "1" => [53.906, 27.393],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Minsk_Kuntsevshchina.png"
                ]
            ],
            "12" => [
                "0" => "Лясковичи",
                "1" => [52.65, 28.5333],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Gom_Lyaskovichi.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Gom_Lyaskovichi.png"
                ]
            ],
            "13" => [
                "0" => "Минск",
                "1" => [53.933,  27.633],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Minsk_26850.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Minsk_26850.png"
                ]
            ],
            "14" => [
                "0" => "Мозир",
                "1" => [51.950, 29.167],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Mozir_33036.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Mozir_33036.png"
                ]
            ],
            "15" => [
                "0" => "Могилев",
                "1" => [53.950, 30.067],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Mogilev_26862.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Mogilev_26862.png"
                ]
            ],
            "16" => [
                "0" => "Обсерватория (г. Минск)",
                "1" => [53.928, 27.63],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Minsk_observatory.png"
                ]
            ],
            "17" => [
                "0" => "Пинск",
                "1" => [52.117, 26.117],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Pinsk_33019.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Pinsk_33019.png"
                ]
            ],
            "18" => [
                "0" => "Полоцк",
                "1" => [55.467, 28.767],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_Bel_Polotsk_26653.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Polotsk_26653.png"
                ]
            ],
            "19" => [
                "0" => "Самохваловичи",
                "1" => [53.731, 27.513],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Minsk_Samokhvalovichi.png"
                ]
            ],
            "20" => [
                "0" => "Уручье",
                "1" => [53.964, 27.718],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Minsk_Uruchye.png"
                ]
            ],
            "21" => [
                "0" => "Хатежино",
                "1" => [53.925, 27.291],
                "3" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Bel_Minsk_Hatezhino.png"
                ]
            ]
        ],
        "2" => [
            "0" => "Москва",
            "1" => [
                "0" => "ВДНХ",
                "1" => [55.833, 37.605],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Moscow.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_CFO_Moscow.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Moscow.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Moscow.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Moscow.png"
                ]
            ],
            "2" => [
                "0" => "ТСХА",
                "1" => [55.834, 37.584],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_TCXA_27519.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_TCXA_27519.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_TCXA_27519.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_TCXA_27519.png"
                ]
            ],
            "3" => [
                "0" => "МГУ",
                "1" => [55.705, 37.534],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MosMSU.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MosMSU.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MosMSU.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MosMSU.png"
                ]
            ],
            "4" => [
                "0" => "ГМЦ",
                "1" => [55.762, 37.582],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MosHMC.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MosHMC.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MosHMC.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MosHMC.png"
                ]
            ],
            "5" => [
                "0" => "Балчуг",
                "1" => [55.745, 37.628],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MosBalchug_27605.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MosBalchug_27605.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MosBalchug_27605.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MosBalchug_27605.png"
                ]
            ],
            "6" => [
                "0" => "МКАД С-В 92 км",
                "1" => [55.877, 37.73],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Mkadne92.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Mkadne92.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Mkadne92.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Mkadne92.png"
                ]
            ],
            "7" => [
                "0" => "МКАД З 66 км",
                "1" => [55.789, 37.38],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Mkadnw66.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Mkadnw66.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Mkadnw66.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Mkadnw66.png"
                ]
            ],
            "8" => [
                "0" => "МКАД В 11 км",
                "1" => [55.708, 37.835],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Mkadse11.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Mkadse11.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Mkadse11.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Mkadse11.png"
                ]
            ],
            "9" => [
                "0" => "МКАД Ю 43 км",
                "1" => [55.578, 37.563],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Mkadsw43.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Mkadsw43.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Mkadsw43.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Mkadsw43.png"
                ]
            ],
            "10" => [
                "0" => "Бутово",
                "1" => [55.574, 37.548],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MosButovo_27504.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MosButovo_27504.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MosButovo_27504.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MosButovo_27504.png"
                ]
            ],
            "11" => [
                "0" => "Немчиновка",
                "1" => [55.7, 37.372],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ]
            ],
            "12" => [
                "0" => "Тушино",
                "1" => [55.874, 37.428],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ]
            ]
        ],
        "3" => [
            "0" => "Московская область",
            // "1" => [
            //     "0" => "Быково",
            //     "1" => [55.639, 38.062],
            //     "2" => [
            //         "0" => "COSMO-Ru-7",
            //         "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Bikovo_27527.png"
            //     ],
            //     "4" => [
            //         "0" => "COSMO-Ru-2",
            //         "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Bikovo_27527.png"
            //     ],
            //     "5" => [
            //         "0" => "COSMO-Ru-By-2",
            //         "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Bikovo_27527.png"
            //     ],
            //     "6" => [
            //         "0" => "COSMO-Ru-1",
            //         "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Bikovo_27527.png"
            //     ]
            // ],
            // "2" => [
            //     "0" => "Внуково",
            //     "1" => [55.604, 37.262],
            //     "2" => [
            //         "0" => "COSMO-Ru-7",
            //         "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Vnukovo_27524.png"
            //     ],
            //     "4" => [
            //         "0" => "COSMO-Ru-2",
            //         "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Vnukovo_27524.png"
            //     ],
            //     "5" => [
            //         "0" => "COSMO-Ru-By-2",
            //         "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Vnukovo_27524.png"
            //     ],
            //     "6" => [
            //         "0" => "COSMO-Ru-1",
            //         "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Vnukovo_27524.png"
            //     ]
            // ],
            "1" => [
                "0" => "Волоколамск",
                "1" => [56.035, 35.979],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Volokolamsk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Volokolamsk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Volokolamsk.png"
                ]
            ],
            "4" => [
                "0" => "Дмитров",
                "1" => [56.342, 37.539],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Dmitrov.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Dmitrov.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Dmitrov.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Dmitrov.png"
                ]
            ],
            // "5" => [
            //     "0" => "Домодедово",
            //     "1" => [55.397, 37.892],
            //     "2" => [
            //         "0" => "COSMO-Ru-7",
            //         "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Domodedovo_27613.png"
            //     ],
            //     "4" => [
            //         "0" => "COSMO-Ru-2",
            //         "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Domodedovo_27613.png"
            //     ],
            //     "5" => [
            //         "0" => "COSMO-Ru-By-2",
            //         "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Domodedovo_27613.png"
            //     ],
            //     "6" => [
            //         "0" => "COSMO-Ru-1",
            //         "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Domodedovo_27613.png"
            //     ]
            // ],
            "6" => [
                "0" => "Кашира",
                "1" => [54.833, 38.149],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Kashira.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Kashira.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Kashira.png"
                ]
            ],
            "7" => [
                "0" => "Клин",
                "1" => [56.318, 36.749],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Klin.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Klin.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Klin.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Klin.png"
                ]
            ],
            "8" => [
                "0" => "Коломна",
                "1" => [55.089, 38.788],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Kolomna.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Kolomna.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Kolomna.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Kolomna.png"
                ]
            ],
            "9" => [
                "0" => "Кучино",
                "1" => [55.751, 37.959],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Kuchino_27530.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Kuchino_27530.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Kuchino_27530.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Kuchino_27530.png"
                ]
            ],
            "10" => [
                "0" => "Луховицы",
                "1" => [54.905, 39.009],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Lukhovitsy.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Lukhovitsy.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Lukhovitsy.png"
                ]
            ],
            // "11" => [
            //     "0" => "Михайловское",
            //     "1" => [55.461, 37.167],
            //     "2" => [
            //         "0" => "COSMO-Ru-7",
            //         "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Mihailovskoe_27614.png"
            //     ],
            //     "4" => [
            //         "0" => "COSMO-Ru-2",
            //         "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Mihailovskoe_27614.png"
            //     ],
            //     "5" => [
            //         "0" => "COSMO-Ru-By-2",
            //         "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Mihailovskoe_27614.png"
            //     ],
            //     "6" => [
            //         "0" => "COSMO-Ru-1",
            //         "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Mihailovskoe_27614.png"
            //     ]
            // ],
            "12" => [
                "0" => "Можайск",
                "1" => [55.512, 35.991],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Mojaisk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Mojaisk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Mojaisk.png"
                ]
            ],
            "13" => [
                "0" => "Наро-Фоминск",
                "1" => [55.384, 36.747],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_NaroFominsk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_NaroFominsk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_NaroFominsk.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_NaroFominsk.png"
                ]
            ],
            "14" => [
                "0" => "Немчиновка",
                "1" => [55.7, 37.372],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515.png"
                ]
            ],
            "15" => [
                "0" => "Новошихово",
                "1" => [55.696, 36.781],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Novoshikhovo_IFA.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Novoshikhovo_IFA.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Novoshikhovo_IFA.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Novoshikhovo_IFA.png"
                ]
            ],
            "16" => [
                "0" => "Новый Иерусалим",
                "1" => [55.895, 36.822],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Novo-Ierusalim_27511.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Novo-Ierusalim_27511.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Novo-Ierusalim_27511.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Novo-Ierusalim_27511.png"
                ]
            ],
            "17" => [
                "0" => "Павлов Посад",
                "1" => [55.768, 38.688],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_PavlovPosad.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_PavlovPosad.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_PavlovPosad.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_PavlovPosad.png"
                ]
            ],
            "18" => [
                "0" => "Раменское",
                "1" => [55.554, 38.163],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Ramenskoye.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Ramenskoye.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Ramenskoye.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Ramenskoye.png"
                ]
            ],
            "19" => [
                "0" => "Серпухов",
                "1" => [54.913, 37.459],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Serpuhov.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Serpuhov.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Serpuhov.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Serpuhov.png"
                ]
            ],
            "20" => [
                "0" => "Солнцево",
                "1" => [55.647, 37.385],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Solntsevo.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Solntsevo.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Solntsevo.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Solntsevo.png"
                ]
            ],
            "21" => [
                "0" => "Тушино",
                "1" => [55.874, 37.428],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Tushino_27619.png"
                ]
            ],
            "22" => [
                "0" => "Черусти",
                "1" => [55.549, 40.013],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Cherusti.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Cherusti.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Cherusti.png"
                ]
            ],
            // "23" => [
            //     "0" => "Шереметьево",
            //     "1" => [55.959, 37.425],
            //     "2" => [
            //         "0" => "COSMO-Ru-7",
            //         "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Sheremetevo_27514.png"
            //     ],
            //     "4" => [
            //         "0" => "COSMO-Ru-2",
            //         "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Sheremetevo_27514.png"
            //     ],
            //     "5" => [
            //         "0" => "COSMO-Ru-By-2",
            //         "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Sheremetevo_27514.png"
            //     ],
            //     "6" => [
            //         "0" => "COSMO-Ru-1",
            //         "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Sheremetevo_27514.png"
            //     ]
            // ],
            "24" => [
                "0" => "Электроугли",
                "1" => [55.751, 37.959],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_MOb_Elektrougli_27531.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_MOb_Elektrougli_27531.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_MOb_Elektrougli_27531.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Elektrougli_27531.png"
                ]
            ]
        ],
        "4" => [
            "0" => "Центральный федеральный округ",
            "1" => [
                "0" => "Белгород",
                "1" => [50.629, 36.598],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Belgorod.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Belgorod.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Belgorod.png"
                ]
            ],
            "2" => [
                "0" => "Брянск",
                "1" => [53.241, 34.317],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Bryansk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Bryansk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Bryansk.png"
                ]
            ],
            "3" => [
                "0" => "Владимир",
                "1" => [56.181, 40.364],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Vladimir.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Vladimir.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Vladimir.png"
                ]
            ],
            "4" => [
                "0" => "Воронеж",
                "1" => [51.708, 39.217],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Voronesh.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Voronesh.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Voronesh.png"
                ]
            ],
            "5" => [
                "0" => "Иваново",
                "1" => [56.95, 40.992],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Ivanovo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_CFO_Ivanovo.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Ivanovo.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Ivanovo.png"
                ]
            ],
            "6" => [
                "0" => "Калуга",
                "1" => [54.558, 36.397],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Kaluga.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Kaluga.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Kaluga.png"
                ]
            ],
            "7" => [
                "0" => "Клинцы",
                "1" => [52.764, 32.233],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Klintsy.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_CFO_Klintsy.png"
                ],
                // "4" => [
                //     "0" => "COSMO-Ru-2",
                //     "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Klintsy.png"
                // ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Klintsy.png"
                ]
            ],
            "8" => [
                "0" => "Кострома",
                "1" => [57.77, 41.04],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Kostroma.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_CFO_Kostroma.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Kostroma.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Kostroma.png"
                ]
            ],
            "9" => [
                "0" => "Курск",
                "1" => [51.726, 36.272],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Kursk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Kursk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Kursk.png"
                ]
            ],
            "10" => [
                "0" => "Липецк",
                "1" => [52.696, 39.508],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Lipetsk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Lipetsk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Lipetsk.png"
                ]
            ],
            "11" => [
                "0" => "Обнинск",
                "1" => [55.113, 36.588],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Obninsk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Obninsk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Obninsk.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Obninsk.png"
                ]
            ],
            "12" => [
                "0" => "Орел",
                "1" => [52.922, 35.993],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Orel.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Orel.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Orel.png"
                ]
            ],
            "13" => [
                "0" => "Рыбинск",
                "1" => [58.086, 38.679],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Rybinsk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Rybinsk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Rybinsk.png"
                ]
            ],
            "14" => [
                "0" => "Рязань",
                "1" => [54.632, 39.716],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Ryazan.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Ryazan.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Ryazan.png"
                ]
            ],
            "15" => [
                "0" => "Сатино (Калужская обл.)",
                "1" => [55.208, 36.359],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Kal_Satino.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Kal_Satino.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Kal_Satino.png"
                ],
                "6" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_Kal_Satino.png"
                ]
            ],
            "16" => [
                "0" => "Смоленск",
                "1" => [54.742, 32.068],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Smolensk.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Smolensk.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Smolensk.png"
                ]
            ],
            "17" => [
                "0" => "Тамбов",
                "1" => [52.723, 41.47],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Tambov.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Tambov.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Tambov.png"
                ]
            ],
            "18" => [
                "0" => "Тверь",
                "1" => [56.895, 35.89],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Tver.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Tver.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Tver.png"
                ]
            ],
            "19" => [
                "0" => "Тула",
                "1" => [54.236, 37.625],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Tula.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Tula.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Tula.png"
                ]
            ],
            "20" => [
                "0" => "Ярославль",
                "1" => [57.63, 39.738],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_CFO_Yaroslavl.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_CFO_Yaroslavl.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2m/yyyymmddhh/M_CFO_Yaroslavl.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-By-2",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_CFO_Yaroslavl.png"
                ]
            ]
        ],
        "5" => [
            "0" => "Приволжский федеральный округ",
            "1" => [
                "0" => "Воткинск",
                "1" => [57.057, 53.913],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Votkinsk_28318.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Votkinsk_28318.png"
                ]
            ],
            "2" => [
                "0" => "Глазов",
                "1" => [58.138, 52.565],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Glazov_28214.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Glazov_28214.png"
                ]
            ],
            "3" => [
                "0" => "Зилаир",
                "1" => [52.242, 57.444],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Zilair.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Zilair.png"
                ]
            ],
            "4" => [
                "0" => "Ижевск",
                "1" => [56.854, 53.194],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Izhevsk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Izhevsk.png"
                ]
            ],
            "5" => [
                "0" => "Йошкар-Ола",
                "1" => [56.635, 47.761],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Yoshkar-Ola_27485.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Yoshkar-Ola_27485.png"
                ]
            ],
            "6" => [
                "0" => "Киров",
                "1" => [58.565, 49.59],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kirov_27199.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kirov_27199.png"
                ]
            ],
            "7" => [
                "0" => "Кунгур",
                "1" => [57.407, 56.926],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kungur_28326.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kungur_28326.png"
                ]
            ],
            "8" => [
                "0" => "Можга",
                "1" => [56.43, 52.222],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Mozhga_28409.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Mozhga_28409.png"
                ]
            ],
            "9" => [
                "0" => "Нефтекамск",
                "1" => [56.102, 54.36],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Neftekamsk_28513.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Neftekamsk_28513.png"
                ]
            ],
            "10" => [
                "0" => "Нижний Новгород",
                "1" => [56.266, 44.013],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Nijnii_Novgorod.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Nijnii_Novgorod.png"
                ]
            ],
            "11" => [
                "0" => "Оренбург",
                "1" => [51.762, 55.099],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Orenburg.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Orenburg.png"
                ]
            ],
            "12" => [
                "0" => "Пермь",
                "1" => [58.013, 56.272],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Perm.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Perm.png"
                ]
            ],
            "13" => [
                "0" => "Самара",
                "1" => [53.177, 50.107],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Samara.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Samara.png"
                ]
            ],
            "14" => [
                "0" => "Саранск",
                "1" => [54.135, 45.24],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Saransk_27760.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Saransk_27760.png"
                ]
            ],
            "15" => [
                "0" => "Сарапул",
                "1" => [56.472, 53.727],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Sarapul_28418.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Sarapul_28418.png"
                ]
            ],
            "16" => [
                "0" => "Саратов",
                "1" => [51.574, 46.027],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Saratov.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Saratov.png"
                ]
            ],
            "17" => [
                "0" => "Стерлитамак",
                "1" => [53.611, 55.938],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Sterlitamak.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Sterlitamak.png"
                ]
            ],
            "18" => [
                "0" => "Тольятти",
                "1" => [53.541, 49.292],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Tolyatti.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Tolyatti.png"
                ]
            ],
            "19" => [
                "0" => "Туймазы",
                "1" => [54.592, 53.711],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Tuimazy.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Tuimazy.png"
                ]
            ],
            "20" => [
                "0" => "Ульяновск",
                "1" => [54.322, 48.345],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Ulyanovsk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Ulyanovsk.png"
                ]
            ],
            "21" => [
                "0" => "Уфа",
                "1" => [54.718, 55.843],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Ufa.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Ufa.png"
                ]
            ],
            "22" => [
                "0" => "Учалы",
                "1" => [54.361, 59.409],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Uchaly.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Uchaly.png"
                ]
            ],
            "23" => [
                "0" => "Чебоксары",
                "1" => [56.08, 47.35],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Cheboksary_27581.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Cheboksary_27581.png"
                ]
            ],
            "24" => [
                "0" => "Янаул",
                "1" => [56.284, 54.959],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Yanaul.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Yanaul.png"
                ]
            ],
        ],
        "6" => [
            "0" => "Республика Татарстан",
            "1" => [
                "0" => "Азнакаево",
                "1" => [54.869, 53.114],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Anakaevo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Anakaevo.png"
                ]
            ],
            "2" => [
                "0" => "Акташ",
                "1" => [55.028, 52.141],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Aktash.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Aktash.png"
                ]
            ],
            "3" => [
                "0" => "Арск",
                "1" => [56.09, 49.888],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Arsk_27593.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Arsk_27593.png"
                ]
            ],
            "4" => [
                "0" => "Бегишево",
                "1" => [55.499, 52.049],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Begishovo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Begishovo.png"
                ]
            ],
            "5" => [
                "0" => "Бугульма",
                "1" => [54.589, 52.813],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Bugulma.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Bugulma.png"
                ]
            ],
            "6" => [
                "0" => "Вязовые",
                "1" => [55.822, 48.512],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Vyazovie.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Vyazovie.png"
                ]
            ],
            "7" => [
                "0" => "Дрожжаное",
                "1" => [54.726, 47.552],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Drojjanoe.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Drojjanoe.png"
                ]
            ],
            "8" => [
                "0" => "Елабуга",
                "1" => [55.77, 52.067],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Elabuga.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Elabuga.png"
                ]
            ],
            "9" => [
                "0" => "Кайбицы",
                "1" => [55.405, 48.182],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Kaibitsi.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Kaibitsi.png"
                ]
            ],
            "10" => [
                "0" => "Лаишево",
                "1" => [55.422, 49.52],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Laishevo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Laishevo.png"
                ]
            ],
            "11" => [
                "0" => "Мензелинск",
                "1" => [55.712, 53.071],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Menzelinsk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Menzelinsk.png"
                ]
            ],
            "12" => [
                "0" => "Муслюмово",
                "1" => [55.307, 53.2],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Muslyumovo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Muslyumovo.png"
                ]
            ],
            "13" => [
                "0" => "Сокол (Казань)",
                "1" => [55.78, 49.187],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Sokol.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Sokol.png"
                ]
            ],
            "14" => [
                "0" => "Тетюши",
                "1" => [54.954, 48.82],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Tetyushi.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Tetyushi.png"
                ]
            ],
            "15" => [
                "0" => "Чистополь",
                "1" => [55.32, 50.6],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Chistopol.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Chistopol.png"
                ]
            ],
            "16" => [
                "0" => "Чулпаново",
                "1" => [54.508, 50.408],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo7/yyyymmddhh/M_VFO_Kazan_Chulpanovo.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2vfo/yyyymmddhh/M_VFO_Kazan_Chulpanovo.png"
                ]
            ]
        ],
        "7" => [
            "0" => "Южный федеральный округ",
            "1" => [
                "0" => "Анапа",
                "1" => [44.911, 37.26],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Anapa.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Anapa.png"
                ]
            ],
            "2" => [
                "0" => "Армавир",
                "1" => [44.997, 41.102],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Armavir_37031.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Armavir_37031.png"
                ]
            ],
            "3" => [
                "0" => "Астрахань",
                "1" => [46.29, 47.959],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Astrakhan.png"
                ]
            ],
            "4" => [
                "0" => "Волгоград",
                "1" => [48.703, 44.444],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Volgograd.png"
                ]
            ],
            "5" => [
                "0" => "Геленджик",
                "1" => [44.578, 38.021],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Gelendzhik.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Gelendzhik.png"
                ]
            ],
            "6" => [
                "0" => "Геленджик (восток)",
                "1" => [44.575, 38.108],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Gelendzhik_E.png"
                ]
            ],
            "7" => [
                "0" => "Геленджик (запад)",
                "1" => [44.58, 37.935],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Gelendzhik_W.png"
                ]
            ],
            "8" => [
                "0" => "Геленджик (север)",
                "1" => [44.64, 38.025],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Gelendzhik_N.png"
                ]
            ],
            "9" => [
                "0" => "Геленджик (юг)",
                "1" => [44.515, 38.018],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Gelendzhik_S.png"
                ]
            ],
            "10" => [
                "0" => "Горячий Ключ",
                "1" => [44.602, 39.061],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_GoryachiyKlyuch.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Gelendzhik.png"
                ]
            ],
            "11" => [
                "0" => "Джубга",
                "1" => [44.304, 38.692],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Djubga.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Djubga.png"
                ]
            ],
            "12" => [
                "0" => "Краснодар",
                "1" => [45.035, 39.184],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Krasnodar.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Krasnodar.png"
                ]
            ],
            "13" => [
                "0" => "Майкоп",
                "1" => [44.616, 40.101],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Maykop.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Maykop.png"
                ]
            ],
            "14" => [
                "0" => "Махачкала",
                "1" => [42.977, 47.531],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Makhachkala.png"
                ]
            ],
            "15" => [
                "0" => "Новороссийск",
                "1" => [44.708, 37.856],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Novorossiisk.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk.png"
                ]
            ],
            "16" => [
                "0" => "Новороссийск (восток)",
                "1" => [44.705, 37.943],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Novorossiisk_E.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk_E.png"
                ]
            ],
            "17" => [
                "0" => "Новороссийск (запад)",
                "1" => [44.71, 37.77],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Novorossiisk_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk_W.png"
                ]
            ],
            "18" => [
                "0" => "Новороссийск (север)",
                "1" => [44.77, 37.86],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Novorossiisk_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk_N.png"
                ]
            ],
            "19" => [
                "0" => "Новороссийск (юг)",
                "1" => [44.645, 37.853],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Novorossiisk_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk_S.png"
                ]
            ],
            "20" => [
                "0" => "Новороссийск (юго-запад)",
                "1" => [44.7, 37.797],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk_SW.png"
                ]
            ],
            "21" => [
                "0" => "Ростов-на-Дону",
                "1" => [47.26, 39.841],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_RostovNaDonu.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Novorossiisk_W.png"
                ]
            ],
            "22" => [
                "0" => "Славянск-на-Кубани",
                "1" => [45.327, 38.068],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_SlavyanskNaKuba.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_SlavyanskNaKuba.png"
                ]
            ],
            "23" => [
                "0" => "Туапсе",
                "1" => [44.099, 39.105],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Tuapse_37018.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Tuapse_37018.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Tuapse_37018.png"
                ]
            ],
            "24" => [
                "0" => "Туапсе (восток)",
                "1" => [44.096, 39.19],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Tuapse_E.png"
                ]
            ],
            "25" => [
                "0" => "Туапсе (запад)",
                "1" => [44.103, 39.02],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Tuapse_W.png"
                ]
            ],
            "26" => [
                "0" => "Туапсе (север)",
                "1" => [44.162, 39.11],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Tuapse_N.png"
                ]
            ],
            "27" => [
                "0" => "Туапсе (юг)",
                "1" => [44.037, 39.1],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Tuapse_S.png"
                ]
            ],
            "28" => [
                "0" => "Элиста",
                "1" => [46.324, 44.246],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Elista.png"
                ]
            ]
        ],
        "8" => [
            "0" => "Крым",
            "1" => [
                "0" => "Севастополь (33991)",
                "1" => [44.605, 33.531],
                "2" => [
                    "0" => "COSMO-Ru-2 ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Crm_Sevastopol_33991.png"
                ]
            ],
            "2" => [
                "0" => "Севастополь (33994)",
                "1" => [44.584, 33.393],
                "2" => [
                    "0" => "COSMO-Ru-2 ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Crm_Sevastopol_33994.png"
                ]
            ],
            "3" => [
                "0" => "Симферополь (аэродром)",
                "1" => [45.052, 33.965],
                "2" => [
                    "0" => "COSMO-Ru-2 ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Crm_Simferopol_aerodrom.png"
                ]
            ],
            "4" => [
                "0" => "Симферополь (33946)",
                "1" => [44.96, 34.114],
                "2" => [
                    "0" => "COSMO-Ru-2 ETR",
                    "1" => "http://193.7.160.224/images/cosmo2etr/yyyymmddhh/M_Crm_Simferopol_33946.png"
                ]
            ]
        ],
        "9" => [
            "0" => "Сочи",
            "1" => [
                "0" => "Адлер",
                "1" => [43.444, 39.93],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Adler_AMSG_37171.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Adler.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_AdlerAirport.png"
                ]
            ],
            "2" => [
                "0" => "Адлер (восток)",
                "1" => [43.435, 39.862],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Adler_E.png"
                ]
            ],
            "3" => [
                "0" => "Адлер (запад)",
                "1" => [43.432, 39.916],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Adler_AMSG_37171_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Adler_W.png"
                ]
            ],
            "4" => [
                "0" => "Адлер (север)",
                "1" => [43.451, 39.945],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Adler_AMSG_37171_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Adler_N.png"
                ]
            ],
            "5" => [
                "0" => "Адлер (юг)",
                "1" => [43.411, 39.941],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Adler_AMSG_37171_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Adler_S.png"
                ]
            ],
            "6" => [
                "0" => "Аибга",
                "1" => [43.633, 40.289],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_SnL_Aibga.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_SnL_Aibga.png"
                ]
            ],
            "7" => [
                "0" => "Аибга (восток)",
                "1" => [43.631, 40.316],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_E.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_E.png"
                ]
            ],
            "8" => [
                "0" => "Аибга (запад)",
                "1" => [43.634, 40.262],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_W.png"
                ]
            ],
            "9" => [
                "0" => "Аибга (север)",
                "1" => [43.652, 40.291],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_N.png"
                ]
            ],
            "10" => [
                "0" => "Аибга (северо-запад)",
                "1" => [43.637, 40.281],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Aibga_NW.png"
                ]
            ],
            "11" => [
                "0" => "Аибга (юг)",
                "1" => [43.613, 40.287],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_SnL_Aibga_S.png"
                ]
            ],
            "12" => [
                "0" => "Аибга (юго-восток)",
                "1" => [43.63, 40.291],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Aibga_SE.png"
                ]
            ],
            "13" => [
                "0" => "Арго",
                "1" => [43.572, 39.756],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_SochiAgro.png"
                ]
            ],
            "14" => [
                "0" => "Ахун (гора)",
                "1" => [43.55, 39.843],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_AkhunMount.png"
                ]
            ],
            "15" => [
                "0" => "Биатлон",
                "1" => [43.689, 40.349],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Biathlon.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Biathlon.png"
                ]
            ],
            "16" => [
                "0" => "Биатлон (восток)",
                "1" => [43.693, 40.34],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Biathlon_E.png"
                ]
            ],
            "17" => [
                "0" => "Биатлон (запад)",
                "1" => [43.693, 40.321],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Biathlon_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Biathlon_W.png"
                ]
            ],
            "18" => [
                "0" => "Биатлон (север)",
                "1" => [43.724, 40.35],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Biathlon_N.png"
                ]
            ],
            "19" => [
                "0" => "Волноисследовательская станция",
                "1" => [43.561, 39.739],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_VolnIsslStation.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_VolnIsslStation.png"
                ]
            ],
            "20" => [
                "0" => "Горная Карусель (станция 37098)",
                "1" => [43.654, 40.264],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_MCarousel_37098.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_MCarousel_37098.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_MCarousel_1500.png"
                ]
            ],
            "21" => [
                "0" => "Горная Карусель (станция 37102)",
                "1" => [43.674, 40.266],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_MCarousel_37102.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_MCarousel_37102.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_MCarousel_1000.png"
                ]
            ],
            "22" => [
                "0" => "Имеретинка",
                "1" => [43.409, 39.967],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Imeretinka_37095.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Imeretinka_37095.png"
                ]
            ],
            "23" => [
                "0" => "Имеретинка (восток)",
                "1" => [43.411, 39.941],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Imeretinka_37095_E.png"
                ]
            ],
            "24" => [
                "0" => "Имеретенская бухта",
                "1" => [43.401, 39.988],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_ImeretinskyBay.png"
                ]
            ],
            "25" => [
                "0" => "Кепша",
                "1" => [43.612, 40.047],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kepsha_37100.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kepsha_37100.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Kepsha.png"
                ]
            ],
            "26" => [
                "0" => "Кепша (восток)",
                "1" => [43.604, 40.068],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_E.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_E.png"
                ]
            ],
            "27" => [
                "0" => "Кепша (запад)",
                "1" => [43.607, 40.014],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_W.png"
                ]
            ],
            "28" => [
                "0" => "Кепша (север)",
                "1" => [43.626, 40.044],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_N.png"
                ]
            ],
            "29" => [
                "0" => "Кепша (северо-восток)",
                "1" => [43.624, 40.071],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_NE.png"
                ]
            ],
            "30" => [
                "0" => "Кепша (юг)",
                "1" => [43.586, 40.039],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_S.png"
                ]
            ],
            "31" => [
                "0" => "Кепша (юго-запад)",
                "1" => [43.556, 39.992],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kepsha_37100_SW.png"
                ]
            ],
            "32" => [
                "0" => "Кичмай",
                "1" => [43.833, 39.519],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kichmay_37094.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kichmay_37094.png"
                ]
            ],
            "33" => [
                "0" => "Кичмай (запад)",
                "1" => [43.834, 39.492],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_W.png"
                ]
            ],
            "34" => [
                "0" => "Кичмай (север)",
                "1" => [43.853, 39.521],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_N.png"
                ]
            ],
            "35" => [
                "0" => "Кичмай (юг)",
                "1" => [43.813, 39.517],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_S.png"
                ]
            ],
            "36" => [
                "0" => "Кичмай (юго-запад)",
                "1" => [43.814, 39.49],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Kichmay_37094_SW.png"
                ]
            ],
            "37" => [
                "0" => "Кордон Лаура",
                "1" => [43.701, 40.272],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KorLa.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_CFM_KorLa.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_KorLa.png"
                ]
            ],
            "38" => [
                "0" => "Кордон Лаура (восток)",
                "1" => [43.662, 40.343],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KorLa_E.png"
                ]
            ],
            "39" => [
                "0" => "Кордон Лаура (запад)",
                "1" => [43.734, 40.18],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KorLa_W.png"
                ]
            ],
            "40" => [
                "0" => "Кордон Лаура (юг)",
                "1" => [43.667, 40.258],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KorLa_S.png"
                ]
            ],
            "41" => [
                "0" => "Красная Поляна",
                "1" => [43.681, 40.204],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KrPol.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_CFM_KrPol.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_KrPol.png"
                ]
            ],
            "42" => [
                "0" => "Красная Поляна (восток)",
                "1" => [43.675, 40.239],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_E.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_E.png"
                ]
            ],
            "43" => [
                "0" => "Красная Поляна (запад)",
                "1" => [43.678, 40.185],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_W.png"
                ]
            ],
            "44" => [
                "0" => "Красная Поляна (север)",
                "1" => [43.697, 40.214],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_N.png"
                ]
            ],
            "45" => [
                "0" => "Красная Поляна (юг)",
                "1" => [43.657, 40.21],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_CFM_KrPol_S.png"
                ]
            ],
            "46" => [
                "0" => "Лазаревское",
                "1" => [43.906, 39.336],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Lazarevskoye.png"
                ]
            ],
            "47" => [
                "0" => "Лазаревское (восток)",
                "1" => [43.897, 39.429],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093_E.png"
                ]
            ],
            "48" => [
                "0" => "Лазаревское (запад)",
                "1" => [43.903, 39.307],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093_W.png"
                ],
            ],
            "49" => [
                "0" => "Лазаревское (север)",
                "1" => [43.921, 39.336],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093_N.png"
                ]
            ],
            "50" => [
                "0" => "Лазаревское (северо-восток)",
                "1" => [43.92, 39.363],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Lazarevskoye_37093NE.png"
                ]
            ],
            "51" => [
                "0" => "Лыжный трамплин (север)",
                "1" => [43.68, 40.243],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_SkiJump_N.png"
                ]
            ],
            "52" => [
                "0" => "Лыжный трамплин (юг)",
                "1" => [43.667, 40.258],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_SkiJump-800.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_SkiJump-800.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_SkiJump_S.png"
                ]
            ],
            "53" => [
                "0" => "Магри",
                "1" => [44.019, 39.16],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Magry_37015.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Magry_37015.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Magry.png"
                ]
            ],
            "54" => [
                "0" => "Магри (север)",
                "1" => [44.05, 39.156],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Magry_37015_N.png"
                ]
            ],
            "55" => [
                "0" => "Магри (юг)",
                "1" => [44.01, 39.152],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Magry_37015_S.png"
                ]
            ],
            "56" => [
                "0" => "Роза Хутор",
                "1" => [43.644, 40.33],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_RKhut4.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_RKhut4.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_RKhut7.png"
                ]
            ],
            "57" => [
                "0" => "Роза Хутор (восток)",
                "1" => [43.631, 40.316],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_RKhut4_E.png"
                ]
            ],
            "58" => [
                "0" => "Роза Хутор (северо-запад)",
                "1" => [43.644, 40.31],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_RKhut4_NW.png"
                ]
            ],
            "59" => [
                "0" => "Роза Хутор (юг)",
                "1" => [43.6, 40.336],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_RKhut4_S.png"
                ]
            ],
            "60" => [
                "0" => "Роза Хутор (юго-восток)",
                "1" => [43.637, 40.32],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_RKhut4_SE.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_RKhut4_SE.png"
                ]
            ],
            "61" => [
                "0" => "Роза Хутор (финиш)",
                "1" => [43.649, 40.345],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_RKhut_finish.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_RKhut_finish.png"
                ]
            ],
            "62" => [
                "0" => "Сани (север)",
                "1" => [43.672, 40.291],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Sledge-700.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Sledge-700.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Sledge_N.png"
                ]
            ],
            "63" => [
                "0" => "Сани (юг)",
                "1" => [43.658, 40.291],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Sledge-830.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Sledge-830.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Sledge_S.png"
                ]
            ],
            "64" => [
                "0" => "Солохаул",
                "1" => [43.798, 39.639],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Solokh-Aul.png"
                ]
            ],
            "65" => [
                "0" => "Солохаул (восток)",
                "1" => [43.786, 39.651],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092_E.png"
                ]
            ],
            "66" => [
                "0" => "Солохаул (запад)",
                "1" => [43.827, 39.593],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092_W.png"
                ]
            ],
            "67" => [
                "0" => "Солохаул (север)",
                "1" => [43.808, 39.626],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092_N.png"
                ]
            ],
            "68" => [
                "0" => "Солохаул (северо-восток)",
                "1" => [43.806, 39.653],
                "2" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092_NE.png"
                ]
            ],
            "69" => [
                "0" => "Солохаул (юг)",
                "1" => [43.76, 39.672],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092_S.png"
                ]
            ],
            "70" => [
                "0" => "Солохаул (юго-запад)",
                "1" => [43.764, 39.588],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Solokh-Aul_37092_SW.png"
                ]
            ],
            "71" => [
                "0" => "Сочи",
                "1" => [43.58, 39.767],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_A_Sochi.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_A_Sochi.png"
                ]
            ],
            "72" => [
                "0" => "Сочи (восток)",
                "1" => [43.579, 39.794],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_A_Sochi_E.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_A_Sochi_E.png"
                ]
            ],
            "73" => [
                "0" => "Сочи (запад)",
                "1" => [43.581, 39.74],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_A_Sochi_W.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_A_Sochi_W.png"
                ]
            ],
            "74" => [
                "0" => "Сочи (север)",
                "1" => [43.6, 39.769],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_A_Sochi_N.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_A_Sochi_N.png"
                ]
            ],
            "75" => [
                "0" => "Сочи (юг)",
                "1" => [43.56, 39.766],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_A_Sochi_S.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_A_Sochi_S.png"
                ]
            ],
            "76" => [
                "0" => "Фристайл",
                "1" => [43.651, 40.32],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_SFO_Sochi_Freestyle_1080.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/images/cosmo2s/yyyymmddhh/M_SFO_Sochi_Freestyle_1080.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/images/cosmo1sochi/yyyymmddhh/M_SFO_Sochi_Freestyle_1080.png"
                ]
            ]
        ],
        "10" => [
            "0" => "Ленинградская и Калининградская области",
            "1" => [
                "0" => "Выборг",
                "1" => [60.738, 28.758],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Vyborg_22892.png"
                ]
            ],
            "2" => [
                "0" => "Гогланд",
                "1" => [60.083, 26.995],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Gogland_22907.png"
                ]
            ],
            "3" => [
                "0" => "Железнодорожный",
                "1" => [54.346, 21.296],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Zheleznodorozhny_26706.png"
                ]
            ],
            "4" => [
                "0" => "Калининград",
                "1" => [54.7, 20.512],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Kaliningrad.png"
                ]
            ],
            "5" => [
                "0" => "Кронштадт",
                "1" => [59.964, 29.771],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Kronst_26060.png"
                ]
            ],
            "6" => [
                "0" => "Лисий Нос",
                "1" => [60.036, 30.01],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_LisiiNos_22899.png"
                ]
            ],
            "7" => [
                "0" => "Озерки",
                "1" => [60.183, 28.984],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Ozerki_22897.png"
                ]
            ],
            "8" => [
                "0" => "Ораниенбаум",
                "1" => [59.902, 29.78],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Ornbaum_26064.png"
                ]
            ],
            "9" => [
                "0" => "Пионерский",
                "1" => [54.919, 20.21],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Pionersky_26607.png"
                ]
            ],
            "10" => [
                "0" => "Пулково",
                "1" => [59.795, 30.292],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Pulkovo_26065.png"
                ]
            ],
            "11" => [
                "0" => "Санкт-Петербург",
                "1" => [59.982, 30.267],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_S-Ptrb_26063.png"
                ]
            ],
            "12" => [
                "0" => "Сосновый Бор",
                "1" => [59.81, 29.048],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_SosnBor_26071.png"
                ]
            ]
        ],
        "11" => [
            "0" => "Мурманскаская область",
            "1" => [
                "0" => "Апатиты",
                "1" => [67.555, 33.402],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Mur_Apatity.png"
                ]
            ],
            "2" => [
                "0" => "Кандалакша",
                "1" => [67.167, 32.323],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Mur_Kandalaksha.png"
                ]
            ],
            "3" => [
                "0" => "Кировск",
                "1" => [67.62, 33.718],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Mur_Kirovsk_22224.png"
                ]
            ],
            "4" => [
                "0" => "Кировск (Юкспоррйок)",
                "1" => [67.62, 33.718],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Mur_Kirovsk_Yuksporrjok.png"
                ]
            ],
            "5" => [
                "0" => "Ковдор",
                "1" => [67.569, 30.521],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Mur_Kovdor.png"
                ]
            ],
            "6" => [
                "0" => "Ловозеро",
                "1" => [68, 35],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Mur_Lovozero.png"
                ]
            ],
            "7" => [
                "0" => "Мончегорск",
                "1" => [67.925, 32.893],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Mur_Monchegorsk.png"
                ]
            ],
            "8" => [
                "0" => "Мурманск",
                "1" => [68.927, 32.975],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Mur_Murmansk.png"
                ]
            ],
            "9" => [
                "0" => "Никель",
                "1" => [69.377, 30.183],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Mur_Nikel.png"
                ]
            ],
            "10" => [
                "0" => "Териберка",
                "1" => [69.187, 35.171],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Mur_Teriberka.png"
                ]
            ],
            "11" => [
                "0" => "Центральный Рудник",
                "1" => [67.495, 33.725],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Mur_CentralnyiRudnik.png"
                ]
            ]
        ],
        "12" => [
            "0" => "Республика Карелия, Архангельская область и республика Коми",
            "1" => [
                "0" => "Архангельск",
                "1" => [64.595, 40.464],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Arhangelsk.png"
                ]
            ],
            "2" => [
                "0" => "Архангельск_39",
                "1" => [64.376, 39.423],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Arhangelsk_39.png"
                ]
            ],
            "3" => [
                "0" => "Архангельск_40",
                "1" => [64.35, 40.276],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Arhangelsk_40.png"
                ]
            ],
            "4" => [
                "0" => "Воркута",
                "1" => [67.496, 63.99],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Vorkuta.png"
                ]
            ],
            "5" => [
                "0" => "Калевала",
                "1" => [65.206, 31.185],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Kalevala_22408.png"
                ]
            ],
            "6" => [
                "0" => "Медвежьегорск",
                "1" => [62.937, 34.456],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Medvezhyegorsk_22721.png"
                ]
            ],
            "7" => [
                "0" => "Петразаводск",
                "1" => [61.81, 34.212],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Ptrzavodsk_22820.png"
                ]
            ],
            "8" => [
                "0" => "Печора",
                "1" => [65.142, 57.151],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Pechora.png"
                ]
            ],
            "9" => [
                "0" => "Плесецк (аэродром)",
                "1" => [62.711, 40.544],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Plesetsk_aer.png"
                ]
            ],
            "10" => [
                "0" => "Плесецк (космодром)",
                "1" => [62.955, 40.724],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Plesetsk_kos.png"
                ]
            ],
            "11" => [
                "0" => "Пудож",
                "1" => [61.805, 36.445],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Pudozh_22831.png"
                ]
            ],
            "12" => [
                "0" => "Сегежа",
                "1" => [63.478, 34.302],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Segezha_22621.png"
                ]
            ],
            "13" => [
                "0" => "Сортавала",
                "1" => [61.686, 30.678],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Sortavala_22802.png"
                ]
            ],
            "14" => [
                "0" => "Сыктывкар",
                "1" => [61.65, 50.814],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Syktyvkar.png"
                ]
            ],
            "15" => [
                "0" => "Ухта",
                "1" => [63.557, 53.809],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Ukhta.png"
                ]
            ]
        ],
        "13" => [
            "0" => "Вологодская, Новгородская и Псковская области",
            "1" => [
                "0" => "Валдай",
                "1" => [57.988, 33.234],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Valday_26289.png"
                ]
            ],
            "2" => [
                "0" => "Великие Луки",
                "1" => [56.423, 30.591],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_VelikiyeLuki.png"
                ]
            ],
            "3" => [
                "0" => "Вологда",
                "1" => [59.288, 39.885],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Vologda.png"
                ]
            ],
            "4" => [
                "0" => "Демьянск",
                "1" => [57.662, 32.432],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Demyansk_26381.png"
                ]
            ],
            "5" => [
                "0" => "Крестцы",
                "1" => [58.227, 32.511],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Kresttsy_26285.png"
                ]
            ],
            "6" => [
                "0" => "Новгород",
                "1" => [58.534, 32.251],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Novgorod_26179.png"
                ]
            ],
            "7" => [
                "0" => "Псков",
                "1" => [57.829, 28.307],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Pskov_26258.png"
                ]
            ],
            "8" => [
                "0" => "Хотилово",
                "1" => [57.684, 34.066],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Hotilovo.png"
                ]
            ],
            "9" => [
                "0" => "Череповец",
                "1" => [59.281, 37.929],
                "2" => [
                    "0" => "COSMO-Ru-7",
                    "1" => "http://193.7.160.224/u2019/images/cosmo7/yyyymmddhh/M_NFO_Cherepovets.png"
                ]
            ],
        ],
        "14" => [
            "0" => "Красноярск",
            "1" => [
                "0" => "Академия биатлона",
                "1" => [55.997, 92.721],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_BiatlonSt_29584.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_BiatlonSt_29584.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_BiatlonSt_29584.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_BiatlonSt_29584.png"
                ]
            ],
            "2" => [
                "0" => "Бобровый Лог (старт)",
                "1" => [55.945, 92.787],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_BobrovyiLog_start.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_BobrovyiLog_start.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_BobrovyiLog_start.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_BobrovyiLog_start.png"
                ]
            ],
            "3" => [
                "0" => "Бобровый Лог (финиш)",
                "1" => [55.965, 92.789],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_BobrovyiLog_finish.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_BobrovyiLog_finish.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_BobrovyiLog_finish.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_BobrovyiLog_finish.png"
                ]
            ],
            "4" => [
                "0" => "Емельяново",
                "1" => [56.18, 92.611],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Emelyanovo_29474.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Emelyanovo_29474.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_Emelyanovo_29474.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_Emelyanovo_29474.png"
                ]
            ],
            "5" => [
                "0" => "Железногорск",
                "1" => [56.255, 93.525],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Jeleznigorsk_AMS.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Jeleznigorsk_AMS.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_Jeleznigorsk_AMS.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_Jeleznigorsk_AMS.png"
                ]
            ],
            "6" => [
                "0" => "Кача",
                "1" => [56.118, 92.198],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Kacha_29563.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Kacha_29563.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_Kacha_29563.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_Kacha_29563.png"
                ]
            ],
            "7" => [
                "0" => "Красноярск (29570)",
                "1" => [56.036, 92.742],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29570.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29570.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29570.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29570.png"
                ]
            ],
            "8" => [
                "0" => "Красноярск (29574)",
                "1" => [56.003, 92.88],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29574.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29574.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29574.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_Krasnoyarsk_29574.png"
                ]
            ],
            "9" => [
                "0" => "Минино",
                "1" => [56.067, 92.726],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Minino_29571.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Minino_29571.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_Minino_29571.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_Minino_29571.png"
                ]
            ],
            "10" => [
                "0" => "Радуга",
                "1" => [56.007, 92.722],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_RadugaSkiStadion_29588.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_RadugaSkiStadion_29588.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_RadugaSkiStadion_29588.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_RadugaSkiStadion_29588.png"
                ]
            ],
            "11" => [
                "0" => "Роев Ручей",
                "1" => [55.966, 92.736],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_RoevRuchey_29579.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_RoevRuchey_29579.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_RoevRuchey_29579.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_RoevRuchey_29579.png"
                ]
            ],
            "12" => [
                "0" => "Сопка (финиш)",
                "1" => [56.006, 92.739],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_SopkaFinish.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_SopkaFinish.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_SopkaFinish.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_SopkaFinish.png"
                ]
            ],
            "13" => [
                "0" => "Шалинское",
                "1" => [55.716, 93.752],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Shalinskoe_29578.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Shalinskoe_29578.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_Shalinskoe_29578.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_Shalinskoe_29578.png"
                ]
            ],
            "14" => [
                "0" => "Шумиха",
                "1" => [55.946, 92.293],
                "2" => [
                    "0" => "COSMO-Ru-1",
                    "1" => "http://193.7.160.224/u2019/images/cosmo1krs/yyyymmddhh/M_Sib_UNI_Shumikha_29566.png"
                ],
                "3" => [
                    "0" => "COSMO-Ru-2",
                    "1" => "http://193.7.160.224/u2019/images/cosmo2krs/yyyymmddhh/M_Sib_UNI_Shumikha_29566.png"
                ],
                "4" => [
                    "0" => "COSMO-Ru-6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_Sib_UNI_Shumikha_29566.png"
                ],
                "5" => [
                    "0" => "COSMO-Ru-13",
                    "1" => "http://193.7.160.224/u2019/images/cosmo13/yyyymmddhh/M_Sib_UNI_Shumikha_29566.png"
                ]
            ],
        ],
        "15" => [
            "0" => "Дальний Восток",
            "1" => [
                "0" => "Анадырь",
                "1" => [64.783, 177.567],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Anadyr_25563.png"
                ]
            ],
            "2" => [
                "0" => "Аян",
                "1" => [56.45, 138.15],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Ayan_31168.png"
                ]
            ],
            "3" => [
                "0" => "Бикин",
                "1" => [46.8, 134.267],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Bikin_31832.png"
                ]
            ],
            "4" => [
                "0" => "Биробиджан",
                "1" => [48.733, 132.950],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Birobidjan_31713.png"
                ]
            ],
            "5" => [
                "0" => "Благовещенск",
                "1" => [50.533, 127.5],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Blagoveschensk_31510.png"
                ]
            ],
            "6" => [
                "0" => "Владивосток",
                "1" => [43.117, 131.933],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Vladivostok_31960.png"
                ]
            ],
            "7" => [
                "0" => "Комсомольск-на-Амуре",
                "1" => [50.533, 137.033],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Komsomolsk-on-Amur_31561.png"
                ]
            ],
            "8" => [
                "0" => "Магадан",
                "1" => [59.55, 150.783],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Magadan_25913.png"
                ]
            ],
            "9" => [
                "0" => "Николаевск-на-Амуре",
                "1" => [53.15, 140.7],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Nikolayevsk-on-Amur_31369.png"
                ]
            ],
            "10" => [
                "0" => "Охотск",
                "1" => [59.367, 143.2],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Okhotsk_31088.png"
                ]
            ],
            "11" => [
                "0" => "Палана",
                "1" => [59.083, 159.967],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Palana_32227.png"
                ]
            ],
            "12" => [
                "0" => "Петропавловск-Камчатск",
                "1" => [53.083, 158.583],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Petropavl-Kamchatsk_32540.png"
                ]
            ],
            "13" => [
                "0" => "Советская Гавань",
                "1" => [49, 140.3],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_SovetskayaGavan_31770.png"
                ]
            ],
            "14" => [
                "0" => "Хабаровск",
                "1" => [48.517, 135.167],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Khabarovsk_31735.png"
                ]
            ],
            "15" => [
                "0" => "Чегдомын",
                "1" => [51.167, 132.95],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Chegdomyn_31469.png"
                ]
            ],
            "16" => [
                "0" => "Чумикан",
                "1" => [54.717, 135.3],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Chumikan_31286.png"
                ]
            ],
            "17" => [
                "0" => "Южно-Курильск",
                "1" => [44.34, 146.15],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_YuKurilsk_32165.png"
                ]
            ],
            "18" => [
                "0" => "Южно-Сахалинск",
                "1" => [46.950, 142.717],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_YuSakhalinsk_32150.png"
                ]
            ]
        ],
        "16" => [
            "0" => "Якутия",
            "1" => [
                "0" => "Верхоянск",
                "1" => [67.55, 133.383],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Yak_Verkhoyansk_24266.png"
                ]
            ],
            "2" => [
                "0" => "Витим",
                "1" => [59.27, 112.35],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Yak_Vitim_30054.png"
                ]
            ],
            "3" => [
                "0" => "Депутатский",
                "1" => [69.33, 139.67],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Yak_Deputatsky_24076.png"
                ]
            ],
            "4" => [
                "0" => "Жиганск",
                "1" => [66.46, 123.24],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Yak_Zhigansk_24343.png"
                ]
            ],
            "5" => [
                "0" => "Зырянка",
                "1" => [65.73, 150.9],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Yak_Zyryanka_25400.png"
                ]
            ],
            "6" => [
                "0" => "Мирный",
                "1" => [62.32, 113.52],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Yak_Mirny_24726.png"
                ]
            ],
            "7" => [
                "0" => "Олёкминск",
                "1" => [60.4, 120.42],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Yak_Olyokminsk_24944.png"
                ]
            ],
            "8" => [
                "0" => "Полярный",
                "1" => [66.73, 112.43],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Yak_Polyarny_24322.png"
                ]
            ],
            "9" => [
                "0" => "Тёплый Ключ",
                "1" => [62.8, 136.85],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Yak_TeplyyKlyuch_24771.png"
                ]
            ],
            "10" => [
                "0" => "Тикси",
                "1" => [71.58, 128.92],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Yak_Tiksi_21824.png"
                ]
            ],
            "11" => [
                "0" => "Чульман",
                "1" => [56.5, 124.52],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Yak_Chulman_30393.png"
                ]
            ],
            "12" => [
                "0" => "Якутск",
                "1" => [62.01, 129.43],
                "2" => [
                    "0" => "COSMO6",
                    "1" => "http://193.7.160.224/u2019/images/cosmo6/yyyymmddhh/M_DVO_Yak_Yakutsk_24959.png"
                ]
            ]
        ]
    ];
?>
