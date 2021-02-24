var arr = [];
var links = [];
var id = [];
var current = 0;
var val = 0;
var end = 0;
var src;


jQuery(function($) {

    $(document).ready(function() {
        getDomenList();
    });

    $('input:radio[name=initTermSel]').change(function() {
        getLink();
    });

    $("#date").change(function() {
        var date = $("#date").val();
        $.ajax({
            type: "POST",
            url: "php/date/date.php",
            data: {date: date}
        }).done(function(result) {});
        getLink();
    });

    $( "#map" ).on("load", function() {
        $( "#not_find" ).hide();
        $( "#map" ).show();
    });

    $("#map").on("error", function() {
        $( "#map" ).hide();
        $( "#not_find" ).show();
    });

    $("#map").click(function() {

        fullScreen = true;

        $.ajax({
            type: "POST",
            url: "php/meteo/linkarrhandler.php",
            data: {
                id_domen: $('input:radio[name=domenSel]:checked').val(),
                id_point: $('input:radio[name=pointSel]:checked').val(),
                id_model: $('input:radio[name=modelSel]:checked').val(),
                id_init_term: $('input:radio[name=initTermSel]:checked').val(),
                date: formDate($("#date").val())
            }
        }). done(function(result) {
            arr.length = 0;
            arr = null;
            arr = JSON.parse(result);
            links = arr["links"];
            id = arr["id"];
            current = arr["current"];
            end = arr["end"];
            src = links[current];
            $("body").append("<div id='popup' class='popup'>"+
                             "<div id='popup_bg' class='popup_bg'></div>"+
                             "<img src='"+src+"' id='popup_img' class='popup_img' />"+
                             "<div id='popup_previous' class='popup_previous'><</div>"+
                             "<div id='popup_next' class='popup_next'>></div>"+
                             "</div>");

            $("body,html").animate({
                scrollTop:0
            }, 0);

            $("html").css("overflow","hidden");

            $("#popup").show();

            $("#popup_next").click(function(){
                if(current == end) current = 0;
                else current++;
                $("#popup_img").attr("src", links[current]);
                $('input:radio[name=pointSel]').removeAttr('checked');
                $(id[current]).attr('checked', 'checked');

            });

            $("#popup_previous").click(function(){
                if(current == 0) current = end;
                else current--;
                $("#popup_img").attr("src", links[current]);
                $('input:radio[name=pointSel]').removeAttr('checked');
                $(id[current]).attr('checked', 'checked');
            });

            var bigMap = document.getElementById('popup_img');
            bigMap.addEventListener("wheel", function(e) {
                if (e.deltaY < 0) {
                    if(current == 0) current = end;
                    else current--;
                    $("#popup_img").attr("src", links[current]);
                    $('input:radio[name=pointSel]').removeAttr('checked');
                    $(id[current]).attr('checked', 'checked');
                }
                else if (e.deltaY > 0) {
                    if(current == end) current = 0;
                    else current++;
                    $("#popup_img").attr("src", links[current]);
                    $('input:radio[name=pointSel]').removeAttr('checked');
                    $(id[current]).attr('checked', 'checked');
                }
            });

            $("#popup_bg").click(function() {
                if($('input:radio[name=pointSel]:checked').val() === undefined) {
                    var a = (current == 2) ? 0 : (current + 1);
                    $('input:radio[name=pointSel]').removeAttr('checked');
                    $(id[a]).attr('checked', 'checked');
                }
                val = $('input:radio[name=modelSel]:checked').val();
                getModelList(val);
                $("#popup").hide();
                $("#popup").remove();
                fullScreen = false;
            });

            $(document).keydown(function(e) {
                if( e.keyCode === 27 ) {
                    $('input:radio[name=pointSel]').removeAttr('checked');
                    $(id[current]).attr('checked', 'checked');
                    val = $('input:radio[name=modelSel]:checked').val();
                    getModelList(val);
                    $("#popup").hide();
                    $("#popup").remove();
                    fullScreen = false;
                }
            });
        });
    });
});

function showMeteogram(domen, point) {
    if(domen == 2 || domen == 3 || domen == 4) {
        $('#gmap_container').hide();
        $('.map_container').show();
        $('#gmap_button').html('Показать на карте');

        var selector = "input:radio[name=domenSel][value=" + domen + "]";
        $('input:radio[name=domenSel]').removeAttr('checked');
        $(selector).attr('checked', 'checked');
        getPointList(point);
    }
    else {
        l_show(domen, point);
    }
}

function getDomenList() {
    $.ajax({
        type: "POST",
        url: "php/meteo/domenhandler.php",
        beforeSend: function() {
            $("#map").hide();
            $("#plug").show();
        }
    }).done(function(result) {
        $("#domen_wrapper").empty();
        $("#domen_wrapper").html(result);
        getPointList(1);
    });
}

function getPointList(point) {
    var domen = $('input:radio[name=domenSel]:checked').val();

    $.ajax({
        type: "POST",
        url: "php/meteo/pointhandler.php",
        data: {
            id_domen: domen,
            id_point: point
        },
        beforeSend: function() {
            $("#map").hide();
            $("#plug").show();
        }
    }).done(function(result) {
        $("#point_wrapper").empty();
        $("#point_wrapper").html(result);
        getModelList(2);
    });
}

function getModelList(val) {
    var domen = $('input:radio[name=domenSel]:checked').val();
    var point = $('input:radio[name=pointSel]:checked').val();

    $.ajax({
        type: "POST",
        url: "php/meteo/modelhandler.php",
        data: {id_domen: domen, id_point: point, val: val},
        beforeSend: function() {
            $("#map").hide();
            $("#plug").show();
        }
    }).done(function(result) {
        $("#model_wrapper").empty();
        $("#model_wrapper").html(result);
        getLink();
    });
}

function getLink() {
    var domen = $('input:radio[name=domenSel]:checked').val();
    var point = $('input:radio[name=pointSel]:checked').val();
    var model = $('input:radio[name=modelSel]:checked').val();
    var init_term = $('input:radio[name=initTermSel]:checked').val();
    var date = formDate($("#date").val());

    $.ajax({
        type: "POST",
        url: "php/meteo/linkhandler.php",
        data: {
            id_domen: domen,
            id_point: point,
            id_model: model,
            id_init_term: init_term,
            date: date
        },
        beforeSend: function() {
            $("#map").hide();
            $("#plug").show();
        }
    }). done(function(result) {
        $("#map").attr("src", result);
        $("#map").ready(function() {
            $("#plug").hide();
        });
        $("#map").show();
    });
}

function formDate(obj) {
    var year = obj.substring(0, 4);
    var month = obj.substring(5, 7);
    var day = obj.substring(8);

    var result = year + month + day;

    return result;
}
