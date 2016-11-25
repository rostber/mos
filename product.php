<!DOCTYPE html>
<html>
	<head>
<?php include('include/meta.php'); ?>
	</head>
	<body class="page page_color_white">
	
<?php include('include/header.php'); ?>

<?php include('include/product-preview.php'); ?>
<?php include('include/product-info.php'); ?>
<?php include('include/product-content.php'); ?>
		
<?php include('include/footer.php'); ?>

<?php include('include/assets.php'); ?>

<script>
$(function() {
	
  var $navi = $('.prod-navi');
  var fClass = 'prod-navi_type_fixed';
  var $i = $('.prod-navi__item');
  var currentClass = 'prod-navi__item_state_current';
  
  var scrollTo = function(el) {
  	var $el = $( el );
  	if ($el.length) $('html, body').animate({scrollTop: $el.offset().top - 60}, 250);
	}
	
	var setCurrentI = function(top) {
		var index = 0;
		var currentIndex = 0;
		$i.removeClass(currentClass);
		while($i.length > index) {
			var $el = $( $i.eq(index).attr('href') );
			if (top >= $el.offset().top - 60) {
				currentIndex = index;
			}
			index++;
		}
		$i.eq(currentIndex).addClass(currentClass);
	}
  
  $(document).on('scroll.navi', function() {
    var top = $(document).scrollTop();
    if (top > $navi.offset().top) $navi.addClass(fClass);
    else $navi.removeClass(fClass);
    
    setCurrentI(top);
  });
  $i.on('click', function() {
  	scrollTo( $(this).attr('href') );
  });

});
</script>

	</body>
</html>