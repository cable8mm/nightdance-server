<?php
class NdGenre extends AppModel {
    var $name = 'NdGenre';
	var $useTable = 'nd_genre';
	var $primaryKey = 'genre_id';
	var $order = 'NdGenre.genre_id ASC';
	var $displayField = 'genre_name';
}

?>