<?php

class ApiEventSubmit extends AppModel
{
    public $name = 'ApiEventSubmit';

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = [
        'ApiEvent' => [
            'className' => 'ApiEvent',
            'foreignKey' => 'api_event_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'ApiUser' => [
            'className' => 'ApiUser',
            'foreignKey' => 'api_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
