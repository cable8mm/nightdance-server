<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title><?php echo Configure::read('Settings.title')?> : <?php echo $title_for_layout; ?></title>
	<?php
		echo $html->meta('icon');
		echo $html->css('maestro');
		echo $html->css('superfish/superfish');
		echo $javascript->link('jquery-1.3.2.min');
		echo $javascript->link('jquery.hoverIntent.minified');
		echo $javascript->link('superfish');
		echo $javascript->link('swfobject');
		echo $javascript->link('jquery.uploadify.v2.1.0');
		echo $javascript->link('jquery.json.js');
		echo $scripts_for_layout;
	?>
<script type="text/javascript"> 
$(document).ready(function(){ 
	$("ul.sf-menu").superfish();
	$("A.popup").click(function(){
		var url = $(this).attr("href");
		var win=window.open(url,'bbuilder','width=897, statusbar=no, toolbar=no,scrollbars=yes');
		return false;
	});
	$("INPUT.uploadify").uploadify({
		'uploader'  : '/files/uploadify.swf',
		'script'    : '/maestros/upload',
		'cancelImg' : '/img/cancel.png',
		'auto'      : true,
		'multi' : false,
		'buttonText' : 'Image Upload',
		'scriptData' : {'prefix' : 'http://adimg.adoneclick.com/c/'},
		'onComplete': function(e, q, f, r, d) {
			var response = $.parseJSON(r);
			$(e.target).val(response.name);
		}
	});
	$("INPUT.uploadify_adimg").uploadify({
		'uploader'  : '/files/uploadify.swf',
		'script'    : '/maestros/upload_adimg',
		'cancelImg' : '/img/cancel.png',
		'auto'      : true,
		'multi' : false,
		'buttonText' : 'Image Upload',
		'scriptData' : {'prefix' : 'http://adimg.adoneclick.com/f/2009/'},
		'onComplete': function(e, q, f, r, d) {
			var response = $.parseJSON(r);
			$(e.target).val(response.name);
		}
	});
});
</script>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?=$html->image(Configure::read('Settings.logo-small')) ?> <a href="/"><?php echo Configure::read('Settings.title')?> : <?php echo Configure::read('Settings.description')?></a></h1>
			<?php if($session->read('Auth.Maestro')) echo $mae->showTreeMenus() ?>
		</div>
		<div id="content">
			<?php
				if ($session->check('Message.flash')):
						$session->flash();
				endif;
			?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			Copyright &copy; <?php echo $html->link(Configure::read('Settings.copyright'), Configure::read('Settings.site_url')); ?> /
			<?php echo 'Powered By <a href="http://www.fastcode.net">Maestros v0.9 - Fastcode Framework</a>' ?> extends SamguLee (cable8mm@gmail.com)
		</div>
	</div>
</body>
</html>