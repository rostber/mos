<!DOCTYPE html>
<html>
	<head>
<?php include('include/meta.php'); ?>
	</head>
	<body class="page page_color_white">
	
<?php include('include/header.php'); ?>

		<div class="center">
		<h1 class="page__title">Оформление заказа</h1>

		  <form class="form">
		  	<div class="form__title">Введите ваши контактные данные</div>
		  	<div class="form__row">
		  		<input type="text" name="phone" class="form__input" placeholder="Контактный телефон" value="" />
		  	</div>
		  	<div class="form__row">
		  		<input type="text" name="last_name" class="form__input" placeholder="Фамилия" value="" />
		  	</div>
		  	<div class="form__row">
		  		<input type="text" name="first_name" class="form__input" placeholder="Имя" value="" />
		  	</div>
		  	<div class="form__row">
		  		<input type="text" name="email" class="form__input" placeholder="E-mail" value="" />
		  	</div>
		  	<div class="form__delimeter">&nbsp;</div>
		  	<div class="form__row form__row_margin_14">
		  		<div class="form__label">Выберите способ доставки</div>
		  		<div class="form__text">Оплата доставки осуществляется при получении лестницы.</div>
		  	</div>
		  	<div class="form__row form__row_margin_13">
		  		<label class="form__radio"><input type="radio" name="delavery" checked="checked" class="form__radio-input" value="1"><span class="form__radio-icon"></span>Доставка по Москве</label>
		  	</div>
		  	<div class="form__row form__row_margin_13">
		  		<label class="form__radio"><input type="radio" name="delavery" class="form__radio-input" value="2"><span class="form__radio-icon"></span>Доставка по Подмосковью</label>
		  	</div>
		  	<div class="form__row form__row_margin_13">
		  		<label class="form__radio"><input type="radio" name="delavery" class="form__radio-input" value="3"><span class="form__radio-icon"></span>Доставка в регионы Транспортной компанией</label>
		  	</div>
		  	<div class="form__row form__row_margin_62">
		  		<label class="form__radio"><input type="radio" name="delavery" class="form__radio-input" value="3"><span class="form__radio-icon"></span>Самовывоз</label>
		  	</div>
		  	<div class="form__btn-wrap">
		  		<button type="submit" class="form__btn">Перейти к оплате заказа</button>
		  	</div>
		  </form>

		</div>
		
<?php include('include/assets.php'); ?>

	</body>
</html>