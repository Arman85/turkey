$(document).ready(function(){
	
	// var span = document.getElementById("myread");

	// span.addEventListener("click",open);

	// function open(){
	// 	document.getElementById("mydays_desc").style.height = document.getElementById("mydays_desc").style.height === "130px" ? "100%" : "130px" ;
	// }

	var size = $(window).width();
	if (size > '991'){
		$('#mydays_desc1').css({"height" : "80px"});
		$('.myread_more1').click(function(){
			if ($('#mydays_desc1').css("height") == "80px"){
				$('#mydays_desc1').animate({height: 550});
			}
			else {
				$('#mydays_desc1').animate({height: 80});
			}
		});
	}
	else {
		$('#mydays_desc1').css({"height" : "80px"});
		$('.myread_more1').click(function(){
			if ($('#mydays_desc1').css("height") == "80px"){
				$('#mydays_desc1').animate({height: 650});
			}
			else {
				$('#mydays_desc1').animate({height: 80});
			}
		});
	}

	if (size > '991'){
		$('.myread_more3').click(function(){
			if ($('#mydays_desc3').css("height") == "80px"){
				$('#mydays_desc3').animate({height: 270});
			}
			else {
				$('#mydays_desc3').animate({height: 80});
			}
		});
	}
	else{
		$('.myread_more3').click(function(){
			if ($('#mydays_desc3').css("height") == "80px"){
				$('#mydays_desc3').animate({height: 310});
			}
			else {
				$('#mydays_desc3').animate({height: 80});
			}
		});
	}

	if (size > '991'){
		$('.myread_more4').click(function(){
			if ($('#mydays_desc4').css("height") == "80px"){
				$('#mydays_desc4').animate({height: 230});
			}
			else {
				$('#mydays_desc4').animate({height: 80});
			}
		});
	}
	else{
		$('.myread_more4').click(function(){
			if ($('#mydays_desc4').css("height") == "80px"){
				$('#mydays_desc4').animate({height: 250});
			}
			else {
				$('#mydays_desc4').animate({height: 80});
			}
		});
	}

	if (size > '991'){
		$('.myread_more5').click(function(){
			if ($('#mydays_desc5').css("height") == "80px"){
				$('#mydays_desc5').animate({height: 250});
			}
			else {
				$('#mydays_desc5').animate({height: 80});
			}
		});
	}
	else{
		$('.myread_more5').click(function(){
			if ($('#mydays_desc5').css("height") == "80px"){
				$('#mydays_desc5').animate({height: 270});
			}
			else {
				$('#mydays_desc5').animate({height: 80});
			}
		});
	}

	if (size > '991'){
		$('.myread_more6').click(function(){
			if ($('#mydays_desc6').css("height") == "80px"){
				$('#mydays_desc6').animate({height: 230});
			}
			else {
				$('#mydays_desc6').animate({height: 80});
			}
		});
	}
	else{
		$('.myread_more6').click(function(){
			if ($('#mydays_desc6').css("height") == "80px"){
				$('#mydays_desc6').animate({height: 270});
			}
			else {
				$('#mydays_desc6').animate({height: 80});
			}
		});
	}

	$('.myread_more7').click(function(){
		var max = 210;
		var min = 80;
		if ($('#mydays_desc7').css("height") == "80px"){
			$('#mydays_desc7').animate({height: max});
		}
		else {
			$('#mydays_desc7').animate({height: min});
		}
	});

	// Якорь для формы обратной связи
	if (size < '991'){
		$('.contacts_anchor_mobile').attr("id", "contacts");
		// $('.price_only_august').css({
		// 	"background-color" : "rgba(40,36,52,.5)",
		// 	"padding" : "5px",
		// 	"border-radius" : "8px"
		// });
	}
	else{
		$('.contacts_anchor_desktop').attr("id", "contacts");
	}


});	