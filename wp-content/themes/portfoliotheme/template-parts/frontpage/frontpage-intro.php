<section class="frontpage frontpage-intro">
    <div class="frontpage-intro_box">  
        
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
</section>