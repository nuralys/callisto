$(document).ready(function(){
	  var more = document.querySelector(".more_b");
		    var p_show = document.querySelector(".director p");
		    more.addEventListener("click", function(){
		    	p_show.classList.add("p_show");
		    	more.classList.add("more_hid");
		    });


	  $('.single-item').slick(
	  {
	  	dots: true,
	  	autoplay: true,
	  	arrows: false,
	  	speed: 900
	  }
	  	);	  	
	});
		
$('.price_name ').on('click', function () {
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).children('.price_content').animate({height: "hide"}, "800");
		}else{
			$('.price_name').children('.price_content').removeClass('active');
			$('.price_name').children('.price_content').animate({height: "hide"}, "easein");
			$(this).addClass('active');
			$(this).children('.price_content').animate({height: "show"}, "easein");
			

		}
		
		
		}); 
