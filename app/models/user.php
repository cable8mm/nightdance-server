<?php

class User extends AppModel
{
    public $name = 'User';

    public $belongsTo = ['Group'];
}
