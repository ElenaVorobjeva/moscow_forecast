var r_arr = [];
var r_links = [];
var r_id = [];
var r_current = 0;
var r_val = 0;
var r_end = 0;
var r_src;
var r_domen, r_point;
var r_isOpenBig = false;


jQuery(function($) {
    $(document).ready(function() {
        r_getPointList();
    });
});

function r_show(r_domen, r_point) {

    window.r_domen = r_domen;
    window.r_point = r_point;

    $( "#r_meteo_img" ).on("load", function() {
        $( "#r_meteo_not_find" ).hide();
        $( "#r_meteo_img" ).show();
    });

    $("#r_meteo_img").on("error", function() {
        $( "#r_meteo_img" ).hide();
        $( "#r_meteo_not_find" ).show();
    });

    r_getTitle(r_domen, r_point);

    $("#r_meteo_popup").show();

    return;
}

$("#r_meteo_init_term").change(function() {
    r_getLink(r_domen, r_point);
});

$("#r_date").change(function() {
    var r_date = $("#r_date").val();
    $.ajax({
        type: "POST",
        url: "php/date/r_date.php",
        data: {date_2: r_date}
    }).done(function(result) {});
    r_getLink(r_domen, r_point);
});

$("#r_meteo_popup_bg").click(function() {
    if(!r_isOpenBig)
        $("#r_meteo_popup").hide();
});
$(document).keydown(function(e) {
    if( e.keyCode === 27 ) {
        if (!r_isOpenBig)
            $("#r_meteo_popup").hide();
    }
});

$("#r_meteo_img").click(function() {

    r_isOpenBig = true;

    $.ajax({
        type: "POST",
        url: "php/meteo/r_linkarrhandler.php",
        data: {
            id_domen: r_domen,
            id_point: r_point,
            id_model: $("#r_meteo_model").val(),
            id_init_term: $("#r_meteo_init_term").val(),
            date: formDate($("#r_date").val())
        }
    }). done(function(result) {
        r_arr.length = 0;
        r_arr = null;
        r_arr = JSON.parse(result);
        r_links = r_arr["links"];
        r_id = r_arr["id"];
        r_current = r_arr["current"];
        r_end = r_arr["end"];
        r_src = r_links[r_current];

        $("body").append("<div id='r_meteogram_popup' class='popup'>"+
                         "<div id='r_meteogram_popup_bg' class='popup_bg'></div>"+
                         "<img src='"+r_src+"' id='r_meteogram_popup_img' class='popup_img' />"+
                         "<div id='r_meteogram_popup_previous' class='popup_previous'><</div>"+
                         "<div id='r_meteogram_popup_next' class='popup_next'>></div>"+
                         "</div>");
        $("#r_meteogram_popup").show();

        $("#r_meteogram_popup_next").click(function(){
            if(r_current == r_end) r_current = 0;
            else r_current++;
            $("#r_meteogram_popup_img").attr("src", r_links[r_current]);
            $("#r_meteo_model").removeAttr('selected');
            $(r_id[r_current]).attr('selected', 'selected');
        });

        $("#r_meteogram_popup_previous").click(function(){
            if(r_current == 0) r_current = r_end;
            else r_current--;
            $("#r_meteogram_popup_img").attr("src", r_links[r_current]);
            $("#r_meteo_model").removeAttr('selected');
            $(r_id[r_current]).attr('selected', 'selected');
        });

        $("#r_meteogram_popup_bg").click(function() {
            r_val = $("#r_meteo_model").val();
            $("#r_meteogram_popup").hide();
            $("#r_meteogram_popup").remove();
            r_isOpenBig = false;
        });

        $(document).keydown(function(e) {
            if( e.keyCode === 27 ) {
                r_val = $("#r_meteo_model").val();
                $("#r_meteogram_popup").hide();
                $("#r_meteogram_popup").remove();
                r_isOpenBig = false;
            }
        });
    });
});

function r_getPointList() {
    $.ajax({
        type: "POST",
        url: "php/meteo/r_pointhandler.php",
        beforeSend: function() {
            $("#map").hide();
            $("#r_plug").show();
        }
    }).done(function(result) {
        $("#r_meteo_list_wrapper").empty();
        $("#r_meteo_list_wrapper").html(result);
    });
}

function r_getTitle(r_domen, r_point) {
    $.ajax({
        type: "POST",
        url: "php/meteo/r_titlehandler.php",
        data: {id_domen: r_domen, id_point: r_point},
        beforeSend: function() {
            $("#map").hide();
            $("#r_plug").show();
        }
    }).done(function(result) {
        $("#r_meteo_title").empty();
        $("#r_meteo_title").html(result);
        r_getModelList(r_domen, r_point);
    });
}

function r_getModelList(r_domen, r_point) {
    $.ajax({
        type: "POST",
        url: "php/meteo/r_modelhandler.php",
        data: {id_domen: r_domen, id_point: r_point},
        beforeSend: function() {
            $("#map").hide();
            $("#r_plug").show();
        }
    }).done(function(result) {
        $("#r_model_wrapper").empty();
        $("#r_model_wrapper").html(result);
        r_getLink(r_domen, r_point);
    });
}

function r_getLink(r_domen, r_point) {
    var r_model = $("#r_meteo_model").val();
    var r_init_term = $("#r_meteo_init_term").val();
    var r_date = formDate($("#r_date").val());

    $.ajax({
        type: "POST",
        url: "php/meteo/r_linkhandler.php",
        data: {
            id_domen: r_domen,
            id_point: r_point,
            id_model: r_model,
            id_init_term: r_init_term,
            date: r_date
        },
        beforeSend: function() {
            $("#r_meteo_img").hide();
            $("#r_plug").show();
        }
    }). done(function(result) {
        $("#r_meteo_img").attr("src", result);
        $("#r_meteo_img").ready(function() {
            $("#r_plug").hide();
        });
        $("#r_meteo_img").show();
    });
}

function formDate(obj) {
    var year = obj.substring(0, 4);
    var month = obj.substring(5, 7);
    var day = obj.substring(8);

    var result = year + month + day;

    return result;
}
