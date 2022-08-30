<?php $opciones = [5, 10, 20]; ?>


<?php for($i = 0; $i < count($opciones); $i ++){ ?>
    <a href="datos.php?id=<?php echo $i ?>"> Ver los primeros <?php echo $opciones[$i] ?></a>
<?php }?>