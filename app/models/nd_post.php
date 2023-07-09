<?php
class NdPost extends AppModel {
    var $name = 'NdPost';
	var $useTable = 'nd_post';
	var $primaryKey = 'post_id';
	var $order = 'NdPost.post_id DESC';
	var $displayField = 'post_title';

//	var $belongsTo = array('Topic');
}

?>