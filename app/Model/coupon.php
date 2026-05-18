<?php

class Coupon extends AppModel
{
    public $name = 'Coupon';

    public $useTable = 'coupon';

    public $primaryKey = 'coupon_id';

    public $order = 'Coupon.coupon_id DESC';

    public $displayField = 'coupon_name';
}
