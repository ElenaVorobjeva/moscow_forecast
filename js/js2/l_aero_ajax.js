var l_links = [];
var l_curTime = 0;
var l_fullScreen = false;
var l_isOpenBig = false;
var l_obj;

var l_playing = false;
var l_v = 1000;
var l_slideInterval = setInterval(function() {}, l_v);
clearInterval(l_slideInterval);


jQuery(function($) {
    $(document).ready(function() {
        l_getPointList();
    });
});

function l_show(l_point) {
    window.l_obj = l_point;
    window.l_isOpenBig = true;


    $("#l_aero_img").on("load", function() {
        $("#l_aero_not_find").hide();
        $("#l_aero_img").show();
    });

    $("#l_aero_img").on("error", function() {
        $("#l_aero_not_find").show();
        $("#l_aero_img").hide();
    });

    l_getTitle(l_obj);


    $("#l_aero_popup").show();

    return;
}

$("#l_aero_init_term").change(function() {
    l_getTime(l_obj);
});

$("#l_date").change(function() {
    var l_date = $("#l_date").val();
    $.ajax({
        type: "POST",
        url: "php/date/l_date.php",
        data: {date_1: l_date}
    }).done(function(result) {});
    l_getLink(l_obj);
});

$("#l_aero_previous").click(function() {
    l_pause();
    l_curTime = l_previous();
});

$("#l_aero_next").click(function() {
    l_pause();
    l_curTime = l_next();
});

$("#l_aero_pause").click(function() {

    if(l_playing) l_pause()
    else l_curTime = l_play(l_curTime, l_v);

});

$("#l_aero_speed").change(function() {
    l_pause();
    l_v = $("#l_aero_speed").val();
});

$(document).keydown(function(e) {
    if( e.keyCode === 27 ) {
        if(!l_fullScreen) {
           $("#l_aero_popup").hide();
           l_curTime = 0;
        }
    }
});

$("#l_aero_popup_bg").click(function() {
    if(!l_fullScreen) {
        $("#l_aero_popup").hide();
        l_curTime = 0;
    }
});

$("#l_aero_img").click(function() {

    l_fullScreen = true;
    l_pause();

    var l_img = $(this);
    var l_src = l_img.attr('src');

    $("body").append("<div id='l_popup' class='popup'>"+
                     "<div id='l_popup_bg' class='popup_bg'></div>"+
                     "<img src='"+l_src+"' id='l_aero_popup_img' class='popup_img'/>"+
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

function l_getPointList() {
    $.ajax({
        type: "POST",
        url: "php/aero/l_pointhandler.php",
        beforeSend: function() {
            $("#l_aero_img").hide();
            $("#l_plug").show();
        }
    }).done(function(result) {
        $("#l_aero_list_wrapper").empty();
        $("#l_aero_list_wrapper").html(result);
    });
}

function l_getTitle(l_point) {
    $.ajax({
        type: "POST",
        url: "php/aero/l_titlehandler.php",
        data: {id_point: l_point},
        beforeSend: function() {
            $("#l_aero_img").hide();
            $("#l_plug").show();
        }
    }).done(function(result) {
        $("#l_aero_title").empty();
        $("#l_aero_title").html(result);
        l_getModelList(l_point);
    });
}

function l_getModelList(l_point) {
    $.ajax({
        type: "POST",
        url: "php/aero/l_modelhandler.php",
        data: {id_point: l_point},
        beforeSend: function() {
            $("#l_aero_img").hide();
            $("#l_plug").show();
        }
    }).done(function(result) {
        $("#l_aero_model_wrapper").empty();
        $("#l_aero_model_wrapper").html(result);
        l_getTime(l_point);
    });
}

function l_getTime(l_point) {
    var l_model = $("#l_aero_model").val();
    var l_init_term = $("#l_aero_init_term").val();

    $.ajax({
        type: "POST",
        url: "php/aero/l_timehandler.php",
        data: {
            id_point: l_point,
            id_model: l_model,
            id_init_term: l_init_term
        },
        beforeSend: function() {
            $("#l_aero_img").hide();
            $("#l_plug").show();
        }
    }).done(function(result) {
        $("#l_aero_time_wrapper").empty();
        $("#l_aero_time_wrapper").html(result);
        l_getLink(l_point);
    });

}

function l_getLink(l_point) {
    var l_model = $("#l_aero_model").val();
    var l_init_term = $("#l_aero_init_term").val();
    var l_date = l_formDate($("#l_date").val());

    $.ajax({
        type: "POST",
        url: "php/aero/l_linkhandler.php",
        data: {
            id_point: l_point,
            id_model: l_model,
            id_init_term: l_init_term,
            date: l_date
        },
        beforeSend: function() {
            $("#l_aero_img").hide();
            $("#l_plug").show();
        }
    }). done(function(result) {
        window.l_links.length = 0;
        window.l_links = null;
        window.curTime = 0;
        window.l_links = JSON.parse(result);
        l_border(0);
        $("#l_aero_img").attr("src", window.l_links[0]);
        $("#l_aero_img").ready(function() {
            $("#l_plug").hide();
        });
        $("#l_aero_img").show();
    });
}

function l_getImg(time) {
    window.l_curTime = time;
    l_border(window.l_curTime);
    $("#l_aero_img").attr("src", window.l_links[window.l_curTime]);
}

function l_previous() {
    l_pause();

    if(l_curTime == 0) l_curTime = window.l_links.length - 1
    else l_curTime--;

    l_border(l_curTime);
    $("#l_aero_img").attr("src", window.l_links[l_curTime]);
    if(l_fullScreen) $("#l_aero_popup_img").attr("src", window.l_links[l_curTime]);

    return l_curTime;
}

function l_next() {
    l_pause();

    if(l_curTime == window.l_links.length - 1) l_curTime = 0
    else l_curTime++;

    l_border(l_curTime);
    $("#l_aero_img").attr("src", window.l_links[l_curTime]);
    if(l_fullScreen) $("#l_aero_popup_img").attr("src", window.l_links[l_curTime]);

    return l_curTime;
}

function l_pause() {
    $("#l_aero_pause").html('&#9658;');
    l_playing = false;
    clearInterval(l_slideInterval);
}

function l_play(l_curTime, l_v) {
    $("#l_aero_pause").html('&#10074;&#10074;');
    l_playing = true;

    l_slideInterval = setInterval(function() {
        if(window.l_curTime == window.l_links.length - 1) window.l_curTime = 0
        else window.l_curTime++;

        l_border(window.l_curTime);
        $("#l_aero_img").attr("src", window.l_links[window.l_curTime]);
    }, l_v);

    return window.l_curTime;
}

function l_border(obj) {
    var name;
    for(var i=0; i<l_links.length; i++) {
        name = "#l_but_" + i;
        $(name).css("border-bottom", "2px solid transparent");
    }
        name = "#l_but_" + obj;
        $(name).css("border-bottom", "2px solid #0606A3");
}

function l_formDate(obj) {
    var year = obj.substring(0, 4);
    var month = obj.substring(5, 7);
    var day = obj.substring(8);

    var result = year + month + day;

    return result;
}
