var links = [];
var curTime = 0;
var fullScreen = false;

var playing = false;
var v = 1000;
var slideInterval = setInterval(function() {}, v);
clearInterval(slideInterval);


jQuery(function($) {
    $(document).ready(function() {
        getDomenList();
    });

    $('input:radio[name=initTermSel]').change(function() {
        getTime();
    });

    $("#date").change(function() {
        var date = $("#date").val();
        $.ajax({
            type: "POST",
            url: "php/date/date.php",
            data: {date: date}
        }).done(function(result) {});
        getLink(0);
    });

    $( "#map" ).on("load", function() {
        if(window.links[window.curTime].indexOf("diana") == -1) {
            $("#map").attr("class", "grace");
            $(".map_container").attr("class", "map_container grace");
        }
        else {
            $("#map").attr("class", "diana");
            $(".map_container").attr("class", "map_container diana");
        }
        $( "#not_find" ).hide();
        $( "#map" ).show();
    });

    $("#map").on("error", function() {
        $( "#map" ).hide();
        $( "#not_find" ).show();
    });

    $("#previous").click(function() {
        pause();
        curTime = previous();
    });

    $("#next").click(function() {
        pause();
        curTime = next();
    });

    $("input:radio[name=speed]").change(function() {
        pause();
        v = $('input:radio[name=speed]:checked').val();
    });

    $("#pause").click(function() {
        if(playing) pause ();
        else curTime = play(curTime, v);
    });

    var div = document.getElementById('map');
    div.addEventListener("wheel", function(e) {
        if(!($("#popup").length)) {
            if (e.deltaY < 0) {
                curTime = previous();
            }
            else if (e.deltaY > 0) {
                curTime = next();
            }
        }
    });

    $(document).keyup(function(e){
        if(!($("#popup").length)) {
            if (e.which == 37) {
                curTime = previous();
            }
        }
    });

    $(document).keyup(function(e){
        if(!($("#popup").length)) {
            if (e.which == 39) {
                curTime = next();
            }
        }
    });

    $("#map").click(function() {

        fullScreen = true;
        pause();

        var img = $(this);
        var src = img.attr('src');

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
            curTime = next();
        });

        $("#popup_previous").click(function(){
            curTime = previous();
        });

        $(document).keydown(function(e) {

            if( e.keyCode === 27 ) {
                $("#popup").hide();
                $("#popup").remove();
                fullScreen = false;
                $("html").css("overflow","auto");
            }
        });

        $("#popup_bg").click(function() {

            $("#popup").hide();
            $("#popup").remove();
            fullScreen = false;
            $("html").css("overflow","auto");
        });
    });
});

function getDomenList() {
    $.ajax({
        type: "POST",
        url: "php/map/domenhandler.php",
        beforeSend: function() {
            $("#map").hide();
            $("#plug").show();
        }
    }).done(function(result) {
        $("#domen_wrapper").empty();
        $("#domen_wrapper").html(result);
        getModelList();
    });
}


function getModelList(){
    var domen = $('input:radio[name=domenSel]:checked').val();

    pause();

    $.ajax({
        type: "POST",
        url: "php/map/modelhandler.php",
        data: {id_domen: domen},
        beforeSend: function() {
            $("#map").hide();
            $("#plug").show();
        }
    }).done(function(result) {
        $("#model_wrapper").empty();
        $("#model_wrapper").html(result);
        getElemList();
    });
}

function getElemList() {
    var domen = $('input:radio[name=domenSel]:checked').val();
    var model = $('input:radio[name=modelSel]:checked').val();

    pause();

    $.ajax({
        type: "POST",
        url: "php/map/elemhandler.php",
        data: {id_domen: domen, id_model: model},
        beforeSend: function() {
            $("#map").hide();
            $("#plug").show();
        }
    }).done(function(result) {
        $("#elem_wrapper").empty();
        $("#elem_wrapper").html(result);
        getTime();
    });
}

function getTime() {
    var domen = $('input:radio[name=domenSel]:checked').val();
    var model = $('input:radio[name=modelSel]:checked').val();
    var elem = $('input:radio[name=elemSel]:checked').val();
    var init_term = $('input:radio[name=initTermSel]:checked').val();

    pause();

    $.ajax({
        type: "POST",
        url: "php/map/timehandler.php",
        data: {
            id_domen: domen,
            id_model: model,
            id_elem: elem,
            id_init_term: init_term
        },
        beforeSend: function() {
            $("#map").hide();
            $("#plug").show();
        }
    }). done(function(result) {
        $("#time_wrapper").empty();
        $("#time_wrapper").html(result);
        getLink();
    });
}

function getLink() {
    var domen = $('input:radio[name=domenSel]:checked').val();
    var model = $('input:radio[name=modelSel]:checked').val();
    var elem = $('input:radio[name=elemSel]:checked').val();
    var init_term = $('input:radio[name=initTermSel]:checked').val();
    var date = formDate($("#date").val());

    pause();

    $.ajax({
        type: "POST",
        url: "php/map/linkhandler.php",
        data: {
            id_domen: domen,
            id_model: model,
            id_elem: elem,
            id_init_term: init_term,
            date: date
        },
        beforeSend: function() {
            $("#map").hide();
            $("#plug").show();
        }
    }). done(function(result) {
        window.links.length = 0;
        window.links = null;
        window.curTime = 0;
        window.links = JSON.parse(result);
        border(0);
        $("#map").attr("src", window.links[0]);
        $("#map").ready(function() {
            $("#plug").hide();
        });
        $("#map").show();
    });
}

function getImg(time) {
    pause();
    window.curTime = time;
    border(window.curTime);
    $("#map").attr("src", window.links[window.curTime]);
}

function previous() {
    pause();

    if(curTime == 0) curTime = window.links.length - 1
    else curTime--;

    border(curTime);
    $("#map").attr("src", window.links[curTime]);
    if(fullScreen) $("#popup_img").attr("src", window.links[curTime]);

    return curTime;
}

function next() {
    pause();

    if(curTime == window.links.length - 1) curTime = 0
    else curTime++;

    border(curTime);
    $("#map").attr("src", window.links[curTime]);
    if(fullScreen) $("#popup_img").attr("src", window.links[curTime]);

    return curTime;
}

function pause () {
    $("#pause img").attr("src", "img/play.png");
    playing = false;
    clearInterval(slideInterval);
}

function play (curTime, v) {

    $("#pause img").attr("src", "img/pause.png");
    playing = true;

    slideInterval = setInterval(function() {
        if(window.curTime == window.links.length - 1) window.curTime = 0
        else window.curTime++;

        border(window.curTime);
        $("#map").attr("src", window.links[window.curTime]);
    }, v);
    return window.curTime;
}

function formDate(obj) {
    var year = obj.substring(0, 4);
    var month = obj.substring(5, 7);
    var day = obj.substring(8);

    var result = year + month + day;

    return result;
}

function border (obj) {

    var name;
    for(var i=0; i<links.length; i++) {
        name = "#but_" + i;
        $(name).css("border-bottom", "2px solid transparent");
    }
    name = "#but_" + obj;
    $(name).css("border-bottom", "2px solid #0606A3");

}
