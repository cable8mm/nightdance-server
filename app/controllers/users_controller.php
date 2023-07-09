<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $scaffold;

	function beforeFilter() {
		$this->Auth->allow('add');
	}

	function login() {
	    //Auth Magic
	    $this->layout = 'default';
	}
	 
	function logout() {
	    //Leave empty for now.
	}
}
?>