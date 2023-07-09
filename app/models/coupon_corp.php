<?php
class CouponCorp extends AppModel {
    var $name = 'CouponCorp';
	var $useTable = 'coupon_corp';
	var $primaryKey = 'corp_id';
	var $order = 'CouponCorp.corp_id DESC';
	var $displayField = 'corp_name';
}
?>