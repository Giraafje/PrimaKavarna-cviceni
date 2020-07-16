<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimaKavárna</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="headerMenu">
            <div class="container">
                <a href="#" class="logo">PrimaKavárna</a>
                <div class="menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </div>
            </div>
        </div>
        <div class="headerDescription">
            <div class="underlined">
                PrimaKavárna
            </div>
            <p>Jsme tu pro vás již od roku 2002</p>
            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </header>