<?php
class NdSuggestsController extends AppController {

	var $name = 'NdSuggests';
	var $scaffold;

	public function beforeFilter() {
		if($this->action == 'index') {
			unset($this->NdSuggest->_schema['suggest_text']);
		}
		parent::beforeFilter();
	}
}
?>