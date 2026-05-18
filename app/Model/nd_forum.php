<?php

class NdForum extends AppModel
{
    public $name = 'NdForum';

    public $useTable = 'nd_forum';

    public $primaryKey = 'forum_id';

    public $order = 'NdForum.forum_id DESC';

    public $displayField = 'forum_name';
}
