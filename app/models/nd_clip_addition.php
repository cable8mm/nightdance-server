<?php

class NdClipAddition extends AppModel
{
    public $name = 'NdClipAddition';

    public $useTable = 'nd_clip_addition';

    public $primaryKey = 'clip_id';

    public $order = 'NdClipAddition.clip_id DESC';
}
