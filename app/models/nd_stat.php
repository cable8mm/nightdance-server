<?php
class NdStat extends AppModel {
    var $name = 'NdStat';
//	var $useTable = 'nd_post';
	var $primaryKey = 'stats_id';
	var $order = 'NdStat.stats_id DESC';
//	var $displayField = 'post_title';

//	var $belongsTo = array('Topic');
	
	var $belongsTo = array('NdUser'=>array('foreignKey'=>'user_id'));

	function beforeSave() {
		if (isset($this->data['NdStat']['hour']) && isset($this->data['NdStat']['meridian']) && $this->data['NdStat']['hour'] != 12 && 'pm' == $this->data['NdStat']['meridian']) {
			$this->data['NdStat']['hour'] = $this->data['NdStat']['hour'] + 12;
		}
		if (isset($this->data['NdStat']['hour']) && isset($this->data['NdStat']['meridian']) && $this->data['NdStat']['hour'] == 12 && 'am' == $this->data['NdStat']['meridian']) {
			$this->data['NdStat']['hour'] = '00';
		}
		$statsTime = $this->data['NdStat']['stats_time'];
		unset($this->data['NdStat']['stats_time']);
		$this->data['NdStat']['stats_time'] = mktime($statsTime['hour'], $statsTime['min'], 0, $statsTime['month'], $statsTime['day'], $statsTime['year']);
		return true;
	}
}

?>