<?php
class ApiEvent extends AppModel {

	var $name = 'ApiEvent';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'ApiEventSubmit' => array(
			'className' => 'ApiEventSubmit',
			'foreignKey' => 'api_event_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'created DESC',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>