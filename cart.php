<!DOCTYPE html>
<html>
	<head>
<?php include('include/meta.php'); ?>
	</head>
	<body class="page page_color_white">
	
<?php include('include/header.php'); ?>

		<div class="center">
      <h1 class="page__title">
        Корзина
        <div class="rating rating_type_linline">
          <div class="clearfix">
            <div class="rating__value">3</div>
          </div>
        </div>
      </h1>

		  <form class="form">
        <div class="cart cart_type_products">
          <div class="cart__list">
            <?php for($i=0;$i<3;$i++): ?>
            <div class="cart__item">
              <div class="clearfix">
                <div class="cart__item-preview">
                  <img src="/images/product-cart.jpg" alt="" />
                </div>
                <div class="cart__item-text">
                  <div class="cart__item-delete">&nbsp;</div>
                  <div class="cart__item-title">Деревянная лестница PROFI&HOBBY«К-007М/1»</div>
                  <div class="cart__item-qnt">
<?php include('include/qnt.php'); ?>
                  </div>
                  <div class="cart__item-cost">27 900 Р</div>
                </div>
              </div>
            </div>
            <?php endfor; ?>
          </div>
          <div class="cart__total">
            Итого: <span class="cart__total-value">234 900 Р</span>
          </div>
        </div>
		  	<div class="form__btn-wrap">
		  		<button type="submit" class="form__btn">Перейти к выбору подарка</button>
		  	</div>
		  </form>

		</div>
		
<?php include('include/assets.php'); ?>

	</body>
</html>