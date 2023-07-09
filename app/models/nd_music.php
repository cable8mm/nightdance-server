<?php
class NdMusic extends AppModel {
    var $name = 'NdMusic';
	var $useTable = 'nd_music';
	var $primaryKey = 'music_id';
	var $order = 'NdMusic.music_id DESC';
	var $displayField = 'music_title';

	var $belongsTo = array(
		'NdMgenre' => array(
			'foreignKey' => 'mgenre_id'
		)
	);
}

?>