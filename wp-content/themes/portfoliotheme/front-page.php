<?php get_header();?>




                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/frontpage/frontpage', 'intro') ?>

                <?php endwhile; else: endif; ?>


<?php get_footer();?>