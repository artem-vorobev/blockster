<?php
namespace blocks\test;

class Controller extends \blocks\Controller
{
    public function action_default($params)
    {
        if (core()->useCache('action_default', 90)) return;
        $this->view->data['time'] = time();
        $this->view->data['header'] = 'Header';
        return $this->view->render();
    }

    public function action_nesting_test($params)
    {
        core()->sendMessage('test', 'setHeader', 'Заголовок');
        $this->view->setTemplate('alternative.tpl');
        return $this->view->render();
    }

    public function acceptMessage($message, $param)
    {
        if ($message == 'setHeader') $this->view->data['header'] = $param;
    }
}