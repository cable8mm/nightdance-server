<?php
class NdRanking extends AppModel {
    var $name = 'NdRanking';
	var $useTable = 'nd_ranking';
	var $primaryKey = 'ranking_id';
	var $order = 'NdRanking.ranking_id DESC';

	var $belongsTo = array(
		'NdRank'=>array('foreignKey'=>'rank_id'),
		'NdClip'=>array('foreignKey'=>'clip_id')
	);
}
?>