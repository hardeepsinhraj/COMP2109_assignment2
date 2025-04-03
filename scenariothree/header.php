<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <!-- Add my css -->
    <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/scenariothree/css/custom-style.css')); ?>"> 

</head>
<body <?php body_class(); ?>>
<header>
    <!-- <h1>bloginfo('name'); ?></h1> -->
    <div>
        <a href="<?php esc_url(home_url()); ?>">
            <img src="<?php echo esc_url(home_url('wp-content/uploads/2025/04/img1.jpg'))?>" alt= "header logo">
    </div>  
    <nav>
        <?php 
         wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'depth'          => 2,
            'fallback_cb'    => false
        )); ?>
    </nav>
</header> 