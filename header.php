<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <?php 
      $slogan = get_field('tagline','options');
      $logo = get_field('logo', 'options');
      $logolink = get_field('logo_link','options');


      ?><div class="menu">
          <p> <?php echo $slogan ?></p>
          <div class="menu-container">
            
            <?php wp_nav_menu(array('menu' => 'menu')); ?>
            <a href="<?php echo($logolink['url'])?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/header/voloco.png" alt="logo"></a>
            <?php wp_nav_menu(array('menu' => 'menusecondaire')); ?>
          </div>
            <a href="https://www.etsy.com/shop/LaFabriquedeGigi">Ma Boutique</a>
        </div>  
        <?php 
        //var_dump($logo);?>
       
        
    </header>
</body>
</html>
