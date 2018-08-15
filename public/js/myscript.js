$(document).ready(function(){
	
	// var span = document.getElementById("myread");

	// span.addEventListener("click",open);

	// function open(){
	// 	document.getElementById("mydays_desc").style.height = document.getElementById("mydays_desc").style.height === "130px" ? "100%" : "130px" ;
	// }

	$('.myread_more1').click(function(){
			if ($('#mydays_desc1').css("height") == "70px"){
				$('#mydays_desc1').animate({height: 130});
			}
			else {
				$('#mydays_desc1').animate({height: 70});
			}
	});

	$('.myread_more3').click(function(){
		if ($('#mydays_desc3').css("height") == "70px"){
			$('#mydays_desc3').animate({height: 380});
		}
		else {
			$('#mydays_desc3').animate({height: 70});
		}
	});

	$('.myread_more4').click(function(){
		if ($('#mydays_desc4').css("height") == "70px"){
			$('#mydays_desc4').animate({height: 250});
		}
		else {
			$('#mydays_desc4').animate({height: 70});
		}
	});

	$('.myread_more5').click(function(){
		if ($('#mydays_desc5').css("height") == "70px"){
			$('#mydays_desc5').animate({height: 270});
		}
		else {
			$('#mydays_desc5').animate({height: 70});
		}
	});

	$('.myread_more6').click(function(){
		if ($('#mydays_desc6').css("height") == "70px"){
			$('#mydays_desc6').animate({height: 150});
		}
		else {
			$('#mydays_desc6').animate({height: 70});
		}
	});
	$('.myread_more7').click(function(){
		var max = 270;
		var min = 70;
		if ($('#mydays_desc7').css("height") == "70px"){
			$('#mydays_desc7').animate({height: max});
		}
		else {
			$('#mydays_desc7').animate({height: min});
		}
	});



});	