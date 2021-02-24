var l_links = [];
var l_curTime = 0;
var l_fullScreen = false;

var l_playing = false;
var l_v = 1000;
var l_slideInterval = setInterval(function() {}, l_v);
clearInterval(l_slideInterval);


jQuery(function($) {
    $(document).ready(function() {
        l_getDomenList();
    });

    $('#l_init_term').change(function() {
        l_getTime();
    });

    $("#l_date").change(function() {
        var l_date = $("#l_date").val();
        $.ajax({
            type: "POST",
            url: "php/date/l_date.php",
            data: {date_1: l_date}
        }).done(function(result) {});
        l_getLink(0);
    });

    $( "#l_map" ).on("load", function() {

        $( "#l_not_find" ).hide();
        $( "#l_map" ).show();
    });

    $("#l_map").on("error", function() {
        $( "#l_map" ).hide();
        $( "#l_not_find" ).show();
    });

    $("#l_previous").click(function() {
        l_pause();
        l_curTime = l_previous();
    });

    $("#l_next").click(function() {
        l_pause();
        l_curTime = l_next();
    });

    $("#l_speed").change(function() {
        l_pause();
        v = $('#l_speed').val();
    });

    $("#l_pause").click(function() {
        if(l_playing) l_pause ();
        else l_curTime = l_play(l_curTime, l_v);
    });

    var l_div = document.getElementById('l_map');
    l_div.addEventListener("wheel", function(e) {
        if(!($("#l_popup").length)) {
            if (e.deltaY < 0) {
                l_curTime = l_previous();
            }
            else if (e.deltaY > 0) {
                l_curTime = l_next();
            }
        }
    });

    $(document).keyup(function(e){
        if(!($("#l_popup").length)) {
            if (e.which == 37) {
                l_curTime = l_previous();
            }
        }
    });

    $(document).keyup(function(e){
        if(!($("#l_popup").length)) {
            if (e.which == 39) {
                l_curTime = l_next();
            }
        }
    });

    $("#l_map").click(function() {

        l_fullScreen = true;
        l_pause();

        var l_img = $(this);
        var l_src = l_img.attr('src');

        $("body").append("<div id='l_popup' class='popup'>"+
                         "<div id='l_popup_bg' class='popup_bg'></div>"+
                         "<img src='"+l_src+"' id='l_popup_img' class='popup_img' />"+
                         "<div id='l_popup_previous' class='popup_previous'><</div>"+
                         "<div id='l_popup_next' class='popup_next'>></div>"+
                         "</div>");

        $("body,html").animate({
            scrollTop:0
        }, 0);

        $("html").css("overflow","hidden");

        $("#l_popup").show();

        $("#l_popup_next").click(function(){
            l_curTime = l_next();
        });

        $("#l_popup_previous").click(function(){
            l_curTime = l_previous();
        });

        window.addEventListener("wheel", function(e) {
            if($("#l_popup").is(':visible')) {
                if (e.deltaY < 0) {
                    l_curTime = l_previous();
                }
                else if (e.deltaY > 0) {
                    l_curTime = l_next();
                }
            }
        });

        $(document).keyup(function(e){
            if($("#l_popup").is(':visible')) {
                if (e.which == 37) {
                    l_curTime = l_previous();
                }
            }
        });

        $(document).keyup(function(e){
            if($("#l_popup").is(':visible')) {
                if (e.which == 39) {
                    l_curTime = l_next();
                }
            }
        });

        $(document).keydown(function(e) {

            if( e.keyCode === 27 ) {
                $("#l_popup").hide();
                $("#l_popup").remove();
                l_fullScreen = false;
                $("html").css("overflow","auto");
            }
        });

        $("#l_popup_bg").click(function() {

            $("#l_popup").hide();
            $("#l_popup").remove();
            l_fullScreen = false;
            $("html").css("overflow","auto");
        });
    });
});

function l_getDomenList() {
    $.ajax({
        type: "POST",
        url: "php/map/l_domenhandler.php",
        beforeSend: function() {
            $("#l_map").hide();
            $("#l_plug").show();
        }
    }).done(function(result) {
        $("#l_domen").empty();
        $("#l_domen").html(result);
        l_getModelList();
    });
}

