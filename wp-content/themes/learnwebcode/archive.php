<?php

get_header();
if(have_posts()) :
    ?>

        <h2><?php
        
        if(is_category()){
            single_cat_title();
        } elseif(is_tag()){
            single_tag_title();
        } elseif(is_author()){
            the_post();
            echo 'Author Archieves:' .get_the_author();
            rewind_posts();
        } elseif(is_day()){
            echo 'Daily Archieves:' .get_the_date();
        }elseif (is_month()){
            echo 'Monthly Archieves:' .get_the_date('F Y');
        }elseif (is_year()){
            echo 'Yearly Archieves:' .get_the_date('Y');
        }
        else{
            echo 'Archieves';
        }
        
        ?></h2>

    <?php

    while(have_posts()): the_post();?>
  <?php get_template_part('content'); ?>


   <?php endwhile;

else:
    echo '<p>No contend found</p>';
endif;
get_footer();
?> 
