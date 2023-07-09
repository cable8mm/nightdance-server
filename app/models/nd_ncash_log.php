<?php
class NdNcashLog extends AppModel {
    var $name = 'NdNcashLog';
	var $useTable = 'nd_ncash_log';
	var $primaryKey = 'ncash_log_id';
	var $order = 'NdNcashLog.ncash_log_id DESC';
	var $displayField = 'ncash_log_pgcode';
	
	var $belongsTo = array(
		'NdUser'=>array('foreignKey'=>'user_id'),
		'NdPayment'=>array('foreignKey'=>'payment_id'),
	);
}

?>