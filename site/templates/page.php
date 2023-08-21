<?php namespace ProcessWire;
include "header.inc"
?>

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col-lg-6 px-0">
      <h1 class="display-4 fst-italic"><?php echo __("El título de una publicación destacada más alta") ?></h1>
      <p class="lead my-3">Varias líneas de texto expresan la repetición, con el fin de informar rápida y eficientemente a los nuevos lectores sobre las cosas más interesantes sobre el contenido de esta publicación.</p>
      <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Seguir leyendo...</a></p>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
          <h4 class="fst-italic">alrededor</h4>
          <p class="mb-0">
          Has venido, y la vida de todo tipo y color ha venido contigo: la planta crece, los árboles deshojan y florecen, el gatito maúlla, los arrullos lunares, la oveja Yathgo, la vaca el arroyo, y cada mascota invita a su mascota. Todo siente la vida y olvida las preocupaciones de la vida, y sólo menciona la felicidad de la vida, si el tiempo es una carne, tú eres su alma, y si es la edad, tú eres su juventud.
          </p>
        </div>

        <div>
          <h4 class="fst-italic">Entradas recientes</h4>
          <ul class="list-unstyled">
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">Ejemplo del título de una entrada de blog</h6>
                  <small class="text-body-secondary">15 enero 2023</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">Este es otro título para el blog</h6>
                  <small class="text-body-secondary">14 enero 2023</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">Título de la publicación de blog más largo: ¡Esta fuente tiene varias líneas!</h6>
                  <small class="text-body-secondary">13 enero 2023</small>
                </div>
              </a>
            </li>
          </ul>
        </div>

        <!-- <div class="p-4">
          <h4 class="fst-italic">Archivos</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">marzo 2021</a></li>
            <li><a href="#">febrero 2021</a></li>
            <li><a href="#">enero 2021</a></li>
            <li><a href="#">diciembre 2020</a></li>
            <li><a href="#">noviembre 2020</a></li>
            <li><a href="#">octubre 2020</a></li>
            <li><a href="#">septiembre 2020</a></li>
            <li><a href="#">agosto 2020</a></li>
            <li><a href="#">julio 2020</a></li>
            <li><a href="#">junio 2020</a></li>
            <li><a href="#">mayo 2020</a></li>
            <li><a href="#">abril 2020</a></li>
          </ol>
        </div> -->

        <div class="p-4">
          <h4 class="fst-italic">Tags</h4>

          <?php foreach ($pages -> find("template=tag,sort=title") as $tag){ ?>

            <a href="<?php echo $tag->url;  ?>"><button type="button" class="btn btn-success"><i class="fa-solid fa-tag"></i> <?php echo $tag->title;  ?> </button></a>

          <?php } ?>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Buscanos en</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <h3 class="mb-4 fst-italic">
        desde Firehose
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
        <img src="<?php echo $blogpost->blogimage->url; ?>" >
      </article>
      <a class="btn btn-primary rounded-pill" href="<?php echo $blogpost->url; ?>">Leer mas...</a>

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
