<?php

get_header();
if(have_posts()) :

    while(have_posts()): the_post();?>

    <article class="post page">
        <div class="column-container clearfix">

            <div class="title-column">
                <h2 class=""><?php the_title() ?></h2>
            </div>

            <div class="text-column">
                <p><?php the_content();?></p>
            </div>
        </div>
    </article>

   <?php endwhile;

else:
    echo '<p>No contend found</p>';
endif;
get_footer();
?> 
