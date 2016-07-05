<div class="m_left box">
	<img src="/img/logo.jpg">
	<a class="zapis" href="#">Записаться на прием</a>
	<img src="/img/ava.png">
	<div class="director">
		<span>Фамилия Имя Отчество</span>
		<p>- генеральный директор компании “Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.”</p>
		<a href="#">Подробнее</a>
	</div>
</div>
<div class="right_part">
	<div class="n_heading">
		<?=$page['Page']['title'] ?>
	</div>
	<div class="content">
		<?=$page['Page']['body'] ?>
	</div>
</div>
<div class="clearfix"></div>

<script type="text/javascript">
	$(document).ready(function(){
	  $('.single-item').slick(
	  {
	  	dots: true,
	  	autoplay: true,
	  	arrows: false,
	  	speed: 900
	  }
	  	);
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
	});
</script>