<?php

class NdSuggest extends AppModel
{
    public $name = 'NdSuggest';

    public $useTable = 'nd_suggest';

    public $primaryKey = 'suggest_id';

    public $order = 'NdSuggest.suggest_id DESC';

    public $displayField = 'suggest_title';
}
