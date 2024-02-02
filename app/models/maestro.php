<?php

class Maestro extends AppModel
{
    public $name = 'Maestro';

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = [
        'MaestroGroup' => [
            'className' => 'MaestroGroup',
            'foreignKey' => 'maestro_group_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
