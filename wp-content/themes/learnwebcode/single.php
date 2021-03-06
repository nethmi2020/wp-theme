<?php

get_header();
if(have_posts()) :

    while(have_posts()): the_post();?>

    <article class="post">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

        <p class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))  ?>">
        <?php  the_author(); ?></a> | Posted in 

                    <?php
                    
                    $categories= get_the_category();
                    $seperator= ", ";
                    $output='';

                    if($categories){

                        foreach ($categories as $category){

                            $output .= '<a href="'. get_category_link($category->term_id).'">'  .$category->cat_name . '</a>' .$seperator;
                        }

                        echo trim($output, $seperator);
                    }
                    ?>
        
        </p>

        <?php   the_post_thumbnail('banner-image'); ?>

        <p><?php the_content(); ?></p>
    </article>

   <?php endwhile;

else:
    echo '<p>No contend found</p>';
endif;
get_footer();
?> 
