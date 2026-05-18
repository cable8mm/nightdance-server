<?php

class NdMusic extends AppModel
{
    public $name = 'NdMusic';

    public $useTable = 'nd_music';

    public $primaryKey = 'music_id';

    public $order = 'NdMusic.music_id DESC';

    public $displayField = 'music_title';

    public $belongsTo = [
        'NdMgenre' => [
            'foreignKey' => 'mgenre_id',
        ],
    ];
}
