<div class="m_left box">
	<a href="/"><img src="img/logo.jpg"></a>
	<a class="zapis" href="#">Записаться на прием</a>
	<img src="img/ava.png">
	<div class="director">
		<span>Елена Байбекова</span>
		<p>Елена Байбекова - Сертифицированный тренер компании Валлекс, Россия. Член международных конгрессов и форумов. Обладатель многочисленных специализаций в области косметологии В течении 20 лет занимаясь активной педагогической деятельностью, издавая печатные научные работы, вносит вклад в развитие современной косметологии в Казахстане.</p>
		<button class="more_b" type="button">Подробнее</button>
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

