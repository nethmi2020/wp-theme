<!-- 
    Template name: Special Layout
 -->


 <?php

get_header();
if(have_posts()) :

    while(have_posts()): the_post();?>

    <article class="post page">
        <h2><?php the_title(); ?></h2>

        <div class="info-box">
            <h4>Declaimer title</h4>
            <p>In this tutorial, we cover two quick and easy methods to view page and post IDs within your WordPress dashboard — one using a WordPress plugin and one without. For each strategy, we have laid out clear and actionable steps to enable you to easily find your WordPress page and post IDs. Let’s get started.</p>
        </div>

        <p><?php the_content(); ?></p>
    </article>

   <?php endwhile;

else:
    echo '<p>No contend found</p>';
endif;
get_footer();
?> 

