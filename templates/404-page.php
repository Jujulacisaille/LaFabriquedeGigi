<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
</head>
<body>
    <?php 
    /*Template Name: Erreur */
    get_header(); ?>
    <main>
        <section class="404">
            <div class="error">
                <h1>Erreur 404</h1>
            </div>
            <div class="plants-flowers">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/erreur404/plante2.svg" alt="motif de plante">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/erreur404/plante3.svg" alt="motif de plante">
            </div>
        </section>
        
    </main>
    <?php get_footer(); ?>
</body>
</html>