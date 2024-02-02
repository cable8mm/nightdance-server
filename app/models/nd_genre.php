<?php

class NdGenre extends AppModel
{
    public $name = 'NdGenre';

    public $useTable = 'nd_genre';

    public $primaryKey = 'genre_id';

    public $order = 'NdGenre.genre_id ASC';

    public $displayField = 'genre_name';
}
