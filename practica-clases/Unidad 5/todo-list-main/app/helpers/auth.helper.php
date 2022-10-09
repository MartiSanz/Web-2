<?php

class AuthHelper {

     /**
     * Verifica que el user este logueado y si no lo está
     * lo redirige al login.
     */
    public function checkLoggedIn() {
        session_start(); // NO INICIA UNA NUEVA SESION, CONSULTA LA SESION QUE ESTA INICIADA
        if (!isset($_SESSION['IS_LOGGED'])) { // si no esta seteado en true, sigo mostrando login
            header("Location: " . BASE_URL . 'login');
            die(); // corto la ejecucion 
        }
    } 
}
