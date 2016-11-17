<!DOCTYPE html>
<html>
	<head>
<?php include('include/meta.php'); ?>
	</head>
	<body class="page page_color_white">
	
<?php include('include/header.php'); ?>

		<div class="center">
		<h1 class="page__title">Добавьте подарок</h1>

		  <form class="form">
        <div class="cart">
          <div class="cart__list">
            <div class="cart__item">
              <div class="clearfix">
                <div class="cart__item-preview">
                  <img src="/images/gift_1.jpg" alt="" />
                </div>
                <div class="cart__item-text">
                  <div class="cart__item-title">Правильная кисть для окраски лестницы маслом</div>
                  <div class="cart__item-action">
                    <a href="#" class="btn">В корзину</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cart__item">
              <div class="clearfix">
                <div class="cart__item-preview">
                  <img src="/images/gift_2.jpg" alt="" />
                </div>
                <div class="cart__item-text">
                  <div class="cart__item-title">Гранола, премиум мюсли</div>
                  <div class="cart__item-action">
                    <a href="#" class="btn">В корзину</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cart__form">
            <div class="form__row">
              <textarea name="text" class="form__textarea form__textarea_height_100" placeholder="Комментарий к заказу"></textarea>
            </div>
          </div>
          <div class="cart__total">
            Итого: <span class="cart__total-value">234 900 Р</span>
          </div>
        </div>
		  	<div class="form__btn-wrap">
		  		<button type="submit" class="form__btn">Перейти к оформлению</button>
		  	</div>
		  </form>

		</div>
		
<?php include('include/assets.php'); ?>

	</body>
</html>