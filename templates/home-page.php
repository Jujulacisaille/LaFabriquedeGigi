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

            $leftpiclink = get_field('left_picture_link');
            $rightpiclink =  get_field('right_picture_link');
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
            <a href="<?php echo ($leftpiclink['url'])?>"><?php echo ($leftpiclink['title'])?></a>
                <h1> <?php echo $titlepic ?></h1>
                <h2><?php echo $subtitlepic ?></h2>
                <a href="<?php echo ($rightpiclink['url'])?>"><?php echo ($rightpiclink['title'])?></a>
            </div>
            <h3><?php echo $titlearticle ?></h3>
            <a href="<?php echo($readmorebutton['url'])?>"><?php echo ($readmorebutton['title']) ?></a>
            <div class="story-galery">
                <div class="story">
                    <h3><?php echo $storytitle?></h3>
                    <div class="story-description">
                        <?php echo($storydescription) ?>
                    </div>
                    <?php //d($abtmebutton)?>
                    <a href="<?php echo($abtmelink['url'])?>"><?php echo ($abtmelink['title'])?></a>

                </div>
                <div class="galery">
                <?php if( $galery ): ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/motifplante1.svg" alt="motif de plante">
                    <ul>
                        <?php foreach( $galery as $image ): ?>
                            <li>
                                <a href="<?php echo esc_url($image['url']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                                <p><?php echo esc_html($image['caption']); ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/motifplante2.svg" alt="motif de plante">
                <?php endif; ?>
                </div>
            </div>
        </section>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/separation-1.svg" alt="motif de séparation">
        <section>
            <?php 
                $jwlrypic=get_field('jewellery_picture');
                //d($jwlrypic);
                $jwlrylink = get_field('jewellery_link');
                
               
            ?>
            <div class="jewellery">
                <div class="jewellery_picture">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/motifplante3.svg" alt="motif de plante">
                    <img loading="lazy" src="<?php echo($jwlrypic['sizes']['medium_large'])?>" alt="<?php echo($jwlrypic['alt'])?>">
                    <a href="<?php echo($jwlrylink['url'])?>"><?php echo($jwlrylink['title'])?></a>
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
                                    <img loading="lazy" src="<?php echo($piccategory['sizes']['medium_large'])?>" alt="<?php echo($piccategory['alt'])?>">
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
        </section>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/separation2.svg" alt="motif de séparation">
        <section>
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
                                        <img loading="lazy" src="<?php echo($piccategory['sizes']['medium_large'])?>" alt="<?php echo($piccategory['alt'])?>">
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/home/motifplante4.svg" alt="motif de plante">
                    <img loading="lazy" src="<?php echo($swngpic['sizes']['medium_large'])?>" alt="<?php echo($swngpic['alt'])?>">
                    <a href="<?php echo($swnglink['url'])?>"><?php echo($swnglink['title'])?></a>
                </div>
                
            </div>
        </section>
    </main>
<?php get_footer() ?>
</body>
</html>

