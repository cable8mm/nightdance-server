<?php

class NdPost extends AppModel
{
    public $name = 'NdPost';

    public $useTable = 'nd_post';

    public $primaryKey = 'post_id';

    public $order = 'NdPost.post_id DESC';

    public $displayField = 'post_title';

    //	var $belongsTo = array('Topic');
}
