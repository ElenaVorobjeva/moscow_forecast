var r_links = [];
var r_curTime = 0;
var r_fullScreen = false;

var r_playing = false;
var r_v = 1000;
var r_slideInterval = setInterval(function() {}, r_v);
clearInterval(r_slideInterval);


jQuery(function($) {
    $(document).ready(function() {
        r_getDomenList();
    });

    $('#r_init_term').change(function() {
        r_getTime();
    });

    $("#r_date").change(function() {
        var r_date = $("#r_date").val();
        $.ajax({
            type: "POST",
            url: "php/date/r_date.php",
            data: {date_2: r_date}
        }).done(function(result) {});
        r_getLink(0);
    });

    $( "#r_map" ).on("load", function() {

        $( "#r_not_find" ).hide();
        $( "#r_map" ).show();
    });

    $("#r_map").on("error", function() {
        $( "#r_map" ).hide();
        $( "#r_not_find" ).show();
    });

    $("#r_previous").click(function() {
        r_pause();
        r_curTime = r_previous();
    });

    $("#r_next").click(function() {
        r_pause();
        r_curTime = r_next();
    });

    $("#r_speed").change(function() {
        r_pause();
        v = $('#r_speed').val();
    });

    $("#r_pause").click(function() {
        if(r_playing) r_pause ();
        else r_curTime = r_play(r_curTime, r_v);
    });

    var r_div = document.getElementById('r_map');
    r_div.addEventListener("wheel", function(e) {
        if(!($("#r_popup").length)) {
            if (e.deltaY < 0) {
                r_curTime = r_previous();
            }
            else if (e.deltaY > 0) {
                r_curTime = r_next();
            }
        }
    });

    $(document).keyup(function(e){
        if(!($("#r_popup").length)) {
            if (e.which == 37) {
                r_curTime = r_previous();
            }
        }
    });

    $(document).keyup(function(e){
        if(!($("#r_popup").length)) {
            if (e.which == 39) {
                r_curTime = r_next();
            }
        }
    });

    $("#r_map").click(function() {

        r_fullScreen = true;
        r_pause();

        var r_img = $(this);
        var r_src = r_img.attr('src');

        $("body").append("<div id='r_popup' class='popup'>"+
                         "<div id='r_popup_bg' class='popup_bg'></div>"+
                         "<img src='"+r_src+"' id='r_popup_img' class='popup_img' />"+
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
});

function r_getDomenList() {
    $.ajax({
        type: "POST",
        url: "php/map/r_domenhandler.php",
        beforeSend: function() {
            $("#r_map").hide();
            $("#r_plug").show();
        }
    }).done(function(result) {
        $("#r_domen").empty();
        $("#r_domen").html(result);
        r_getModelList();
    });
}

/*change tag name*/
function r_getModelList(){
    var domen = $('#r_domen').val();

    r_pause();

    $.ajax({
        type: "POST",
        url: "php/map/r_modelhandler.php",
        data: {id_domen: domen},
        beforeSend: function() {
            $("#r_map").hide();
            $("#r_plug").show();
        }
    }).done(function(result) {
        $("#r_model").empty();
        $("#r_model").html(result);
        r_getElemList();
    });
}

function r_getElemList() {
    var domen = $('#r_domen').val();
    var model = $('#r_model').val();

    r_pause();

    $.ajax({
        type: "POST",
        url: "php/map/r_elemhandler.php",
        data: {id_domen: domen, id_model: model},
        beforeSend: function() {
            $("#r_map").hide();
            $("#r_plug").show();
        }
    }).done(function(result) {
        $("#r_elem").empty();
        $("#r_elem").html(result);
        r_getTime();
    });
}

function r_getTime() {
    var domen = $('#r_domen').val();
    var model = $('#r_model').val();
    var elem = $('#r_elem').val();
    var init_term = $('#r_init_term').val();

    r_pause();

    $.ajax({
        type: "POST",
        url: "php/map/r_timehandler.php",
        data: {
            id_domen: domen,
            id_model: model,
            id_elem: elem,
            id_init_term: init_term
        },
        beforeSend: function() {
            $("#r_map").hide();
            $("#r_plug").show();
        }
    }). done(function(result) {
        $("#r_time_wrapper").empty();
        $("#r_time_wrapper").html(result);
        r_getLink();
    });
}

function r_getLink() {
    var domen = $('#r_domen').val();
    var model = $('#r_model').val();
    var elem = $('#r_elem').val();
    var init_term = $('#r_init_term').val();
    var date = r_formDate($("#r_date").val());

    r_pause();

    $.ajax({
        type: "POST",
        url: "php/map/r_linkhandler.php",
        data: {
            id_domen: domen,
            id_model: model,
            id_elem: elem,
            id_init_term: init_term,
            date: date
        },
        beforeSend: function() {
            $("#r_map").hide();
            $("#r_plug").show();
        }
    }). done(function(result) {
        window.r_links.length = 0;
        window.r_links = null;
        window.r_curTime = 0;
        window.r_links = JSON.parse(result);
        r_border(0);
        $("#r_map").attr("src", window.r_links[0]);
        $("#r_map").ready(function() {
            $("#r_plug").hide();
        });
        $("#r_map").show();
    });
}

function r_getImg(time) {
    r_pause();
    window.r_curTime = time;
    r_border(window.r_curTime);
    $("#r_map").attr("src", window.r_links[window.r_curTime]);
}

function r_previous() {
    r_pause();

    if(r_curTime == 0) r_curTime = window.r_links.length - 1
    else r_curTime--;

    r_border(r_curTime);
    $("#r_map").attr("src", window.r_links[r_curTime]);
    if(r_fullScreen) $("#r_popup_img").attr("src", window.r_links[r_curTime]);

    return r_curTime;
}

function r_next() {
    r_pause();

    if(r_curTime == window.r_links.length - 1) r_curTime = 0
    else r_curTime++;

    r_border(r_curTime);
    $("#r_map").attr("src", window.r_links[r_curTime]);
    if(r_fullScreen) $("#r_popup_img").attr("src", window.r_links[r_curTime]);

    return r_curTime;
}

function r_pause () {
    $("#r_pause").html('&#9658;');
    r_playing = false;
    clearInterval(r_slideInterval);
}

function r_play (r_curTime, r_v) {

    $("#r_pause").html('&#10074;&#10074;');
    r_playing = true;

    r_slideInterval = setInterval(function() {
        if(window.r_curTime == window.r_links.length - 1) window.r_curTime = 0
        else window.r_curTime++;

        r_border(window.r_curTime);
        $("#r_map").attr("src", window.r_links[window.r_curTime]);
    }, r_v);
    return window.r_curTime;
}

function r_formDate(obj) {
    var year = obj.substring(0, 4);
    var month = obj.substring(5, 7);
    var day = obj.substring(8);

    var result = year + month + day;

    return result;
}

function r_border (obj) {

    var name;
    for(var i=0; i<r_links.length; i++) {
        name = "#r_but_" + i;
        $(name).css("border-bottom", "2px solid transparent");
    }
    name = "#r_but_" + obj;
    $(name).css("border-bottom", "2px solid #0606A3");

}
