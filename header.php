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
      $dpdwncategory = get_field('dropdown_category','options');
      // d($dpdwncategory);
     


      ?><div class="menu">
          <p> <?php echo $slogan ?></p>
          <div class="menu-container">
            
            <?php wp_nav_menu(array('menu' => 'menu')); ?>
            <a href="<?php echo get_site_url()?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/header/voloco.png" alt="logo"></a>
            <?php wp_nav_menu(array('menu' => 'menusecondaire')); ?>
          </div>
            <a href="https://www.etsy.com/shop/LaFabriquedeGigi">Ma Boutique</a>
        </div>  
        <div class="menu">
        <?php 
        foreach($dpdwncategory as $category){
            echo "<div class='category'>";
                echo "<a href='" . $category['category_title']['url'] . "'>" . $category['category_title']['title'] . "</a>"; 
                echo "<div class='links'>";
                if (is_array($category['sous_categorie'])){
                  foreach($category['sous_categorie'] as $subcategory ){
                     echo "<a href='" . $subcategory['subcategory_title']['url'] . "'>" . $subcategory['subcategory_title']['title'] . "</a>"; 

                  }
                }
                echo "</div>";
            echo "</div>";
        }
        
        
        
        ?>
       </div>
        
    </header>
</body>
</html>
