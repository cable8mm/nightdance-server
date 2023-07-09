<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title><?php __(Configure::read('Settings.title'))?> : <?php __($title_for_layout); ?></title>
<?php
	echo $html->meta('icon');

		echo $html->css('cake.generic');
?>
<?=$javascript->link('http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js') ?>
<?php
	echo $scripts_for_layout;
?>
<style type="text/css">
/* Navigation */
.nav, .nav ul { 
	list-style: none;
	margin: 0;
	padding: 0;
}

.nav {
  font-family: 돋움, Arial, Helvetica, sans-serif;
  z-index: 100;
  position: relative;
}
.nav li {
  float: left;
  margin: 0;
  padding: 0;
  position: relative;
}
.nav li a, .nav li a:link, .nav li a:active, .nav li a:visited {
  font: normal 12px 돋움, Arial, Helvetica, sans-serif;
  background: #c4dbee;
  color: #000;
  display: block;
  padding: 10px 9px;
  text-transform: lowercase;
  text-decoration: none;
}

.nav li a:hover {
  background: #fff;
  color: #000;

}
#nav-one li:hover a, 
#nav-one li.sfHover a {
  background: #fff;
  color: #000;
}
#nav-one li:hover ul a, 
#nav-one li.sfHover ul a {
  background: #0d141f;
  color: #959595;
}
#nav-one li:hover ul a:hover, 
#nav-one li.sfHover ul a:hover {
  background: #5C81AE;
  color: #000;
}

.nav ul {
  background: #c4eeee;
  border-bottom: 1px solid #000;
  list-style: none;
  margin: 0;
  width: 160px;
  position: absolute;
  top: -999em;
  left: -1px;
}
.nav li:hover ul,
.nav li.sfHover ul {
  top: 32px;
}
.nav ul li {
  border: 0;
  float: none;
}
.nav ul a {
  border: 1px solid #000;
  border-bottom: 0;
  padding-right: 20px;
  width: 140px;
  white-space: nowrap;
}
.nav ul a:hover {
  background: #c4eeee;
  color: #000;
}
</style>
<script type="text/javascript">
$(document).ready(function(){    $("#nav-one li").hover(        function(){ $("ul", this).fadeIn("fast"); },         function() { }     );    if (document.all) {        $("#nav-one li").hoverClass ("sfHover");    }}); $.fn.hoverClass = function(c) {    return this.each(function(){        $(this).hover(             function() { $(this).addClass(c);  },            function() { $(this).removeClass(c); }        );    });};    

</script>

</head>
<body>
<?php echo $this->renderElement('admin/header'); ?>
<div id='container'>
<div id='content'>
<?php if ($session->check('Message.flash')):
	$session->flash();
endif;
echo $content_for_layout; ?>
</div>
		<div id="footer">
			Copyright &copy <?php echo $html->link(Configure::read('Settings.copyright'), Configure::read('Settings.site_url')); ?> /
			<?php echo 'Powered By Samgu.Lee (cable8mm@gmail.com)' ?>
		</div>
</div>
<?php echo $cakeDebug; ?>
</body>
</html>
