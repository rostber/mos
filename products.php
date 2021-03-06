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
      <div class="filter__content">
        <div class="center">
          <div class="clearfix">
            <div class="filter__left">
              <a href="#" class="filter__link filter__link_state_current">Все</a>
              <a href="#" class="filter__link">Готовые</a>
              <a href="#" class="filter__link">На заказ</a>
            </div>
            <div class="filter__right">
              <span class="filter__toggle js-filter-handle-show">&nbsp;</span>
              
              <div class="modal js-filter">
                <div class="modal__overlay">&nbsp;</div>
                <div class="modal__body">
                  <div class="center">
                    <div class="modal__content">
                      <div class="modal__close js-filter-handle-hide">&nbsp;</div>
                      <div class="modal__title">Фильтрация результатов</div>
                      <form action="#" method="post" class="form">
                        <div class="modal__group">
                          <div class="modal__group-title">Цена</div>
                          <div class="filter-cost js-slider" data-min="0" data-max="50000">
                            <input type="hidden" name="min_val" class="js-slider-min" value="5000" />
                            <input type="hidden" name="max_val" class="js-slider-max" value="10000" />
                          </div>
                        </div>
                        <div class="modal__group">
                          <div class="modal__group-title">Показать</div>
                          <div class="filter">
                            <a href="#" class="filter__link filter__link_state_current">Все</a>
                            <a href="#" class="filter__link">Готовые</a>
                            <a href="#" class="filter__link">На заказ</a>
                          </div>
                        </div>
                        <div class="modal__group">
                          <div class="modal__group-title">Сортировка</div>
                          <label class="form__select">
                            <select name="type" class="form__select-field">
                              <option value="1">Вперемешку</option>
                            </select>
                          </label>
                        </div>
                        <div class="modal__action">
                          <button type="submit" class="btn btn_color_red btn_height_59 btn_width_whole">Применить</button>
                        </div>
                      </form>
                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
			</div>
		</div>
		
<?php include('include/products.php'); ?>
    
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