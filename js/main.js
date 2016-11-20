$(function() {
	init_navi();
  init_scrolltop();
  init_map();
	init_slider();
});

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
	});
}

function init_scrolltop() {
  var $el = $('.page__up');
  $(document).on('scroll', function() {
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