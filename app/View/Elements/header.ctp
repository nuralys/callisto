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
						<?php foreach($menu_services as $item): ?>
							<li><a href="/services/view/<?=$item['Service']['id'] ?>"><?=$item['Service']['title']?></a></li>
						<?php endforeach ?>
						
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