<?php

/* SVN FILE: $Id: sessions.php 7945 2008-12-19 02:16:01Z gwoo $ */
/*Sessions schema generated on: 2007-11-25 07:11:54 : 1196004714*/
/**
 * This is Sessions Schema file
 *
 * Use it to configure database for Sessions
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
 * cake schema run create Sessions
 *
 */
class SessionsSchema extends CakeSchema
{
    public $name = 'Sessions';

    public function before($event = [])
    {
        return true;
    }

    public function after($event = [])
    {
    }

    public $cake_sessions = [
        'id' => ['type' => 'string', 'null' => false, 'key' => 'primary'],
        'data' => ['type' => 'text', 'null' => true, 'default' => null],
        'expires' => ['type' => 'integer', 'null' => true, 'default' => null],
        'indexes' => ['PRIMARY' => ['column' => 'id', 'unique' => 1]],
    ];
}
