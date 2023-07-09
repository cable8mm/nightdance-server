<?php
class NdMgenre extends AppModel {
    var $name = 'NdMgenre';
	var $useTable = 'nd_mgenre';
	var $primaryKey = 'mgenre_id';
	var $order = 'NdMgenre.mgenre_id ASC';
	var $displayField = 'mgenre_name';
}

?>