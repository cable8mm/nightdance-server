<?php

class NdStat extends AppModel
{
    public $name = 'NdStat';

    //	var $useTable = 'nd_post';
    public $primaryKey = 'stats_id';

    public $order = 'NdStat.stats_id DESC';
    //	var $displayField = 'post_title';

    //	var $belongsTo = array('Topic');

    public $belongsTo = ['NdUser' => ['foreignKey' => 'user_id']];

    public function beforeSave()
    {
        if (isset($this->data['NdStat']['hour']) && isset($this->data['NdStat']['meridian']) && $this->data['NdStat']['hour'] != 12 && $this->data['NdStat']['meridian'] == 'pm') {
            $this->data['NdStat']['hour'] = $this->data['NdStat']['hour'] + 12;
        }
        if (isset($this->data['NdStat']['hour']) && isset($this->data['NdStat']['meridian']) && $this->data['NdStat']['hour'] == 12 && $this->data['NdStat']['meridian'] == 'am') {
            $this->data['NdStat']['hour'] = '00';
        }
        $statsTime = $this->data['NdStat']['stats_time'];
        unset($this->data['NdStat']['stats_time']);
        $this->data['NdStat']['stats_time'] = mktime($statsTime['hour'], $statsTime['min'], 0, $statsTime['month'], $statsTime['day'], $statsTime['year']);

        return true;
    }
}
