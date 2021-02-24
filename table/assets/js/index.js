var id_point;

jQuery(function($) {
    getForcast();

    $(document).keyup(function(e){
        if (e.which == 13) {
            getForcast();
        }
    });

    $("#helper-icon").on('click', function() {
        if($("#helper").is(":visible")) {
            $("#helper").hide();
        }
        else {
            $("#helper").show();
        }
    });

    $("#helper .close").on('click', function() {
        $("#helper").hide();
    });

    $('#acc-header-link span').on('click', function() {
        if($("#acc-body").is(":visible")) {
            $("#acc-body").hide();
            $("#acc-header-link span i").toggleClass('fa-angle-double-up').toggleClass('fa-angle-double-down');
        }
        else {
            $("#acc-body").show();
            $("#acc-header-link span i").toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
        }
    });
});

function getForcast() {
    id_point = $("#point").val();
    date = $("#date").val();
    init_term = $("#init_term").val();

    date = checkDate(date);

    $.ajax({
        type: "POST",
        url: "php/handler.php",
        data: {
            id_point: id_point,
            date: date,
            init_term: init_term
        },
        beforeSend: function() {
            $(".loading").show();
        }
    }).done(function(result) {
        $(".loading").hide();
        $("#table").empty();
        $("#table").html(result);
    });
}

function checkDate(date) {
    reg = /[0-9]{2}.[0-9]{2}.[0-9]{4}/;

    if(reg.test(date)) {
        return date.slice(6, 10) + date.slice(3, 5) + date.slice(0, 2);
    }
    else {
        alert("Пожалуйста, введите дату в правильном формате дд.мм.гггг");
    }
}
