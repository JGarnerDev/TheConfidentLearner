<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <title> <?php bloginfo('name')?></title>
    <!-- Meta -->
    <meta charset="<?php bloginfo( 'charset' )?> " />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&display=swap" rel="stylesheet" />

    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Theme CSS -->


    <?php wp_head()?>
</head>

<body <?php body_class()?>>



    <nav class="navbar navbar-expand-md  fixed-top navbar-light bg-light" role="navigation">
        <?php if(has_custom_logo( )) : ?>
        <a class="navbar-brand" href="/"><?php the_custom_logo()?></a>
        <?php else : ?>
        <a class="navbar-brand" href="/">
            <h4><?php bloginfo( 'name' )?></h4>
        </a>
        <?php endif ; ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
    </nav>