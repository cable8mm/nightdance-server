<?php

class NdUserAddition extends AppModel
{
    public $name = 'NdUserAddition';

    public $useTable = 'nd_user_addtion';

    public $primaryKey = 'user_id';

    public $order = 'NdUserAddition.user_id DESC';
}
