<?php

class ApiEvent extends AppModel
{
    public $name = 'ApiEvent';

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $hasMany = [
        'ApiEventSubmit' => [
            'className' => 'ApiEventSubmit',
            'foreignKey' => 'api_event_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => 'created DESC',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => '',
        ],
    ];
}
