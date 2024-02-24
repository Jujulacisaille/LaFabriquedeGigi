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
    /* Template Name: Accueil */ 

    get_header();
?>
    <main>
        <section>
            <?php

            //récupération des champs ACF

            
            
            $titlepic = get_field('title_picture');
            $subtitlepic = get_field('subtitle_picture');
            $titlearticle = get_field('title_article');
            $readmorebutton = get_field('read_more_button');
            $storytitle = get_field('story_title');
            $storydescription = get_field('story_description');
            $abtmelink = get_field('about_me_link');
            $galery = get_field('pictures_galery');

            ?>
             
            <div class="link_pictures">   
                <div class = "pictures">
                    <a href="#B1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/bijoumarche.jpg" alt="Bijoux"></a>
                    
                    <a href="#C1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/photoprincipalecouture.jpg" alt="Couture"></a>
                </div>
                <div class = "link-text">
                    <h1><?php echo $titlepic?></h1>
                    <p class="subtitle"><?php echo $subtitlepic?></p>
                </div>
            </div>
            <div class="article">
                <h3 class="title-article"><?php echo $titlearticle ?></h3>
                <a href="<?php echo($readmorebutton['url'])?>"><?php echo ($readmorebutton['title']) ?></a>
            </div>
            <div class="story-galery">
                <div class="story">
                    <h3><?php echo $storytitle?></h3>
                    <div class="story-description">
                        <?php echo($storydescription) ?>
                    </div>
                    
                    <a href="<?php echo($abtmelink['url'])?>"><?php echo ($abtmelink['title'])?></a>

                </div>
                <div class="galery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/galerie.png" alt="galerie de photo">
                </div>
            </div>
        </section>
        
        <section id="B1">
            <?php 
                $jwlrypic=get_field('jewellery_picture');
                
                $jwlrylink = get_field('jewellery_link');
                
               
            ?>
            <div class="wrap">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/separation-1.svg" alt="motif de séparation">
                <div class="jewellery">
                    <div class="jewellery_picture">
                        <a href="<?php echo($jwlrylink['url'])?>"><img loading="lazy" 
                        src="<?php echo($jwlrypic['sizes']['pic-category'])?>" 
                        width="<?php echo($jwlrypic['sizes']['pic-category-width'])?>" 
                        height="<?php echo($jwlrypic['sizes']['pic-category-height'])?>" 
                        alt="<?php echo($jwlrypic['alt'])?>"></a>
                        <img id="jewel" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/motifplante3.svg" alt="motif de plante">
                    </div>
                    <div class="jewellery-category">
                        <div class="upper-category">
                        <?php
                            if( have_rows('upper_picture_and_link_jewellery') ): ?>
                                
                            
                                <?php while( have_rows('upper_picture_and_link_jewellery') ) : the_row();
                            
                                    
                                    $piccategory = get_sub_field('picture');
                                    $linkcategory = get_sub_field('link');
                                    
                                ?>
                                    <div class="picture-link">
                                        
                                        <img loading="lazy" src="<?php echo($piccategory['sizes']['mini-thumbnail'])?>" 
                                            width="<?php echo($piccategory['sizes']['mini-thumbnail-width'])?>"
                                            height="<?php echo($piccategory['sizes']['mini-thumbnail-height'])?>"
                                            alt="<?php echo($piccategory['alt'])?>">
                                        <a href="<?php echo($linkcategory['url'])?>"><?php echo ($linkcategory['title'])?></a>
                                    </div>
                                <?php endwhile; 
                            endif;?>
                            
                        
                        
                        </div>
                        
                        <div class="lower-category">
                        <?php
                            if( have_rows('lower_picture_and_link_jewellery') ): ?>
                                
                            
                                <?php while( have_rows('lower_picture_and_link_jewellery') ) : the_row();
                            
                                    
                                    $piccategory = get_sub_field('picture');
                                    $linkcategory = get_sub_field('link');
                                    
                                ?>
                                    <div class="picture-link">
                                        <img loading="lazy" src="<?php echo($piccategory['sizes']['medium_large'])?>" alt="<?php echo($piccategory['alt'])?>">
                                        <a href="<?php echo($linkategory['url'])?>"><?php echo ($linkcategory['title'])?></a>
                                    </div>
                                <?php endwhile; 
                            endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section id="C1">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/separation2.svg" alt="motif de séparation">
            <div class="sewing">
                <div class="sewing-category">
                    <div class="upper-category">
                        <?php
                            if( have_rows('upper_picture_and_link_sewing') ): ?>
                                
                            
                                <?php while( have_rows('upper_picture_and_link_sewing') ) : the_row();
                            
                                    
                                    $piccategory = get_sub_field('picture');
                                    $linkcategory = get_sub_field('link');
                                    
                                ?>
                                    <div class="picture-link">
                                        <img loading="lazy" src="<?php echo($piccategory['sizes']['medium_large'])?>" 
                                            width="<?php echo($piccategory['sizes']['medium_large'])?>"
                                            alt="<?php echo($piccategory['alt'])?>">
                                        <a href="<?php echo($linkategory['url'])?>"><?php echo ($linkcategory['title'])?></a>
                                    </div>
                                <?php endwhile; 
                            endif;?>
                    </div>
                    <div class="lower-category">
                        <?php
                            if( have_rows('lower_picture_and_link_sewing') ): ?>
                                
                            
                                <?php while( have_rows('lower_picture_and_link_sewing') ) : the_row();
                            
                                    
                                    $piccategory = get_sub_field('picture');
                                    $linkcategory = get_sub_field('link');
                                    
                                ?>
                                    <div class="picture-link">
                                        <img loading="lazy" src="<?php echo($piccategory['sizes']['medium_large'])?>" alt="<?php echo($piccategory['alt'])?>">
                                        <a href="<?php echo($linkategory['url'])?>"><?php echo ($linkcategory['title'])?></a>
                                    </div>
                                <?php endwhile; 
                            endif;?>
                    </div>
                </div>
                
                <?php 
                    $swngpic=get_field('sewing_picture');
                    //d($jwlrypic);
                    $swnglink = get_field('sewing_link');
                ?>

                <div class="sewing_picture">
                    
                    
                    <a href="<?php echo($swnglink['url'])?>"><img loading="lazy" 
                    src="<?php echo($swngpic['sizes']['pic-category'])?>" 
                        width="<?php echo($swngpic['sizes']['pic-category-width'])?>" 
                        height="<?php echo($swngpic['sizes']['pic-category-height'])?>" 
                    alt="<?php echo($swngpic['alt'])?>"></a>
                    <img id="sewing" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/motifplante4.svg" alt="motif de plante">
                </div>
                
            </div>
        </section>
    </main>
<?php get_footer() ?>
</body>
</html>

