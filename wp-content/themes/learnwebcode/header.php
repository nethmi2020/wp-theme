<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<div class="container">
<header class="site-header">
    <div class="hd-search">
        <?php get_search_form();?> 
    </div>
    <a href="<?php echo esc_url(home_url('/')); ?>"><h1><?php bloginfo('name') ?></h1></a>
    <h5><?php bloginfo('description') ?></h5>

    <?php  if(is_page('About US')){ ?>

        thank you for viewing our work
    <?php }
    ?>


    <nav class="side-nav">
        <?php
        $args=array(
            'theme_location'=>'primary'

        );
        ?>
     <?php wp_nav_menu($args); ?>
    </nav>

</header>
 