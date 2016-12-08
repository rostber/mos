<!DOCTYPE html>
<html>
	<head>
<?php include('include/meta.php'); ?>
	</head>
	<body class="page">
	
<?php include('include/header.php'); ?>

  <div class="paint">
    <div class="paint__head paint__head_type_buy">
      <div class="center">
        <div class="paint__head-inside">
          <h1 class="paint__head-title">Вызов профессионального замерщика лестниц</h1>
          <div class="paint__head-text">
          Закажите услугу замера и получите предложение с 3-5 возможными вариантами вашей лестницы.
          </div>
        </div>
      </div>
    </div>
    <div class="paint__content">
      <div class="center">
      
       <div class="paint__form">
        <div class="loc-legend">
          <div class="loc-legend__row">
            <div class="loc-legend__name loc-legend__name_color_1">Москва и до 10 км от МКАД</div>
            <div class="loc-legend__cost">2&nbsp;000</div>
          </div>
          <div class="loc-legend__row">
            <div class="loc-legend__name loc-legend__name_color_2">От 11 до 30 км от МКАД</div>
            <div class="loc-legend__cost">2&nbsp;300</div>
          </div>
          <div class="loc-legend__row">
            <div class="loc-legend__name loc-legend__name_color_3">От 31 до 40 км от МКАД</div>
            <div class="loc-legend__cost">2&nbsp;500</div>
          </div>
          <div class="loc-legend__row">
            <div class="loc-legend__name loc-legend__name_color_4">От 40 до 60 км от МКАД</div>
            <div class="loc-legend__cost">2&nbsp;800</div>
          </div>
          <div class="loc-legend__row">
            <div class="loc-legend__name loc-legend__name_color_5">От 60 до 80 км от МКАД</div>
            <div class="loc-legend__cost">3&nbsp;000</div>
          </div>
          <div class="loc-legend__row">
            <div class="loc-legend__name loc-legend__name_color_6">более 80 км</div>
            <div class="loc-legend__cost">3&nbsp;500</div>
          </div>
        </div>
       </div>
       
       <div class="paint__map" id="map"></div>
       
        <form class="form">
          <div class="form__title">Закажите замер лестницы сейчас и стоимость замера будет вычтена из сметы вашей будущей лестницы, или мы сделаембесплатнуюдоставку при заказе установки лестницы «под ключ»!</div>
          <div class="form__row">
            <input type="text" name="name" class="form__input" placeholder="ФИО" value="" />
          </div>
          <div class="form__row">
            <input type="text" name="email" class="form__input" placeholder="E-mail" value="" />
          </div>
          <div class="form__row">
            <input type="text" name="phone" class="form__input" placeholder="Номер телефона" value="" />
          </div>
          <div class="form__row">
            <textarea name="text" class="form__textarea" placeholder="Куда ехать"></textarea>
          </div>
          <div class="form__btn-wrap">
            <button type="submit" class="form__btn">Отправить заявку</button>
          </div>
        </form>
       
      </div>
    </div>
  </div>

<?php include('include/assets.php'); ?>
<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [55.751574, 37.573856],
            zoom: 9
        }, {
            searchControlProvider: 'yandex#search'
        }),
        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Это красивая метка'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'images/myIcon.gif',
            // Размеры метки.
            iconImageSize: [30, 42],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-3, -42]
        });

    myMap.geoObjects.add(myPlacemark);
});
</script>

	</body>
</html>