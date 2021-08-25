<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,100;1,300;1,500;1,700&display=swap" rel="stylesheet">

    <!-- fontawesome v5 -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <!-- TITULO -->
    <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
</head>
<body>

    <header> 
        <!-- <div class="logo">
            <div class="container">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="Logo">
            </div>
        </div> -->
        <div class="menu">
            <nav class="collapse navbar-collapse" id="navbarSupportedContent" >
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'top-pages-menu',
                            'depth'          => 1,
                            'container'      => false,
                            'menu_class'     => 'nav navbar-nav',

                        )
                    );
                ?>
            </nav>
        </div>
    </header>