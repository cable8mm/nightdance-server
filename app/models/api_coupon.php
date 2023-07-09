<?php
class ApiCoupon extends AppModel {

	var $name = 'ApiCoupon';
	var $order = 'ApiCoupon.id DESC';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'ApiCouponGroup' => array(
			'className' => 'ApiCouponGroup',
			'foreignKey' => 'api_coupon_group_id',
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