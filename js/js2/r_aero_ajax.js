var r_links = [];
var r_curTime = 0;
var r_fullScreen = false;
var r_isOpenBig = false;
var r_obj;

var r_playing = false;
var r_v = 1000;
var r_slideInterval = setInterval(function() {}, r_v);
clearInterval(r_slideInterval);


jQuery(function($) {
    $(document).ready(function() {
        r_getPointList();
    });
});

function r_show(r_point) {
    window.r_obj = r_point;
    window.r_isOpenBig = true;


    $("#r_aero_img").on("load", function() {
        $("#r_aero_not_find").hide();
        $("#r_aero_img").show();
    });

    $("#r_aero_img").on("error", function() {
        $("#r_aero_not_find").show();
        $("#r_aero_img").hide();
    });

    r_getTitle(r_obj);


    $("#r_aero_popup").show();

    return;
}

$("#r_aero_init_term").change(function() {
    r_getTime(r_obj);
});

$("#r_date").change(function() {
    var r_date = $("#r_date").val();
    $.ajax({
        type: "POST",
        url: "php/date/r_date.php",
        data: {date_1: r_date}
    }).done(function(result) {});
    r_getLink(r_obj);
});

$("#r_aero_previous").click(function() {
    r_pause();
    r_curTime = r_previous();
});

$("#r_aero_next").click(function() {
    r_pause();
    r_curTime = r_next();
});

$("#r_aero_pause").click(function() {

    if(r_playing) r_pause()
    else r_curTime = r_play(r_curTime, r_v);

});

$("#r_aero_speed").change(function() {
    r_pause();
    r_v = $("#r_aero_speed").val();
});

$(document).keydown(function(e) {
    if( e.keyCode === 27 ) {
        if(!r_fullScreen) {
           $("#r_aero_popup").hide();
           r_curTime = 0;
        }
    }
});

$("#r_aero_popup_bg").click(function() {
    if(!r_fullScreen) {
        $("#r_aero_popup").hide();
        r_curTime = 0;
    }
});

$("#r_aero_img").click(function() {

    r_fullScreen = true;
    r_pause();

    var r_img = $(this);
    var r_src = r_img.attr('src');

    $("body").append("<div id='r_popup' class='popup'>"+
                     "<div id='r_popup_bg' class='popup_bg'></div>"+
                     "<img src='"+r_src+"' id='r_aero_popup_img' class='popup_img'/>"+
                     "<div id='r_popup_previous' class='popup_previous'><</div>"+
                     "<div id='r_popup_next' class='popup_next'>></div>"+
                     "</div>");

    $("body,html").animate({
        scrollTop:0
    }, 0);

    $("html").css("overflow","hidden");

    $("#r_popup").show();

    $("#r_popup_next").click(function(){
        r_curTime = r_next();
    });

    $("#r_popup_previous").click(function(){
        r_curTime = r_previous();
    });

    window.addEventListener("wheel", function(e) {
        if($("#r_popup").is(':visible')) {
            if (e.deltaY < 0) {
                r_curTime = r_previous();
            }
            else if (e.deltaY > 0) {
                r_curTime = r_next();
            }
        }
    });

    $(document).keyup(function(e){
        if($("#r_popup").is(':visible')) {
            if (e.which == 37) {
                r_curTime = r_previous();
            }
        }
    });

    $(document).keyup(function(e){
        if($("#r_popup").is(':visible')) {
            if (e.which == 39) {
                r_curTime = r_next();
            }
        }
    });

    $(document).keydown(function(e) {

        if( e.keyCode === 27 ) {

            $("#r_popup").hide();
            $("#r_popup").remove();
            r_fullScreen = false;
            $("html").css("overflow","auto");

        }

    });

    $("#r_popup_bg").click(function() {

        $("#r_popup").hide();
        $("#r_popup").remove();
        r_fullScreen = false;
        $("html").css("overflow","auto");

    });
});

function r_getPointList() {
    $.ajax({
        type: "POST",
        url: "php/aero/r_pointhandler.php",
        beforeSend: function() {
            $("#r_aero_img").hide();
            $("#r_plug").show();
        }
    }).done(function(result) {
        $("#r_aero_list_wrapper").empty();
        $("#r_aero_list_wrapper").html(result);
    });
}

