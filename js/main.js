$(function() {
	init_navi();
});

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