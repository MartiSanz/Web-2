<?php require 'templates/header.html'; ?> 

    <main class="container mt-5">

      <?php
      // incluyo el archivo que tiene el arreglo de noticias
      require_once 'db_noticias.php'; 
      ?>

      <section class="noticias">
        <?php foreach ($noticias as $key => $noticia) { ?>
          <div class="card">
              <img src="<?php echo $noticia->img ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $noticia->title?></h5>
                <p class="card-text"><?php echo $noticia->text ?></p>
                <a href="noticia.php?id=<?php echo $key ?>" class="btn btn-outline-primary">Leer más</a>
              </div>
            </div>
            
          <?php }?>
      </section>
        
    </main>

<?php require 'templates/footer.html'; ?>