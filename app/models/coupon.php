<?php
class Coupon extends AppModel {
    var $name = 'Coupon';
	var $useTable = 'coupon';
	var $primaryKey = 'coupon_id';
	var $order = 'Coupon.coupon_id DESC';
	var $displayField = 'coupon_name';
}

?>