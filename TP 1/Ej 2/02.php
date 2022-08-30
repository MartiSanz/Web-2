<h3> Ejercicio 02 </h3>

<?php
    echo('<ul>');
        for($i = 0; $i < 10; $i ++){
           $cadena = '<li>'.$i.'</li>';
   //      $cadena = "<li>$i</li>"; tambien se puede escribir asi para concatenar
           echo($cadena);
        }
  
    echo('</ul>');
?>