/*change tag name*/
function l_getModelList(){
    var domen = $('#l_domen').val();

    l_pause();

    $.ajax({
        type: "POST",
        url: "php/map/l_modelhandler.php",
        data: {id_domen: domen},
        beforeSend: function() {
            $("#l_map").hide();
            $("#l_plug").show();
        }
    }).done(function(result) {
        $("#l_model").empty();
        $("#l_model").html(result);
        l_getElemList();
    });
}

function l_getElemList() {
    var domen = $('#l_domen').val();
    var model = $('#l_model').val();

    l_pause();

    $.ajax({
        type: "POST",
        url: "php/map/l_elemhandler.php",
        data: {id_domen: domen, id_model: model},
        beforeSend: function() {
            $("#l_map").hide();
            $("#l_plug").show();
        }
    }).done(function(result) {
        $("#l_elem").empty();
        $("#l_elem").html(result);
        l_getTime();
    });
}

function l_getTime() {
    var domen = $('#l_domen').val();
    var model = $('#l_model').val();
    var elem = $('#l_elem').val();
    var init_term = $('#l_init_term').val();

    l_pause();

    $.ajax({
        type: "POST",
        url: "php/map/l_timehandler.php",
        data: {
            id_domen: domen,
            id_model: model,
            id_elem: elem,
            id_init_term: init_term
        },
        beforeSend: function() {
            $("#l_map").hide();
            $("#l_plug").show();
        }
    }). done(function(result) {
        $("#l_time_wrapper").empty();
        $("#l_time_wrapper").html(result);
        l_getLink();
    });
}

function l_getLink() {
    var domen = $('#l_domen').val();
    var model = $('#l_model').val();
    var elem = $('#l_elem').val();
    var init_term = $('#l_init_term').val();
    var date = l_formDate($("#l_date").val());

    l_pause();

    $.ajax({
        type: "POST",
        url: "php/map/l_linkhandler.php",
        data: {
            id_domen: domen,
            id_model: model,
            id_elem: elem,
            id_init_term: init_term,
            date: date
        },
        beforeSend: function() {
            $("#l_map").hide();
            $("#l_plug").show();
        }
    }). done(function(result) {
        window.l_links.length = 0;
        window.l_links = null;
        window.l_curTime = 0;
        window.l_links = JSON.parse(result);
        l_border(0);
        $("#l_map").attr("src", window.l_links[0]);
        $("#l_map").ready(function() {
            $("#l_plug").hide();
        });
        $("#l_map").show();
    });
}

function l_getImg(time) {
    l_pause();
    window.l_curTime = time;
    l_border(window.l_curTime);
    $("#l_map").attr("src", window.l_links[window.l_curTime]);
}

function l_previous() {
    l_pause();

    if(l_curTime == 0) l_curTime = window.l_links.length - 1
    else l_curTime--;

    l_border(l_curTime);
    $("#l_map").attr("src", window.l_links[l_curTime]);
    if(l_fullScreen) $("#l_popup_img").attr("src", window.l_links[l_curTime]);

    return l_curTime;
}

function l_next() {
    l_pause();

    if(l_curTime == window.l_links.length - 1) l_curTime = 0
    else l_curTime++;

    l_border(l_curTime);
    $("#l_map").attr("src", window.l_links[l_curTime]);
    if(l_fullScreen) $("#l_popup_img").attr("src", window.l_links[l_curTime]);

    return l_curTime;
}

function l_pause () {
    $("#l_pause").html('&#9658;');
    l_playing = false;
    clearInterval(l_slideInterval);
}

function l_play (l_curTime, l_v) {

    $("#l_pause").html('&#10074;&#10074;');
    l_playing = true;

    l_slideInterval = setInterval(function() {
        if(window.l_curTime == window.l_links.length - 1) window.l_curTime = 0
        else window.l_curTime++;

        l_border(window.l_curTime);
        $("#l_map").attr("src", window.l_links[window.l_curTime]);
    }, l_v);
    return window.l_curTime;
}

function l_formDate(obj) {
    var year = obj.substring(0, 4);
    var month = obj.substring(5, 7);
    var day = obj.substring(8);

    var result = year + month + day;

    return result;
}

function l_border (obj) {

    var name;
    for(var i=0; i<l_links.length; i++) {
        name = "#l_but_" + i;
        $(name).css("border-bottom", "2px solid transparent");
    }
    name = "#l_but_" + obj;
    $(name).css("border-bottom", "2px solid #0606A3");

}
