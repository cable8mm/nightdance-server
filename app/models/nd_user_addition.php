<?php
class NdUserAddition extends AppModel {
    var $name = 'NdUserAddition';
	var $useTable = 'nd_user_addtion';
	var $primaryKey = 'user_id';
	var $order = 'NdUserAddition.user_id DESC';
}
?>