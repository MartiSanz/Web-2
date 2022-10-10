<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class FrutasView{
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }

    function show($fruits, $item){
        $this->smarty->assign('frutas', $fruits);
        $this->smarty->assign('item', $item);
        $this->smarty->display('templates/verFrutas.tpl');   
    }

}