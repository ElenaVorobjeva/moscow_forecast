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
        '0' => [
            'name' => 'Балчуг',
            'coords' => [55.735, 37.633],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Balchug_27605'
        ],
        '1' => [
            'name' => 'Быково',
            'coords' => [55.639, 38.062],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Bikovo_27527'
        ],
        '2' => [
            'name' => 'ВДНХ',
            'coords' => [55.833, 37.605],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_Moscow'
        ],
        '3' => [
            'name' => 'Внуково',
            'coords' => [55.604, 37.262],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Vnukovo_27524'
        ],
        '4' => [
            'name' => 'ГМЦ',
            'coords' => [55.762, 37.582],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MosHMC'
        ],
        '5' => [
            'name' => 'Дмитров',
            'coords' => [56.342, 37.539],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Dmitrov'
        ],
        '6' => [
            'name' => 'Домодедово',
            'coords' => [55.397, 37.892],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Domodedovo_27613'
        ],
        '7' => [
            'name' => 'Клин',
            'coords' => [56.318, 36.749],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Klin'
        ],
        '8' => [
            'name' => 'Коломна',
            'coords' => [55.089, 38.788],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Kolomna'
        ],
        '9' => [
            'name' => 'Кучино',
            'coords' => [55.751, 37.959],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Kuchino_27530'
        ],
        '10' => [
            'name' => 'МГУ',
            'coords' => [55.705, 37.534],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MosMSU'
        ],
        '11' => [
            'name' => 'Михайловское',
            'coords' => [55.461, 37.167],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Mihailovskoe_27614'
        ],
        '12' => [
            'name' => 'МКАД С-В 66 км',
            'coords' => [55.789, 37.38],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_Mkadnw66'
        ],
        '13' => [
            'name' => 'МКАД С-З 92 км',
            'coords' => [55.877, 37.73],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_Mkadne92'
        ],
        '14' => [
            'name' => 'МКАД Ю-В 43 км',
            'coords' => [55.578, 37.563],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_Mkadsw43'
        ],
        '15' => [
            'name' => 'МКАД Ю-З 11 км',
            'coords' => [55.708, 37.835],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_Mkadse11'
        ],
        '16' => [
            'name' => 'Наро-Фоминск',
            'coords' => [55.384, 36.747],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_NaroFominsk'
        ],
        '17' => [
            'name' => 'Немчиновка',
            'coords' => [55.704, 37.383],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Nemchinovka_27515'
        ],
        '18' => [
            'name' => 'Новошихово',
            'coords' => [55.696, 36.781],
            'link' => 'http://193.7.160.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Novoshikhovo_IFA'
        ],
        '19' => [
            'name' => 'Новый Иерусалим',
            'coords' => [55.895, 36.822],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Novo-Ierusalim_27511'
        ],
        '20' => [
            'name' => 'Павлов Посад',
            'coords' => [55.768, 38.688],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_PavlovPosad'
        ],
        '21' => [
            'name' => 'Раменское',
            'coords' => [55.554, 38.163],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Ramenskoye'
        ],
        '22' => [
            'name' => 'Серпухов',
            'coords' => [54.913, 37.459],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Serpuhov'
        ],
        '23' => [
            'name' => 'Солнцево',
            'coords' => [55.647, 37.385],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Solntsevo'
        ],
        '24' => [
            'name' => 'ТСХА',
            'coords' => [55.834, 37.584],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_TCXA_27519'
        ],
        '25' => [
            'name' => 'Тушино',
            'coords' => [55.874, 37.428],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Tushino_27619'
        ],
        '26' => [
            'name' => 'Шереметьево',
            'coords' => [55.959, 37.425],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Sheremetevo_27514'
        ],
        '27' => [
            'name' => 'Электроугли',
            'coords' => [55.751, 37.959],
            'link' => 'http://10.1.112.224/images/cosmo1msk/yyyymmddhh/M_CFO_MOb_Elektrougli_27531'
        ]
    ];
?>
