<!DOCTYPE html>
<html>
	<head>
<?php include('include/meta.php'); ?>
	</head>
	<body class="page page_color_white">
	
<?php include('include/header.php'); ?>

		<div class="center">
		<h1 class="page__title">Заказ расчёта</h1>

		  <form class="form">
		  	<div class="form__title">Введите ваши контактные данные</div>
		  	<div class="form__row">
		  		<input type="text" name="email" class="form__input" placeholder="Ваш e-mail" value="" />
		  	</div>
		  	<div class="form__row">
		  		<input type="text" name="phone" class="form__input" placeholder="Номер телефона" value="" />
		  	</div>
		  	<div class="form__row">
		  		<textarea name="text" class="form__textarea" placeholder="Укажите высоту лестницы, размер проема, бюджет, в который планируете уложиться и когда вам нужна будет лестница."></textarea>
		  	</div>
		  	<div class="form__btn-wrap">
		  		<button type="submit" class="form__btn">Отправить заявку</button>
		  	</div>
		  </form>

		</div>
		
<?php include('include/assets.php'); ?>

	</body>
</html>