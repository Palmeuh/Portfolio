<div class="container">
    <header class="content-header">
    	<div class="mb-3">
            <h3><?php the_title() ?> </h3>
            <span class="date"><?php the_date(); ?></span>
            </br>

            <?php 
                the_tags('<span class="tag"><i class="fa fa-tag"></i> ', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
            ?>             
            </br>
            
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a></span>
        </div>
    </header>   

<?php 
the_content();
?>

<?php 
    comments_template();
?>

</div>