<body>
    <a href="04.php?limit=2">ver 2</a>
    <a href="04.php?limit=5">ver 5</a>
    <a href="04.php">ver todos</a>

    <?php

    $nombres = ["Nombre1","Nombre2","Nombre3","Nombre4","Nombre5","Nombre6","Nombre7","Nombre8","Nombre9","Nombre10"];
    
    // isset — Determina si una variable está definida y no es null
   
    $limit = count($nombres);
    
    if(isset($_GET['limit'])){
        $limit = $_GET['limit'];
    }

    echo "<ul>";
        for ($i=0; $i < $limit; $i++) { 
            echo "<li>$nombres[$i]</li>";
        }
    echo "</ul>";
    ?>
</body>