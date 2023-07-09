<?php
class NdForum extends AppModel {
    var $name = 'NdForum';
	var $useTable = 'nd_forum';
	var $primaryKey = 'forum_id';
	var $order = 'NdForum.forum_id DESC';
	var $displayField = 'forum_name';
}

?>