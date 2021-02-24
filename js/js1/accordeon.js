$(document).ready(function() {
	$('#l_accordeon .acc-head').on('click', l_f_acc);
	$('#r_accordeon .acc-head').on('click', r_f_acc);
});

function l_f_acc(){
	$('#l_accordeon .acc-body').not($(this).next()).slideUp(200);
	$(this).next().slideToggle(200);
}

function r_f_acc(){
  	$('#r_accordeon .acc-body').not($(this).next()).slideUp(200);
    $(this).next().slideToggle(200);
}
