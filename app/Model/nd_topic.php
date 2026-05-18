<?php

class NdTopic extends AppModel
{
    public $name = 'NdTopic';

    public $useTable = 'nd_topic';

    public $primaryKey = 'topic_id';

    public $order = 'NdTopic.topic_id DESC';

    public $displayField = 'topic_title';

    public $belongsTo = ['NdForum' => ['foreignKey' => 'forum_id']];

    public $hasMany = ['NdPost' => ['foreignKey' => 'topic_id']];
}
