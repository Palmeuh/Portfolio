<?php get_header();?>


<section class="content-page">
    <div class="container">

            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/portfolio/portfolio', 'single'); ?>

                <?php endwhile; else: endif; ?>



    </div>
</section>

<?php get_footer();?>   