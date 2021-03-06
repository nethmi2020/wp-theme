<?php

function learnwebcode(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'learnwebcode');

register_nav_menus(array(
    'primary'=> __('Primary Menu', 'theme'),
    'footer' =>__('Footer Menu', 'theme')
));

// get top ancestor

function get_top_ancestor_id(){

    global $post;

    if($post->post_parent){
        $ancestors=array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

// does page have childre

function has_children(){

    global $post;
   $pages= get_pages('child_of=' .$post->ID);
   return count($pages);
   
}

// customize excerpt word count

function custom_excerpt_length(){
    return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length');


// add feature image support

// add_theme_support('post-thumbnails');

function learningwp_setup(){
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180,120,true);
    add_image_size('banner-image', 920,210,array('left','top'));
}

add_action('after_setup_theme','learningwp_setup');
?>