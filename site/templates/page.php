<?php namespace ProcessWire;
include "header.inc"
?>

<main class="container">
  <div class="row p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col">
      <h1 class="display-4 fst-italic"><?php echo __("Navegando el Mundo de las Inteligencias Artificiales") ?></h1>
      <p class="lead my-3"><?php echo __("En el fascinante cruce entre tecnología y futuro, las Inteligencias Artificiales (IAs) brillan con luz propia. Te invitamos a explorar este emocionante mundo en 'Bit por Cerebro: Navegando el Universo de las IAs'. Descubre cómo estas maravillas digitales están transformando nuestra vida y desentrañando los límites entre lo humano y lo artificial. ¡Bienvenido a un viaje de asombro e innovación!") ?></p>
    </div>
    <div class="col">
    <img src="<?php echo $config->urls->templates;?>img/schema/intro.jpeg" alt="IAS" style="width: 38rem; height: 27rem" >
    </div>
  </div>

  <div class="row g-5">
      
  <?php
    include "sidebar.inc";
  ?>


    <div class="col-md-8">
      <h3 class="mb-4 fst-italic">
        <?php echo __("desde la Fuente Infinita") ?>
      </h3>

      <?php foreach ($pages-> get("/blogposts/") -> children() as $blogpost) { ?>


      <article class="blog-post">
        <hr>
        <h2 class="display-5 link-body-emphasis mb-1"> <?php echo $blogpost->title; ?></h2>
        <p class="blog-post-meta"><?php echo $blogpost->postdate; ?> <a href="#"> <?php echo $blogpost->author; ?> </a></p>
        <p>
          <div class="d-flex flex-row mb-1 blog-post-meta">
          <?php foreach ($blogpost->tags as $tag) { ?>
            <div class="p-2"> <a href="<?php echo $tag->url;  ?>"><button type="button" class="btn btn-success"><i class="fa-solid fa-tag"></i> <?php echo $tag->title;  ?> </button></a> </div>
            <?php }?>
        </div>
        </p>
        <?php echo $sanitizer->truncate($blogpost->blogtext,500); ?>
        <br>
        <img src="<?php echo $blogpost->blogimage->url; ?>" style="width: 700px; height: 500px" >
      </article>
      <a class="btn btn-primary rounded-pill" href="<?php echo $blogpost->url; ?>"><?php echo __("Leer mas...") ?></a>

      <?php } ?>

      <!-- <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary rounded-pill" href="#">تدوينات أقدم</a>
        <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">تدوينات أحدث</a>
      </nav> -->
    
    </div>
  </div>

</main>

<?php
include "footer.inc";
?>
