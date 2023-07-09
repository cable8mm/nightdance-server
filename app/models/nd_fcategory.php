<?php
class NdFcategory extends AppModel {
    var $name = 'NdFcategory';
	var $useTable = 'nd_fcategory';
	var $primaryKey = 'fcategory_id';
	var $order = 'NdFcategory.fcategory_id DESC';
	var $belongsTo = array('NdForum' => array('foreignKey'=>'forum_id'));
}

?>