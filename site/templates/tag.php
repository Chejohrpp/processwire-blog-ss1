<?php namespace ProcessWire;
include "header.inc"
?>

<main class="container">

  <div class="row g-5">
  <?php
    include "sidebar.inc";
  ?>
    <div class="col-md-8">
      <h1 class="mb-4 fst-italic">
        <?php echo $page->title; ?>
      </h1>

      <?php foreach ($pages-> find("tags={$page->title}") as $blogpost) { ?>


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
        <img src="<?php echo $blogpost->blogimage->url; ?>" style="width: 500px; height: 379px" >
      </article>
      <a class="btn btn-primary rounded-pill" href="<?php echo $blogpost->url; ?>">Leer mas...</a>

      <?php } ?>
    
    </div>
  </div>

</main>

<?php
include "footer.inc";
?>
