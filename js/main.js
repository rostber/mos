$(function() {
	init_navi();
  init_scrolltop();
  init_map();
	init_slider();
  init_ui_slider();
  init_filter();
});

function init_filter() {
  $('.js-filter-handle-show').click(function() {
    $('.js-filter').show();
  });
  $('.js-filter-handle-hide').click(function() {
    $('.js-filter').hide();
  });
}

function init_ui_slider() {
  $('.js-slider').each(function() {
    var $el = $(this);
    var min = $el.data('min');
    var max = $el.data('max');
    var min_val = $el.find('.js-slider-min').val();
    var max_val = $el.find('.js-slider-max').val();
    $el.slider({
      range: true,
      min: min,
      max: max,
      values: [ min_val, max_val ],
      slide: function( event, ui ) {
        $el.find('.js-slider-min').val( ui.values[ 0 ] );
        $el.find('.js-slider-max').val( ui.values[ 1 ] );
        $el.find('.ui-slider-handle').eq(0).html('<span class="ui-slider-handle-cost">'+ui.values[ 0 ]+'&nbsp;Р</span>');
        $el.find('.ui-slider-handle').eq(1).html('<span class="ui-slider-handle-cost">'+ui.values[ 1 ]+'&nbsp;Р</span>');
      },
      create: function( event, ui ) {
        $el.find('.ui-slider-handle').eq(0).html('<span class="ui-slider-handle-cost">'+min_val+'&nbsp;Р</span>');
        $el.find('.ui-slider-handle').eq(1).html('<span class="ui-slider-handle-cost">'+max_val+'&nbsp;Р</span>');
      }
    });
  });
}

function init_slider() {
	$('.bxslider').each(function() {
    var $el = $(this);
    var options = {
      controls: false
    };
    if ($el.data('class')) options.wrapperClass = 'bx-wrapper ' + $el.data('class');
    $el.bxSlider(options);
  });
}

function init_map() {
	$('.map__toggle').click(function() {
		$('.map__content').slideToggle(250);
		$('html, body').delay(100).animate({scrollTop: $('.map__content').offset().top}, 250);
	});
}

function init_scrolltop() {
  var $el = $('.page__up');
  $(document).on('scroll.top', function() {
    var top = $(document).scrollTop();
    if (top > 100) {
      if (!$el.is(':visible')) $el.stop().fadeIn(250);
    }
    else {
      if ($el.is(':visible')) $el.stop().fadeOut(250);
    }
  });
  $el.on('click', function() {
    $('html, body').animate({scrollTop: 0}, 250);
  });
}

function init_navi() {
  var $block = $('.js-navi-block');
  var cl = 'navi_state_show';
  $('.js-navi-show').click(function() {
    $block.addClass(cl);
  });
  $('.js-navi-hide').click(function() {
    $block.removeClass(cl);
  });
}