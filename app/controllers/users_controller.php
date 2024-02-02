<?php

class UsersController extends AppController
{
    public $name = 'Users';

    public $scaffold;

    public function beforeFilter()
    {
        $this->Auth->allow('add');
    }

    public function login()
    {
        //Auth Magic
        $this->layout = 'default';
    }

    public function logout()
    {
        //Leave empty for now.
    }
}
