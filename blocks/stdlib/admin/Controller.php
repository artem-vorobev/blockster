<?php
namespace blocks\stdlib\admin;

class Controller extends \proto\Controller
{
    public function actionIndex() {
        return $this->view->render();
    }

    public function actionSettings() {
        $this->view->setTemplate('settings.tpl');
        return $this->view->render();
    }
}