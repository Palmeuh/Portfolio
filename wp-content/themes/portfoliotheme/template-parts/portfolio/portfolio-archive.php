
<div class="col ">
    <div class="card h-100 w-75 bg-light mx-auto text-center shadow-lg">
      <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top img-fluid" alt="...">
      <div class="card-body bg-light d-flex flex-column">
          
        <h5 class="card-title"><?php the_title(); ?></h5>
        <div class="text-muted">
        <div class="meta mb-3">
            <span class="date">Published: <?php the_date(); ?></span>            

            <?php 
                the_tags('<span class="tag"><i class="fa fa-tag"></i> ', '</span><span class="tag"><i class="fa fa-tag"></i> ', '</span>');
            ?>            
            
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a></span>
        </div>  
        </div>
        <p class="card-text"><?php the_excerpt() ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-dark mt-auto">Learn more</a>
      </div>      
    </div>
</div>

