<?php
class Maestro extends AppModel {

	var $name = 'Maestro';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'MaestroGroup' => array(
			'className' => 'MaestroGroup',
			'foreignKey' => 'maestro_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>