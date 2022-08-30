

<form method="POST" action="05.php"> 
    <label>Peso:</label><input type="text" name="peso"/></label>
    <label>Altura:</label><input type="text" name="altura"/></label>
    <input type="submit">
</form>


<?php $opciones = ["Bajo peso", "Normal", "Sobrepeso", "Obesidad"]; 

    require_once 'calculador.php'; 
    if(!empty($_POST)){
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $resultado = calcular($peso, $altura);

        echo($resultado);
    }
?>