<?php

class NdClip extends AppModel
{
    public $name = 'NdClip';

    public $useTable = 'nd_clip';

    public $primaryKey = 'clip_id';

    public $order = 'NdClip.clip_id DESC';

    public $displayField = 'clip_title';

    public $belongsTo = [
        'NdGenre' => [
            'foreignKey' => 'genre_id',
        ],
        'NdCategory' => [
            'foreignKey' => 'category_id',
        ],
        'ClipCategory',
    ];

    public $hasOne = [
        'NdClipAddition' => [
            'foreignKey' => 'clip_id',
        ],
    ];
}
