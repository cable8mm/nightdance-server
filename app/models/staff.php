<?php
class Staff extends AppModel {
    var $name = 'Staff';
	var $belongsTo = array('StaffPosition');
}

?>