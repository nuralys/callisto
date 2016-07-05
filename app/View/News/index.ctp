<div class="m_left box">
	<img src="img/logo.jpg">
	<a class="zapis" href="#">Записаться на прием</a>
	<img src="img/ava.png">
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
	<ul class="news_rows">
	<?php foreach($news as $item): ?>
		<li>
			<div class="n_row">
				<a class="img" href="/news/view/<?=$item['News']['id']?>" title="<?=$item['News']['title']?>"><img src="/img/news/thumbs/<?=$item['News']['img']?>" alt="<?=$item['News']['title']?>" /></a>
				<a class="heading" href="/news/view/<?=$item['News']['id']?>"><?=$item['News']['title']?></a>
				<span><?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?></span>
			</div>
		</li>
	<?php endforeach ?>	
	</ul>
</div>
<div class="clearfix"></div>

