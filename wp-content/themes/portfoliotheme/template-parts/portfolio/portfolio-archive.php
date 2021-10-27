
<div class="col">
    <div class="card h-100 bg-light">
      <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top img-fluid" alt="...">
      <div class="card-body bg-dark d-flex flex-column">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_excerpt() ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-outline-light mt-auto">Learn more</a>
      </div>
    </div>
</div>