function r_getTitle(r_point) {
    $.ajax({
        type: "POST",
        url: "php/aero/r_titlehandler.php",
        data: {id_point: r_point},
        beforeSend: function() {
            $("#r_aero_img").hide();
            $("#r_plug").show();
        }
    }).done(function(result) {
        $("#r_aero_title").empty();
        $("#r_aero_title").html(result);
        r_getModelList(r_point);
    });
}

function r_getModelList(r_point) {
    $.ajax({
        type: "POST",
        url: "php/aero/r_modelhandler.php",
        data: {id_point: r_point},
        beforeSend: function() {
            $("#r_aero_img").hide();
            $("#r_plug").show();
        }
    }).done(function(result) {
        $("#r_aero_model_wrapper").empty();
        $("#r_aero_model_wrapper").html(result);
        r_getTime(r_point);
    });
}

function r_getTime(r_point) {
    var r_model = $("#r_aero_model").val();
    var r_init_term = $("#r_aero_init_term").val();

    $.ajax({
        type: "POST",
        url: "php/aero/r_timehandler.php",
        data: {
            id_point: r_point,
            id_model: r_model,
            id_init_term: r_init_term
        },
        beforeSend: function() {
            $("#r_aero_img").hide();
            $("#r_plug").show();
        }
    }).done(function(result) {
        $("#r_aero_time_wrapper").empty();
        $("#r_aero_time_wrapper").html(result);
        r_getLink(r_point);
    });

}

function r_getLink(r_point) {
    var r_model = $("#r_aero_model").val();
    var r_init_term = $("#r_aero_init_term").val();
    var r_date = r_formDate($("#r_date").val());

    $.ajax({
        type: "POST",
        url: "php/aero/r_linkhandler.php",
        data: {
            id_point: r_point,
            id_model: r_model,
            id_init_term: r_init_term,
            date: r_date
        },
        beforeSend: function() {
            $("#r_aero_img").hide();
            $("#r_plug").show();
        }
    }). done(function(result) {
        window.r_links.length = 0;
        window.r_links = null;
        window.curTime = 0;
        window.r_links = JSON.parse(result);
        r_border(0);
        $("#r_aero_img").attr("src", window.r_links[0]);
        $("#r_aero_img").ready(function() {
            $("#r_plug").hide();
        });
        $("#r_aero_img").show();
    });
}

function r_getImg(time) {
    window.r_curTime = time;
    r_border(window.r_curTime);
    $("#r_aero_img").attr("src", window.r_links[window.r_curTime]);
}

function r_previous() {
    r_pause();

    if(r_curTime == 0) r_curTime = window.r_links.length - 1
    else r_curTime--;

    r_border(r_curTime);
    $("#r_aero_img").attr("src", window.r_links[r_curTime]);
    if(r_fullScreen) $("#r_aero_popup_img").attr("src", window.r_links[r_curTime]);

    return r_curTime;
}

function r_next() {
    r_pause();

    if(r_curTime == window.r_links.length - 1) r_curTime = 0
    else r_curTime++;

    r_border(r_curTime);
    $("#r_aero_img").attr("src", window.r_links[r_curTime]);
    if(r_fullScreen) $("#r_aero_popup_img").attr("src", window.r_links[r_curTime]);

    return r_curTime;
}

function r_pause() {
    $("#r_aero_pause").html('&#9658;');
    r_playing = false;
    clearInterval(r_slideInterval);
}

function r_play(r_curTime, r_v) {
    $("#r_aero_pause").html('&#10074;&#10074;');
    r_playing = true;

    r_slideInterval = setInterval(function() {
        if(window.r_curTime == window.r_links.length - 1) window.r_curTime = 0
        else window.r_curTime++;

        r_border(window.r_curTime);
        $("#r_aero_img").attr("src", window.r_links[window.r_curTime]);
    }, r_v);

    return window.r_curTime;
}

function r_border(obj) {
    var name;
    for(var i=0; i<r_links.length; i++) {
        name = "#r_but_" + i;
        $(name).css("border-bottom", "2px solid transparent");
    }
        name = "#r_but_" + obj;
        $(name).css("border-bottom", "2px solid #0606A3");
}

function r_formDate(obj) {
    var year = obj.substring(0, 4);
    var month = obj.substring(5, 7);
    var day = obj.substring(8);

    var result = year + month + day;

    return result;
}
