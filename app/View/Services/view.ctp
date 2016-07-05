<div class="m_left box">
	<img src="/img/logo.jpg">
	<a class="zapis" href="#">Записаться на прием</a>
	<span class="serv_des">Услуги </span>
	<ul class="serv_ul">
	<?php foreach($sidebar_services as $item): ?>
		<li>
			<a href="/services/view/<?=$item['Service']['id']?>"><?=$item['Service']['title']?></a>
		</li>
	<?php endforeach ?>
</div>
<div class="right_part">
	<div class="n_heading">
		<?=$data['Service']['title'] ?>
	</div>
	<div class="content">
		<img src="/img/service/thumbs/<?=$data['Service']['img'] ?>"/>
		<h3><?=$data['Service']['title'] ?></h3>
		<?=$data['Service']['body'] ?>	
		<div class="castilo box">
			<div class="up_castilo">
				<span class="fl_l">По любым возникшим вопросам звоните: </span>
				<span class="fl_r">+7 (7172) 78-38-02,  +7 778 999 87 41</span>
			</div>
			<div class="castilo_form">
				<span class="heading">Индивидуальная консультация!</span>
				<form>
					<input class="fl_l" type="text" placeholder="Введите свое имя">
					<input class="fl_r" type="text" placeholder="Введите свой номер +7...">	
					<button>Отправить заявку</button>
				</form>
			</div>
		</div>				
	</div>
</div>
<div class="clearfix"></div>