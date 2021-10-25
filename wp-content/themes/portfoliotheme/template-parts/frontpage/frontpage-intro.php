<section class="frontpage frontpage-intro">
    <div class="frontpage-intro_box">
        <div class="row">            
            <div class="col-md-6 ">
                <div class="frontpage-intro_box-image text-center">
                    <?php if( get_field('intro_image') ): ?>
                    <img src="<?php the_field('intro_image'); ?>" class="img-fluid" id="intro_image"/>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="col-md-6 my-auto">
                <h3>
                <?php
                $input = get_field('headline');
                if($input) {
                echo $input;
                }
                else {
                    echo "Home Page";
                }
                ?>
                </h3>
                
                <p class="lead">
                <?php
                $input = get_field('lead_text');
                if($input) {
                echo $input;
                }
                else {
                    echo "To go with the input.";
                }
                ?>
                
                </p>
                <div class="frontpage-intro_buttons">
                    <a href=" <?php
                    $input = get_field('introbtn_link_left');
                    if($input) {
                    echo $input;
                    }
                    else {
                        echo "To go with the input.";
                    }
                    ?>" class="btn btn-primary">
                    <?php
                    $input = get_field('introbtn_text_left');
                    if($input) {
                    echo $input;
                    }
                    else {
                        echo "To go with the input.";
                    }
                    ?>
                    </a>
                    <a href=" <?php
                    $input = get_field('introbtn_link_right');
                    if($input) {
                    echo $input;
                    }
                    else {
                        echo "To go with the input.";
                    }
                    ?>" class="btn btn-primary">
                    <?php
                    $input = get_field('introbtn_text_right');
                    if($input) {
                    echo $input;
                    }
                    else {
                        echo "To go with the input.";
                    }
                    ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>