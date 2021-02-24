ymaps.ready(init);

function init () {
    var meteo_map, l_meteo_map, r_meteo_map;
    var aero_map, l_aero_map, r_aero_map;

    if($("#meteo_map").length) {
        meteo_map = new ymaps.Map('meteo_map', {
            center: [55.752592, 37.615702],
            zoom: 10
        });
        meteo_map.controls.remove('searchControl').remove('trafficControl');
    }
    if($("#l_meteo_map").length) {
        l_meteo_map = new ymaps.Map('l_meteo_map', {
            center: [55.752592, 37.615702],
            zoom: 10
        });
        l_meteo_map.controls.remove('searchControl').remove('trafficControl');
    }
    if($("#l_meteo_map").length) {
        r_meteo_map = new ymaps.Map('r_meteo_map', {
            center: [55.752592, 37.615702],
            zoom: 10
        });
        r_meteo_map.controls.remove('searchControl').remove('trafficControl');
    }
    if($("#aero_map").length) {
        aero_map = new ymaps.Map('aero_map', {
            center: [54.300408, 35.530106],
            zoom: 6
        });
        aero_map.controls.remove('searchControl').remove('trafficControl');
    }
    if($("#l_aero_map").length) {
        l_aero_map = new ymaps.Map('l_aero_map', {
            center: [54.300408, 35.530106],
            zoom: 6
        });
        l_aero_map.controls.remove('searchControl').remove('trafficControl');
    }
    if($("#l_aero_map").length) {
        r_aero_map = new ymaps.Map('r_aero_map', {
            center: [54.300408, 35.530106],
            zoom: 6
        });
        r_aero_map.controls.remove('searchControl').remove('trafficControl');
    }


    $.ajax({
        type: "POST",
        url: "php/ya_map/meteocoords.php"
    }).done(function(result) {
        coords = JSON.parse(result);
        if($("#meteo_map").length) {
            $.each(coords, function(i, item){
                marker = new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates: [item.lat, item.lng]
                    },
                    properties: {
                        hintContent: item.title
                    }
                }, {
                    preset: 'islands#nightDotIcon',
                });
                meteo_map.geoObjects.add(marker);
                marker.events.add('click', function () {
                    showMeteogram(item.domen, item.point);
                });
        	});
        }
        if($("#l_meteo_map").length) {
            $.each(coords, function(i, item){
                marker = new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates: [item.lat, item.lng]
                    },
                    properties: {
                        hintContent: item.title
                    }
                }, {
                    preset: 'islands#nightDotIcon',
                });
                l_meteo_map.geoObjects.add(marker);
                marker.events.add('click', function () {
                    l_show(item.domen, item.point);
                });
        	});
        }
        if($("#r_meteo_map").length) {
            $.each(coords, function(i, item){
                marker = new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates: [item.lat, item.lng]
                    },
                    properties: {
                        hintContent: item.title
                    }
                }, {
                    preset: 'islands#nightDotIcon',
                });
                r_meteo_map.geoObjects.add(marker);
                marker.events.add('click', function () {
                    r_show(item.domen, item.point);
                });
        	});
        }
    });

    $.ajax({
        type: "POST",
        url: "php/ya_map/aerocoords.php"
    }).done(function(result) {
        coords = JSON.parse(result);
        if($("#aero_map").length) {
            $.each(coords, function(i, item){
                marker = new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates: [item.lat, item.lng]
                    },
                    properties: {
                        hintContent: item.title
                    }
                }, {
                    preset: 'islands#nightDotIcon',
                });
                aero_map.geoObjects.add(marker);
                marker.events.add('click', function () {
                    showAerodiagram(item.point);
                });
        	});
        }
        if($("#l_aero_map").length) {
            $.each(coords, function(i, item){
                marker = new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates: [item.lat, item.lng]
                    },
                    properties: {
                        hintContent: item.title
                    }
                }, {
                    preset: 'islands#nightDotIcon',
                });
                l_aero_map.geoObjects.add(marker);
                marker.events.add('click', function () {
                    l_show(item.point);
                });
        	});
        }
        if($("#r_aero_map").length) {
            $.each(coords, function(i, item){
                marker = new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates: [item.lat, item.lng]
                    },
                    properties: {
                        hintContent: item.title
                    }
                }, {
                    preset: 'islands#nightDotIcon',
                });
                r_aero_map.geoObjects.add(marker);
                marker.events.add('click', function () {
                    r_show(item.point);
                });
        	});
        }
    });
}
