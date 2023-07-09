<?php
class NdCategory extends AppModel {
    var $name = 'NdCategory';
	var $useTable = 'nd_category';
	var $primaryKey = 'category_id';
	var $order = 'NdCategory.category_id ASC';
	var $displayField = 'category_name';
}

?>