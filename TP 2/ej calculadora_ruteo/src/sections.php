<?php

//como la app esta enrutada se puede centralizar codigo, antes haciamos un archivo por cada funcionalidad (TP EJ8)

    function showPi(){
        include_once "./templates/header.php";
        $pi = M_PI;

        echo "<h1>PI</h1>";
        echo "El valor de Pi es: $pi"; 

        include_once "./templates/footer.php";
    }
    
    /*indica los creadores de la calculadora*/
    // esto lleno de echo esta mal
    function showAbout($desarrollador = null) {
        include_once "./templates/header.php";

        if (isset($desarrollador)) {
            echo "<h1>Acerca de $desarrollador</h1>";
            echo "<img src='img\dev.jpg'>";
        } else {
            echo "<h1>Este es about general: Calculadora de la materia Web 2 </h1>";
            echo "<img src='img\dev.jpg'>";
        }

        include_once "./templates/footer.php";
    }
?>

<?php

    // solo le agrego php a que es php, lo demas lo dejo como estaba anteriormente en el index.html
    // no hago echo como hago arriba
   function showHome(){

    include_once "./templates/header.php";?>
            <h1>Calculadora</h1>

            <form id="form-calc">
                <label>Operando 1: </label><input type="text" name="valor1"></label>
                <select name="operacion">
                    <option value="sumar">+</option>
                    <option value="restar">-</option>
                    <option value="dividir">/</option>
                    <option value="multiplicar">*</option>
                </select>
                <label>Operando 2:</label><input type="text" name="valor2"/></label>
                <input type="submit" value="=">
                <span id="resultado"></span>
            </form>

<?php  include_once "./templates/footer.php";
    }
?>
