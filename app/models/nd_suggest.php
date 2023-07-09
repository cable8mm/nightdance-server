<?php
class NdSuggest extends AppModel {
    var $name = 'NdSuggest';
	var $useTable = 'nd_suggest';
	var $primaryKey = 'suggest_id';
	var $order = 'NdSuggest.suggest_id DESC';
	var $displayField = 'suggest_title';
}

?>