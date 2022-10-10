<?php

require_once 'frutas.view.php';

class Controller{
    private $view;
    private $fruits;
    private $fruta ;

    public function __construct(){
       $this->view = new FrutasView();
       $this->fruits = ["apples", "pears", "bananas", "strawberries"]; 
       $this->fruta = "bananas";
    }

    function showFruits(){
        print_r($this->fruits);
        $this->view->show($this->fruits, $this->fruta);

    }
}