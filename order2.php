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
		  		<input type="text" name="name" class="form__input" placeholder="ФИО" value="" />
		  	</div>
		  	<div class="form__row">
		  		<input type="text" name="email" class="form__input" placeholder="Ваш e-mail" value="" />
		  	</div>
		  	<div class="form__row">
		  		<input type="text" name="phone" class="form__input" placeholder="Номер телефона" value="" />
		  	</div>
		  	<div class="form__row">
		  		<textarea name="text" class="form__textarea" placeholder="Укажите высоту лестницы, размер проема, бюджет, в который планируете уложиться и когда вам нужна будет лестница."></textarea>
		  	</div>
		  	<div class="form__row">
		  		<label class="form__file">
		  			<div class="form__file-input">
		  				<input type="file" class="form__input" />
		  			</div>
		  			Прикрепить файл
		  		</label>
		  	</div>
		  	<div class="form__row">
		  		<div class="checkout-prop">
		  			<div class="checkout-prop__toggle-down">Вы можете указать параметры, форму лестницы</div>
		  			<div class="checkout-prop__toggle-up">Вы можете не указать параметры, форму лестницы</div>
		  			<div class="checkout-prop__text">Информация о дополнительных параметрах и формах лестницы облегчит первичный рассчет проекта и вы быстрее узнаете итоговую стоимость.</div>
		  			<div class="checkout-prop__content">
		  				Текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
		  			</div>
		  		</div>
		  	</div>
		  	<div class="form__btn-wrap">
		  		<button type="submit" class="form__btn">Отправить заявку</button>
		  	</div>
		  </form>

		</div>
		
<?php include('include/assets.php'); ?>

<script>
$(function() {
	var cl = 'checkout-prop_state_active';
	var $el = $('.checkout-prop');
	var $handle = $('.checkout-prop__toggle-up, .checkout-prop__toggle-down');
	var $content = $('.checkout-prop__content');
	$handle.click(function() {
		if ($el.hasClass(cl)) {
			$el.removeClass(cl);
			$content.slideUp(250);
		}
		else {
			$el.addClass(cl);
			$content.slideDown(250);
		}
	});
});
</script>

	</body>
</html>