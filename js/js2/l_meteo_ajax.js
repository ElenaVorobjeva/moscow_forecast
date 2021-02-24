var l_arr = [];
var l_links = [];
var l_id = [];
var l_current = 0;
var l_val = 0;
var l_end = 0;
var l_src;
var l_domen, l_point;
var l_isOpenBig = false;


jQuery(function($) {
    $(document).ready(function() {
        l_getPointList();
    });
});

function l_show(l_domen, l_point) {

    window.l_domen = l_domen;
    window.l_point = l_point;

    $( "#l_meteo_img" ).on("load", function() {
        $( "#l_meteo_not_find" ).hide();
        $( "#l_meteo_img" ).show();
    });

    $("#l_meteo_img").on("error", function() {
        $( "#l_meteo_img" ).hide();
        $( "#l_meteo_not_find" ).show();
    });

    l_getTitle(l_domen, l_point);

    $("#l_meteo_popup").show();

    return;
}

$("#l_meteo_init_term").change(function() {
    l_getLink(l_domen, l_point);
});

$("#l_date").change(function() {
    var l_date = $("#l_date").val();
    $.ajax({
        type: "POST",
        url: "php/date/l_date.php",
        data: {date_1: l_date}
    }).done(function(result) {});
    l_getLink(l_domen, l_point);
});

$("#l_meteo_popup_bg").click(function() {
    if(!l_isOpenBig)
        $("#l_meteo_popup").hide();
});
$(document).keydown(function(e) {
    if( e.keyCode === 27 ) {
        if (!l_isOpenBig)
            $("#l_meteo_popup").hide();
    }
});

$("#l_meteo_img").click(function() {

    l_isOpenBig = true;

    $.ajax({
        type: "POST",
        url: "php/meteo/l_linkarrhandler.php",
        data: {
            id_domen: l_domen,
            id_point: l_point,
            id_model: $("#l_meteo_model").val(),
            id_init_term: $("#l_meteo_init_term").val(),
            date: formDate($("#l_date").val())
        }
    }). done(function(result) {
        l_arr.length = 0;
        l_arr = null;
        l_arr = JSON.parse(result);
        l_links = l_arr["links"];
        l_id = l_arr["id"];
        l_current = l_arr["current"];
        l_end = l_arr["end"];
        l_src = l_links[l_current];

        $("body").append("<div id='l_meteogram_popup' class='popup'>"+
                         "<div id='l_meteogram_popup_bg' class='popup_bg'></div>"+
                         "<img src='"+l_src+"' id='l_meteogram_popup_img' class='popup_img' />"+
                         "<div id='l_meteogram_popup_previous' class='popup_previous'><</div>"+
                         "<div id='l_meteogram_popup_next' class='popup_next'>></div>"+
                         "</div>");
        $("#l_meteogram_popup").show();

        $("#l_meteogram_popup_next").click(function(){
            if(l_current == l_end) l_current = 0;
            else l_current++;
            $("#l_meteogram_popup_img").attr("src", l_links[l_current]);
            $("#l_meteo_model").removeAttr('selected');
            $(l_id[l_current]).attr('selected', 'selected');
        });

        $("#l_meteogram_popup_previous").click(function(){
            if(l_current == 0) l_current = l_end;
            else l_current--;
            $("#l_meteogram_popup_img").attr("src", l_links[l_current]);
            $("#l_meteo_model").removeAttr('selected');
            $(l_id[l_current]).attr('selected', 'selected');
        });

        $("#l_meteogram_popup_bg").click(function() {
            l_val = $("#l_meteo_model").val();
            $("#l_meteogram_popup").hide();
            $("#l_meteogram_popup").remove();
            l_isOpenBig = false;
        });

        $(document).keydown(function(e) {
            if( e.keyCode === 27 ) {
                l_val = $("#l_meteo_model").val();
                $("#l_meteogram_popup").hide();
                $("#l_meteogram_popup").remove();
                l_isOpenBig = false;
            }
        });
    });
});

function l_getPointList() {
    $.ajax({
        type: "POST",
        url: "php/meteo/l_pointhandler.php",
        beforeSend: function() {
            $("#map").hide();
            $("#l_plug").show();
        }
    }).done(function(result) {
        $("#l_meteo_list_wrapper").empty();
        $("#l_meteo_list_wrapper").html(result);
    });
}

function l_getTitle(l_domen, l_point) {
    $.ajax({
        type: "POST",
        url: "php/meteo/l_titlehandler.php",
        data: {id_domen: l_domen, id_point: l_point},
        beforeSend: function() {
            $("#map").hide();
            $("#l_plug").show();
        }
    }).done(function(result) {
        $("#l_meteo_title").empty();
        $("#l_meteo_title").html(result);
        l_getModelList(l_domen, l_point);
    });
}

function l_getModelList(l_domen, l_point) {
    $.ajax({
        type: "POST",
        url: "php/meteo/l_modelhandler.php",
        data: {id_domen: l_domen, id_point: l_point},
        beforeSend: function() {
            $("#map").hide();
            $("#l_plug").show();
        }
    }).done(function(result) {
        $("#l_model_wrapper").empty();
        $("#l_model_wrapper").html(result);
        l_getLink(l_domen, l_point);
    });
}

function l_getLink(l_domen, l_point) {
    var l_model = $("#l_meteo_model").val();
    var l_init_term = $("#l_meteo_init_term").val();
    var l_date = formDate($("#l_date").val());

    $.ajax({
        type: "POST",
        url: "php/meteo/l_linkhandler.php",
        data: {
            id_domen: l_domen,
            id_point: l_point,
            id_model: l_model,
            id_init_term: l_init_term,
            date: l_date
        },
        beforeSend: function() {
            $("#l_meteo_img").hide();
            $("#l_plug").show();
        }
    }). done(function(result) {
        $("#l_meteo_img").attr("src", result);
        $("#l_meteo_img").ready(function() {
            $("#l_plug").hide();
        });
        $("#l_meteo_img").show();
    });
}

function formDate(obj) {
    var year = obj.substring(0, 4);
    var month = obj.substring(5, 7);
    var day = obj.substring(8);

    var result = year + month + day;

    return result;
}
