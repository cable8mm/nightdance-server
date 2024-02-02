<?php

/* SVN FILE: $Id: i18n.php 7945 2008-12-19 02:16:01Z gwoo $ */
/*i18n schema generated on: 2007-11-25 07:11:25 : 1196004805*/
/**
 * This is i18n Schema file
 *
 * Use it to configure database for i18n
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 *
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @since         CakePHP(tm) v 0.2.9
 *
 * @version       $Revision: 7945 $
 *
 * @modifiedby    $LastChangedBy: gwoo $
 *
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 *
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/*
 *
 * Using the Schema command line utility
 * cake schema run create i18n
 *
 */
class i18nSchema extends CakeSchema
{
    public $name = 'i18n';

    public function before($event = [])
    {
        return true;
    }

    public function after($event = [])
    {
    }

    public $i18n = [
        'id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'],
        'locale' => ['type' => 'string', 'null' => false, 'length' => 6, 'key' => 'index'],
        'model' => ['type' => 'string', 'null' => false, 'key' => 'index'],
        'foreign_key' => ['type' => 'integer', 'null' => false, 'length' => 10, 'key' => 'index'],
        'field' => ['type' => 'string', 'null' => false, 'key' => 'index'],
        'content' => ['type' => 'text', 'null' => true, 'default' => null],
        'indexes' => ['PRIMARY' => ['column' => 'id', 'unique' => 1], 'locale' => ['column' => 'locale', 'unique' => 0], 'model' => ['column' => 'model', 'unique' => 0], 'row_id' => ['column' => 'foreign_key', 'unique' => 0], 'field' => ['column' => 'field', 'unique' => 0]],
    ];
}
