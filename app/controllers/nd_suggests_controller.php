<?php

class NdSuggestsController extends AppController
{
    public $name = 'NdSuggests';

    public $scaffold;

    public function beforeFilter()
    {
        if ($this->action == 'index') {
            unset($this->NdSuggest->_schema['suggest_text']);
        }
        parent::beforeFilter();
    }
}
