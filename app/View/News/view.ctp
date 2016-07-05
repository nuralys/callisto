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
		Новости и Акции
	</div>
	<div class="content">
		<img src="/img/news/<?=$data['News']['img'] ?>"/>
		<h3><?=$data['News']['title'] ?></h3>
		<span class="date"><?php echo $this->Time->format($data['News']['date'], '%d.%m.%Y', 'invalid'); ?></span>
		<?=$data['News']['body'] ?>
	</div>
</div>
<div class="clearfix"></div>