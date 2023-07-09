<?php
class NdRank extends AppModel {
    var $name = 'NdRank';
	var $useTable = 'nd_rank';
	var $primaryKey = 'rank_id';
	var $order = 'NdRank.rank_id DESC';
}
?>