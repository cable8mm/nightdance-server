<?php
class NdClip extends AppModel {
    var $name = 'NdClip';
	var $useTable = 'nd_clip';
	var $primaryKey = 'clip_id';
	var $order = 'NdClip.clip_id DESC';
	var $displayField = 'clip_title';

	var $belongsTo = array(
		'NdGenre' => array(
			'foreignKey' => 'genre_id'
		),
		'NdCategory' => array(
			'foreignKey' => 'category_id'
		),
		'ClipCategory',
	);
	var $hasOne = array(
		'NdClipAddition' => array(
			'foreignKey' => 'clip_id'
		),
	);
}
?>