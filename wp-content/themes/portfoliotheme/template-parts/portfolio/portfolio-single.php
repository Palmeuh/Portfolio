<section class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 portfolio-box_left">
                <img class="img-fluid" src="<?php the_post_thumbnail_url() ?>" alt="">
            </div>
            <div class="col-sm-12 col-md-8 portfolio-box_right my-auto">
                
                    <h3>
                        <?php the_title() ?>
                    </h3>                    
                    <p class="lead">
                    <?php the_excerpt() ?>

                    </p>
                
            </div>
            <div class="col-12 portfolio-box_under">
                <p>
                    <?php the_content() ?> 
                </p>
            </div>
        </div>
    </div>
</section>


