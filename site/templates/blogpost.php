<?php namespace ProcessWire;
include "header.inc"
?>


<main class="container">


  <div class="row g-5">
    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
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
      </div>
    </div>

    <div class="col-md-8">
      <h3 class="mb-4 fst-italic">
        <?php echo $page->title; ?>
      </h3>

      <div class="d-flex flex-row mb-1">
        <?php foreach ($page->tags as $tag) { ?>
          <div class="p-2"> <a href="<?php echo $tag->url;  ?>"><button type="button" class="btn btn-success"><i class="fa-solid fa-tag"></i> <?php echo $tag->title;  ?> </button></a> </div>
          <?php }?>
      </div>

        <p class="blog-post-meta"><?php echo $page->postdate; ?> <a href="#"> <?php echo $page->author; ?> </a></p>
        <?php echo $page->blogtext; ?>
        <img src="<?php echo $page->blogimage->url; ?>" >
        <br>
        <br>
        <br>
      <a class="btn btn-primary rounded-pill" href="<?php echo $pages->get("/")->url; ?>">Regresar a inicio</a>

      <br>
      <br>
      <br>
    
    </div>
  </div>

</main>

<?php
include "footer.inc";
?>
