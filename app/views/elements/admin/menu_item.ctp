<?php /* SVN FILE: $Id: menu_item.ctp,v 1.1 2008/11/21 08:59:48 mongrel Exp $ */ ?>
<?php
$title = $url = 'missing';
$htmlAttributes = array();
$confirmMessage = false;
$escapeTitle = true;
extract($data);
if ($url) {
	echo $html->link($title, $url, $htmlAttributes, $confirmMessage, $escapeTitle);
} else {
	echo $title;
}
?>
