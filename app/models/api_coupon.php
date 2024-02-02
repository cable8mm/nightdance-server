<?php

class ApiCoupon extends AppModel
{
    public $name = 'ApiCoupon';

    public $order = 'ApiCoupon.id DESC';

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = [
        'ApiCouponGroup' => [
            'className' => 'ApiCouponGroup',
            'foreignKey' => 'api_coupon_group_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'ApiUser' => [
            'className' => 'ApiUser',
            'foreignKey' => 'api_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
