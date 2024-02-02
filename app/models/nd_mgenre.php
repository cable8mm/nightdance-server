<?php

class NdMgenre extends AppModel
{
    public $name = 'NdMgenre';

    public $useTable = 'nd_mgenre';

    public $primaryKey = 'mgenre_id';

    public $order = 'NdMgenre.mgenre_id ASC';

    public $displayField = 'mgenre_name';
}
