<!DOCTYPE html>
<html>
	<head>
<?php include('include/meta.php'); ?>
	</head>
	<body class="page">
	
<?php include('include/header.php'); ?>

		<div class="center">
      <h1 class="page__title">П-образные лестницы с поворотом на 180°</h1>
      <div class="post post_type_goods">
      	<p>Выбирая лестницу для загородного дома или дачи, необходимо помнить, что конструкция лестницы должна соответствовать интерьеру и размерам помещения. П-образные лестницы с забежными ступенями или с площадкой оптимально подойдут для установки в небольшие проемы.</p>
      </div>
    </div>
    
		<div class="filter">
			<div class="center">
				<div class="clearfix">
					<div class="filter__left">
						<a href="#" class="filter__link filter__link_state_current">Все</a>
						<a href="#" class="filter__link">Готовые</a>
						<a href="#" class="filter__link">На заказ</a>
					</div>
					<div class="filter__right">
						<span class="filter__toggle">&nbsp;</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="center">
			<div class="goods">
				<?php for($i=0;$i<10;$i++): ?>
					<div class="goods__item">
						<div class="goods__label">Комфортная ступень!</div>
						<div class="goods__preview">
							<ul class="bxslider goods__preview-slider">
								<li class="goods__preview-item">
									<a href="#" class="goods__preview-link">
										<img src="/images/blog_article.jpg" alt="" class="goods__preview-img" />
									</a>
								</li>
								<li class="goods__preview-item">
									<a href="#" class="goods__preview-link">
										<img src="/images/blog_article.jpg" alt="" class="goods__preview-img" />
									</a>
								</li>
							</ul>
						</div>
						<a class="goods__title" href="#">Деревянная лестница PROFI&HOBBY «К-007М/1»</a>
						<div class="goods__info">
							<div class="clearfix">
								<div class="goods__info-cost">
									<span class="goods__info-value">99 000 Р</span>
									<span class="goods__info-old-value">111 000 Р</span>
								</div>
								<div class="goods__info-action">
									<a href="#" class="btn btn_color_red">Купить</a>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
    <a href="#" class="page__more">Показать еще 10 товаров</a>
    
    <div class="callback">
      <div class="center">
        <div class="callback__label">
          Сложно выбрать лестницу? Звоните!<br />
          8 495 120-16-37
        </div>
        <div class="callback__action">
          <a href="#" class="btn btn_display_block btn_color_b-white-red btn_height_48">Онлайн-заказ</a>
        </div>
      </div>
    </div>
    
    <div class="goods-slider">
      <ul class="bxslider goods-slider__content" data-class="bx-wrapper_color_white">
        <li class="goods-slider__item">
          <div class="goods-slider__item-inside">
            <div class="goods-slider__ico goods-slider__ico_type_plane">&nbsp;</div>
            <div class="goods-slider__title">Доставка в регионы РФ</div>
            <div class="goods-slider__sub-title">узнать стоимость</div>
          </div>
        </li>
        <li class="goods-slider__item">
          <div class="goods-slider__item-inside">
            <div class="goods-slider__ico goods-slider__ico_type_plane">&nbsp;</div>
            <div class="goods-slider__title">Доставка в регионы РФ</div>
            <div class="goods-slider__sub-title">узнать стоимость</div>
          </div>
        </li>
        <li class="goods-slider__item">
          <div class="goods-slider__item-inside">
            <div class="goods-slider__ico goods-slider__ico_type_plane">&nbsp;</div>
            <div class="goods-slider__title">Доставка в регионы РФ</div>
            <div class="goods-slider__sub-title">узнать стоимость</div>
          </div>
        </li>
      </ul>
    </div>
    
    <div class="home-main">
      <div class="home-main__list">
        <div class="center">
          <div class="home-main__row">
            <div class="home-main__label">Адрес офиса</div>
            <div class="home-main__value">Москва, Дмитровское шоссе, 157, строение 4</div>
          </div>
          <div class="home-main__row">
            <div class="home-main__label">Телефон</div>
            <div class="home-main__value">8 495 120-16-37</div>
          </div>
          <div class="home-main__row">
            <div class="home-main__label">E-mail</div>
            <div class="home-main__value">zakaz@moslest.ru</div>
          </div>
        </div>
      </div>
    </div>
    
<?php include('include/footer.php'); ?>

<?php include('include/assets.php'); ?>

	</body>
</html>