<?php

class NdCategory extends AppModel
{
    public $name = 'NdCategory';

    public $useTable = 'nd_category';

    public $primaryKey = 'category_id';

    public $order = 'NdCategory.category_id ASC';

    public $displayField = 'category_name';
}
