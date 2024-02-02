<?php

class CouponCorp extends AppModel
{
    public $name = 'CouponCorp';

    public $useTable = 'coupon_corp';

    public $primaryKey = 'corp_id';

    public $order = 'CouponCorp.corp_id DESC';

    public $displayField = 'corp_name';
}
