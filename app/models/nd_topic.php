<?php
class NdTopic extends AppModel {
    var $name = 'NdTopic';
	var $useTable = 'nd_topic';
	var $primaryKey = 'topic_id';
	var $order = 'NdTopic.topic_id DESC';
	var $displayField = 'topic_title';

	var $belongsTo = array('NdForum' => array('foreignKey'=>'forum_id'));
	var $hasMany = array('NdPost' => array('foreignKey'=>'topic_id'));
}

?>