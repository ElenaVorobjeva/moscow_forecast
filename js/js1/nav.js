jQuery(function ($) {
    checkNav();

    $( window ).resize(function() {
        checkNav();
    });
});

function checkNav() {
    if(window.matchMedia('(max-width: 1900px)').matches && window.matchMedia('(min-width: 1431px)').matches) {
        $("nav.opened"). hide();
        $("nav.horizontal"). show();
        $("section").css("height", "calc(100vh - 160px)").css("width", "calc(100vw - 320px)").css("margin-left", "10px");
        $(".nav_controls_opened").css("height", "calc(100vh - 160px)");
        $(".nav_controls_closed").css("height", "calc(100vh - 160px)").css("line-height", "calc(100vh - 160px)");
        $(".map_container img.diana").css("width", "calc(100vw - 580px)");
        $(".map_container img.meteo").css("height", "calc(100vh - 180px)");
        $(".map_container img.aero").css("height", "calc(100vh - 245px)");
    }
    else if(window.matchMedia('(max-width: 1430px)').matches) {
        $("nav.opened"). hide();
        $("nav.horizontal"). show();
        $("section").css("height", "calc(100vh - 160px)").css("width", "calc(100vw - 320px)").css("margin-left", "10px");
        $(".nav_controls_opened").css("height", "calc(100vh - 160px)");
        $(".nav_controls_closed").css("height", "calc(100vh - 160px)").css("line-height", "calc(100vh - 160px)");
        $(".map_container img.diana").css("width", "calc(100vw - 280px)");
        $(".map_container img.meteo").css("height", "calc(100vh - 180px)");
        $(".map_container img.aero").css("height", "calc(100vh - 245px)");
    }
    else {
        $("nav.opened"). show();
        $("nav.horizontal"). hide();
        $("section").css("height", "calc(100vh - 120px)").css("width", "calc(100vw - 640px)").css("margin-left", "0");
        $(".nav_controls_opened").css("height", "calc(100vh - 120px)");
        $(".nav_controls_closed").css("height", "calc(100vh - 120px)").css("line-height", "calc(100vh - 120px)");
        $(".map_container img.diana").css("width", "calc(100vw - 900px)");
        $(".map_container img.meteo").css("height", "calc(100vh - 150px)");
        $(".map_container img.aero").css("height", "calc(100vh - 225px)");
    }
}
