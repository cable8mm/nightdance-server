<?php
class ApiEventSubmit extends AppModel {

	var $name = 'ApiEventSubmit';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'ApiEvent' => array(
			'className' => 'ApiEvent',
			'foreignKey' => 'api_event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ApiUser' => array(
			'className' => 'ApiUser',
			'foreignKey' => 'api_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>