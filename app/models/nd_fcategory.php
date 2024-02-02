<?php

class NdFcategory extends AppModel
{
    public $name = 'NdFcategory';

    public $useTable = 'nd_fcategory';

    public $primaryKey = 'fcategory_id';

    public $order = 'NdFcategory.fcategory_id DESC';

    public $belongsTo = ['NdForum' => ['foreignKey' => 'forum_id']];
}
