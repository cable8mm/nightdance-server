<?php
class NdPayment extends AppModel {
    var $name = 'NdPayment';
	var $useTable = 'nd_payment';
	var $primaryKey = 'payment_id';
	var $order = 'NdPayment.payment_id DESC';
	var $displayField = 'payment_name';
}

?>