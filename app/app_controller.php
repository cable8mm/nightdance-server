<?php

class AppController extends Controller
{
    public $layout = 'default';

    public $helpers = ['Javascript', 'Html', 'Time', 'Form', 'Session', 'Mae'];

    public $components = ['Auth', 'Session'];

    public function beforeFilter()
    {
        $this->Auth->userModel = 'Maestro';
    }

    protected function parameterCombined($name, $default = '')
    {
        $v = ! empty($this->params['named'][$name]) ? $this->params['named'][$name] : '';
        if (isset($this->params['url'][$name])) {
            $v = $this->params['url'][$name];
            unset($this->params['named'][$name]);
        }
        $v = empty($v) ? $default : $v;

        return $v;
    }
}
