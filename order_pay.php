<!DOCTYPE html>
<html>
	<head>
<?php include('include/meta.php'); ?>
	</head>
	<body class="page page_color_white">
	
<?php include('include/header.php'); ?>

		<div class="center">
		<h1 class="page__title">Оплата заказа</h1>

		  <form class="form">
        <div class="form__row form__row_margin_13">&nbsp;</div>
		  	<div class="form__row form__row_margin_13">
		  		<label class="form__radio"><input type="radio" name="pay" checked="checked" class="form__radio-input" value="1"><span class="form__radio-icon"></span>Наличные</label>
		  	</div>
		  	<div class="form__row form__row_margin_13">
		  		<label class="form__radio"><input type="radio" name="pay" class="form__radio-input" value="2"><span class="form__radio-icon"></span>Выставить счет (для юридических лиц)</label>
		  	</div>
		  	<div class="form__row form__row_margin_13">
		  		<label class="form__radio"><input type="radio" name="pay" class="form__radio-input" value="3"><span class="form__radio-icon"></span>Выставить счет для оплаты в любом коммерческом банке (для физических лиц)</label>
		  	</div>
		  	<div class="form__row form__row_margin_62">
		  		<label class="form__radio"><input type="radio" name="pay" class="form__radio-input" value="3"><span class="form__radio-icon"></span>Самовывоз</label>
		  	</div>
		  	<div class="form__btn-wrap">
		  		<button type="submit" class="form__btn">Банковская карта</button>
		  	</div>
		  </form>

		</div>
		
<?php include('include/assets.php'); ?>

	</body>
</html>