<?php 
require_once 'db_noticias.php';

// desde la URL agarra el parametro "id" que viene por GET
$id = $_GET['id'];
$noticia = $noticias[$id];
?>

<?php include 'templates/header.html'; ?>

<main class="container mt-5">
      <section class="noticia">
        <h1><?php echo $noticia->title ?></h1>
        <img src="<?php echo $noticia->img ?>"/>
        <p><?php echo $noticia->text ?></p>
      </section>
    </main>

<?php require 'templates/footer.html'; ?>