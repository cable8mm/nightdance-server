<?php

class NdNcashLog extends AppModel
{
    public $name = 'NdNcashLog';

    public $useTable = 'nd_ncash_log';

    public $primaryKey = 'ncash_log_id';

    public $order = 'NdNcashLog.ncash_log_id DESC';

    public $displayField = 'ncash_log_pgcode';

    public $belongsTo = [
        'NdUser' => ['foreignKey' => 'user_id'],
        'NdPayment' => ['foreignKey' => 'payment_id'],
    ];
}
