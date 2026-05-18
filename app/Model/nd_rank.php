<?php

class NdRank extends AppModel
{
    public $name = 'NdRank';

    public $useTable = 'nd_rank';

    public $primaryKey = 'rank_id';

    public $order = 'NdRank.rank_id DESC';
}
