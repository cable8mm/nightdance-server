<?php

class Staff extends AppModel
{
    public $name = 'Staff';

    public $belongsTo = ['StaffPosition'];
}
