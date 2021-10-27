<?php 
    get_header();
?>
<section class="content-page">
    
    <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
    
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
</section>

<?php
    get_footer();
?>