<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $title_for_layout ?></title>
		<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1">
		<link href="css/normalize.css" rel="stylesheet" type="text/css">
		<link href="/css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="/css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="/css/slick-theme.css"/>
	</head>
	<header>
		<div class="h_top ">
			<div class="cr">
				<nav>
					<ul class="menu">
						<li class="active"><a href="/">Главная</a></li>
						<li><a href="/news">Новости и Акции</a></li>
						<li class="under_show">
							<span>Услуги</span>
							<ul class="under_ul">
								<li><a href="service.html">Лицо</a></li>
								<li><a href="service.html">Тело</a></li>
							</ul>
						</li>
						<li><a href="prices.html">Цены</a></li>
						<li><a href="/page/contacts">Контакты</a></li>
						<li><a href="/page/about">О нас</a></li>
					</ul>
				</nav>
				<div class="right_top">
					<div class="h_number tel">
						<a href="tel:+77789998741">+7 778 999 87 41</a>
						<span>Астана, ул. Куйши Дина 23/1</span>
					</div>
					<div class="h_number skype">
						<span>astana_creative</span>
						<a href="mailto:info@astanacreative.kz">Почта: info@astanacreative.kz</a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="h_bot">
			<div class="cr">
				<ul class="social">
					<li>
						<a class="inst" href="#"></a>
					</li>
					<li>
						<a class="youtube" href="#"></a>
					</li>
					<li>
						<a class="vk" href="#"></a>
					</li>
				</ul>
				<a class="vacancy" href="/page/vacancy">Вакансии</a>
			</div>
		</div>
	</header>
	<body>
		<div class="main">
			<div class="cr">
				<div class="m_left box">
					<a href="/">
						<img src="img/logo.jpg">
					</a>
					<a class="zapis" href="#">Записаться на прием</a>
					<img src="img/ava.png">
					<div class="director">
						<span>Елена Байбекова</span>
						<p>Елена Байбекова - Сертифицированный тренер компании Валлекс, Россия. Член международных конгрессов и форумов. Обладатель многочисленных специализаций в области косметологии В течении 20 лет занимаясь активной педагогической деятельностью, издавая печатные научные работы, вносит вклад в развитие современной косметологии в Казахстане.</p>
						<button class="more_b" type="button">Подробнее</button>
					</div>
				</div>
				<div class="m_right">
					<div class="single-item box">
					<?php foreach($slides as $item): ?>
						<div><img src="/img/slider/thumbs/<?=$item['Slide']['img']?>"/></div>
					<?php endforeach ?>
					</div>
					<div class="castilo box">
						<div class="up_castilo">
							<span class="fl_l">По любым возникшим вопросам звоните: </span>
							<span class="fl_r">+7 (7172) 78-38-02,  +7 778 999 87 41</span>
						</div>
						<div class="castilo_des">
							<h2>Callisto - косметологический центр Елены Байбековой</h2>
							<p><?= $this->Text->truncate(strip_tags($page['Page']['body']), 390, array('ellipsis' => '...', 'exact' => true)) ?></p>
							<a href="/page/about">Подробнее</a>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="cr">
			<div class="m_service">
				<a href="#" class="face">
					<div>Лицо</div>
				</a>
				<a href="#" class="body">
					<div>Тело</div>
				</a>
			</div>
			<div class="m_news">
				<div class="n_heading">
					Новости и Акции
				</div>
				<ul class="rows">
					<?php foreach($news as $item): ?>
					<li>
						<div class="n_row">
							<a class="img" href="news_second.html"><img src="/img/news/thumbs/<?=$item['News']['img']?>"/></a>
							<a class="heading" href="news_second.html"><?=$item['News']['title']?></a>
							<span><?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?></span>
						</div>
					</li>
					<?php endforeach ?>					
				</ul>
			</div>
		</div>
		<footer>
			<div class="h_top">
				<div class="cr">
					<nav>
					<ul class="menu">
						<li class="active"><a href="index.html">Главная</a></li>
						<li><a href="news.html">Новости и Акции</a></li>
						<li class="under_show">
							<span>Услуги</span>
							<ul class="under_ul">
								<li><a href="service.html">Лицо</a></li>
								<li><a href="service.html">Тело</a></li>
							</ul>
							</li>
							<li><a href="prices.html">Цены</a></li>
							<li><a href="contacts.html">Контакты</a></li>
							<li><a href="about.html">О нас</a></li>
						</ul>
					</nav>
					<div class="right_top">
						<div class="h_number tel">
							<a href="tel:+77789998741">+7 778 999 87 41</a>
							<span>Астана, ул. Куйши Дина 23/1</span>
						</div>
						<div class="h_number skype">
							<span>astana_creative</span>
							<a href="mailto:info@astanacreative.kz">Почта: info@astanacreative.kz</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="h_bot">
				<div class="cr">
					<span class="fl_l">Copyright © 2016  Все права защищены</span>
					<span class="fl_r">Сайт разработан в <a target="_blank" href="http://astanacreative.kz"> Астана Креатив</a></span>
				</div>
			</div>	
		</footer>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="/js/slick.min.js"></script>
		<script type="text/javascript" src="/js/script.js"></script>
	</body>
</html>