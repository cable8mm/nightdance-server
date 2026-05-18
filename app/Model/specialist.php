<?php

class Specialist extends AppModel
{
    public $name = 'Specialist';

    public $order = 'Specialist.id DESC';

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = [
        'Branch' => [
            'className' => 'Branch',
            'foreignKey' => 'branch_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
