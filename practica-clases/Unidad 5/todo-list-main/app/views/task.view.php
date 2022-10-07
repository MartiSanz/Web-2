<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class TaskView{
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }

    function showTask($tasks){
        $this->smarty->assign('tasks', $tasks);
        $this->smarty->display('templates/taskList.tpl');
    }
}