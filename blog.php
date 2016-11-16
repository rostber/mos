<!DOCTYPE html>
<html>
	<head>
<?php include('include/meta.php'); ?>
	</head>
	<body class="page">
	
<?php include('include/header.php'); ?>

		<div class="center">
		<h1 class="page__title">Блог</h1>

		  <div class="blog">
		  	<div class="blog__list">
		  		<?php for($i=1;$i<=3;$i++): ?>
		  			<div class="blog__item">
		  				<div class="blog__date">30 сентября 2015</div>
		  				<div class="blog__title">Лестница для прогрессивного офиса!</div>
		  				<div class="blog__text">Однажды в Августе в нашу компанию обратилось всем известное маркетинговое агентство PROGRESSION для практической реализации дизайн проекта современной лестницы для офиса. Гении маркетинга и рекламы открывали свой новый, стильный и уютный офис, где каждый квадратный метр площади стилистически</div>
						<div class="blog__more">
							<a href="#" class="blog__link">Читать далее</a>
						</div>
					</div>
		  		<?php endfor; ?>
		  	</div>
		  </div>

		</div>
		
<?php include('include/assets.php'); ?>

	</body>
</html>