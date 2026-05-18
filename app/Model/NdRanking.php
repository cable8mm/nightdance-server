<?php

class NdRanking extends AppModel
{
    public $name = 'NdRanking';

    public $useTable = 'nd_ranking';

    public $primaryKey = 'ranking_id';

    public $order = 'NdRanking.ranking_id DESC';

    public $belongsTo = [
        'NdRank' => ['foreignKey' => 'rank_id'],
        'NdClip' => ['foreignKey' => 'clip_id'],
    ];
}
