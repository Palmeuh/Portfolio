<header class="main">
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">       
        <a class="navbar-brand" href="#"><?php echo get_bloginfo(); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'top-menu',
                            'container' => '',
                            'theme_location' => 'top-menu',
                            'items_wrap' => '<ul class="navbar-nav">%3$s</ul>'
                        )
                    );
                ?>	
        </div>
    </div>
    </nav>
</header>