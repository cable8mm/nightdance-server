<?php
class NdUser extends AppModel {
    var $name = 'NdUser';
	var $useTable = 'nd_user';
	var $primaryKey = 'user_id';
	var $order = 'NdUser.user_id DESC';
	var $displayField = 'nickname';

	var $hasOne = array(
		'NdUserAddition' => array(
			'foreignKey' => 'user_id'
		)
	);
}
?>