<?php

class NdUser extends AppModel
{
    public $name = 'NdUser';

    public $useTable = 'nd_user';

    public $primaryKey = 'user_id';

    public $order = 'NdUser.user_id DESC';

    public $displayField = 'nickname';

    public $hasOne = [
        'NdUserAddition' => [
            'foreignKey' => 'user_id',
        ],
    ];
}
