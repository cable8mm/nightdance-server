<?php

class NdPayment extends AppModel
{
    public $name = 'NdPayment';

    public $useTable = 'nd_payment';

    public $primaryKey = 'payment_id';

    public $order = 'NdPayment.payment_id DESC';

    public $displayField = 'payment_name';
}
