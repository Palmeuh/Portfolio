<?php 
    get_header();
?>
<section class="content-page">
    
    <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5 justify-content-evenly">
    
        <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    
    
        get_template_part('template-parts/portfolio/portfolio', 'archive');
    
        endwhile;
    else:
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    ?></div>
    </div>
    <div class="index__pagination--box mx-auto d-flex justify-content-center mt-5">
<?php the_posts_pagination( array(
	'mid_size' => 2,
	'prev_text' => __( 'Back', 'textdomain' ),
	'next_text' => __( 'Next', 'textdomain' ),
) ); ?>
</div>
</section>



<?php
    get_footer();
?>