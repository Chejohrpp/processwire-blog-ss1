<?php namespace ProcessWire;
include "header.inc";
$search = $input->get->text("search");
?>

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-primary">
  <h3 class="mb-4 fst-italic">
       <?php echo __("Resultados: ") ?> <?php echo  $search; ?>
      </h3>
  </div>

  <div class="row g-5">


  <?php
    include "sidebar.inc";
  ?>

    <div class="col-md-8">

      <?php foreach ($pages-> get("/blogposts/") -> children("blogtext|title%={$search}") as $blogpost) { ?>


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
        <?php echo $sanitizer->truncate($blogpost->blogtext,100); ?>
        
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
