<?php namespace ProcessWire;
?>


<div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
          <h4 class="fst-italic"><?php echo __("en el ciberespacio") ?></h4>
          <p class="mb-0">
          <?php echo __("Has llegado, y con tu presencia llega una sinfonía de datos y posibilidades: los algoritmos evolucionan, las ideas florecen y convergen, el código canta, los algoritmos danzan, las redes neuronales se conectan, y cada innovación inspira a la siguiente. Todo respira innovación y se despoja de las limitaciones, solo para abrazar el potencial del conocimiento y la creatividad. Si la tecnología es el camino, tú eres su guía, y si es el futuro, tú eres su pionero.") ?>
          </p>
        </div>

        <div>
          <h4 class="fst-italic"><?php echo __("Entradas recientes") ?></h4>
          <ul class="list-unstyled">
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0"><?php echo __("Explorando Tecnologías de IA de Vanguardia: Transformando el Panorama Digital") ?></h6>
                  <small class="text-body-secondary">15 enero 2023</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">CHATGPT</h6>
                  <small class="text-body-secondary">14 enero 2023</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">DREAM IO</h6>
                  <small class="text-body-secondary">13 enero 2023</small>
                </div>
              </a>
            </li>
          </ul>
        </div>



        <div class="p-4">
          <h4 class="fst-italic">Tags</h4>

          <?php foreach ($pages -> find("template=tag,sort=title") as $tag){ ?>

            <a href="<?php echo $tag->url;  ?>"><button type="button" class="btn btn-success"><i class="fa-solid fa-tag"></i> <?php echo $tag->title;  ?> </button></a>

          <?php } ?>
        </div>

        <div class="p-4">
          <h4 class="fst-italic"><?php echo __("Buscanos en") ?></h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
