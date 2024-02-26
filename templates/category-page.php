<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Template Name: Catégorie */
    get_header(); ?>
    
    <nav>

    <!-- récupération des champs ACF -->
    <?php 
        $cattitle = get_field('title');
        $catdesc = get_field('description');
        
    

    ?>
        <div class="navimage">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/category/photocollier.jpg" alt="photo de collier">
            <h1> <?php echo $cattitle ?> </h1>
        </div>
    </nav>
    <main>
        <section>
            <div class="cat">
                <div class="catdesc">
                    <?php echo $catdesc ?>
                </div>
                <div class="catlink">
                    <div class="highcat">
                        <?php
                                if( have_rows('high_category') ): ?>
                                    
                                
                                    <?php while( have_rows('high_category') ) : the_row();
                                
                                        
                                        $lpcat = get_sub_field('high_pic_category');
                                        $hlcat = get_sub_field('high_link_category');
                                    
                                    ?>
                                        <div class="picture-link">
                                        
                                            <img loading="lazy" src="<?php echo($lpcat['sizes']['mini-thumbnail'])?>" 
                                                width="<?php echo($lpcat['sizes']['mini-thumbnail-width'])?>"
                                                height="<?php echo($lpcat['sizes']['mini-thumbnail-height'])?>"
                                                alt="<?php echo($lpcat['alt'])?>">
                                            <a href="<?php echo($hlcat['url'])?>"><?php echo ($hlcat['title'])?></a>
                                        </div>
                                    <?php endwhile; 
                                endif;?>
                    </div>  
                    <div class="lowcat">
                        <?php
                                if( have_rows('low_category') ): ?>
                                    
                                
                                    <?php while( have_rows('low_category') ) : the_row();
                                
                                        
                                        $lpcat = get_sub_field('low_pic_category');
                                        $llcat = get_sub_field('low_link_category');
                                    
                                    ?>
                                        <div class="picture-link">
                                        
                                            <img loading="lazy" src="<?php echo($lpcat['sizes']['mini-thumbnail'])?>" 
                                                width="<?php echo($lpcat['sizes']['mini-thumbnail-width'])?>"
                                                height="<?php echo($lpcat['sizes']['mini-thumbnail-height'])?>"
                                                alt="<?php echo($lpcat['alt'])?>">
                                            <a href="<?php echo($llcat['url'])?>"><?php echo ($llcat['title'])?></a>
                                        </div>
                                    <?php endwhile; 
                                endif;?>
                    </div>
                </div>
            </div>                
        </section>
    </main>
    <?php get_footer(); ?>
</body>
</html>