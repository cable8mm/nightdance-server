<?php

class MaeHelper extends AppHelper
{
    public $helpers = ['Html'];

    public function showTreeMenus($menus = null)
    {
        $out = [];
        if ($menus !== null) {

        }

        $out = '';
        $lists = Configure::read('Menus');
        $out .= $this->recursiveList($lists, 0);

        return $this->output($out);
    }

    private function recursiveList($lists, $depth)
    {
        $class = ($depth++ == 1) ? '' : ' class="sf-menu"';
        $out = '';
        $out .= '<ul'.$class.'>';
        foreach ($lists as $list) {
            $out .= '<li>';
            $out .= empty($list['url']) ? $list['title'] : $this->Html->link($list['title'], $list['url']);
            if (! empty($list['children'])) {
                $out .= $this->recursiveList($list['children'], $depth);
            }
            $out .= '</li>';
        }
        $out .= '</ul>';
        $depth--;

        return $out;
    }

    public function yesOrNo($i, $yesUrl = null, $noUrl = null)
    {
        $output = ($i == 1) ? 'Yes' : 'No';
        if ($i == 1) {
            $output = (is_null($yesUrl)) ? 'Yes' : $this->Html->link('Yes', $yesUrl);
        } else {
            $output = (is_null($noUrl)) ? 'No' : $this->Html->link('No', $noUrl);
        }

        return $this->output($output);
    }
}
