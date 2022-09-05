<?php

    function sumar($op1, $op2){
        return ($op1 + $op2);
    }

    function restar($op1, $op2){
        return ($op1 - $op2);
    }

    function dividir($op1, $op2){
        if($op2 != 0){
            return ($op1 / $op2);
        }

        echo('ERROR');
        die();
    }

    function multiplicar($op1, $op2){
        return ($op1 * $op2);
    }

?>