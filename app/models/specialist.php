<?php
class Specialist extends AppModel {

	var $name = 'Specialist';
	var $order = 'Specialist.id DESC';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Branch' => array(
			'className' => 'Branch',
			'foreignKey' => 'branch_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>