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
    /*Template Name: Qui suis je */
    get_header(); ?>
    <main>
        <section>
            <?php 
                $title = get_field('title');
                $creatorsubtitle = get_field('creator_subtitle');
                $creatordesc = get_field('creator_description');
                $creatorpicture = get_field('customer_picture');
                $customerquote = get_field('customer_quote');
                
             ?>
            <div class="title">
                <h1> <?php echo $title?></h1>
                <img src="wp-content\themes\La-Fabrique-de-Gigi-theme\src\images\about_me\motifplante1.svg" alt="motif de plante">
            </div>
            <div class="general-story">
                <div class="story-text">
                    <h2><?php echo $creatorsubtitle?><h2>
                    <div class="creator-description">
                        <?php echo $creatordesc ?>
                    </div>
                </div>
                <img loading="lazy" src="<?php echo($creatorpicture['sizes']['medium_large'])?>" alt="<?php echo($creatorpicture['alt'])?>">
                <div class="customer_quote">
                    <?php echo $customerquote?>
                </div>
            </div>
        </section>
        <section>
            <?php
                $sewingpicture = get_field('sewing_picture');
                $sewingsubtitle = get_field('sewing_subtitle');
                $sewingdesc = get_field('sewing_description');
                $jewellerypicture = get_field('jewellery_picture');
                $jewellerysubtitle = get_field('jewellery_subtitle');
                $jewellerydesc = get_field('jewellery_description');
                $deliverylink = get_field('delivery_button');
            ?>
            <div class="sewing">
                <div class="sewing-picture">
                    <img loading="lazy" src="<?php echo($sewingpicture['sizes']['medium_large'])?>" alt="<?php echo($sewingpicture['alt'])?>">
                    <img src="wp-content\themes\La-Fabrique-de-Gigi-theme\src\images\about_me\motifplante2.svg" alt="motif de plante">
                </div>
                <div class="sewing-text">
                    <h2><?php echo $sewingsubtitle?><h2>
                    <div class="sewing-desc">
                        <?php echo $sewingdesc?>
                    </div>
                </div>
            </div>
            <div class="jewellery">
                
                <div class="jewellery-text">
                    <h2><?php echo $jewellerysubtitle?></h2>
                    <div class="sewing-desc">
                        <?php echo $jewellerydesc?>
                    </div>
                </div>
                <img loading="lazy" src="<?php echo($jewellerypicture['sizes']['medium_large'])?>" alt="<?php echo($jewellerypicture['alt'])?>">
                    
            </div>
            <a href="<?php echo($deliverylink['url'])?>"><?php echo($deliverylink['title'])?></a>
            
        </section>
        <img src="wp-content\themes\La-Fabrique-de-Gigi-theme\src\images\about_me\separation.svg" alt="motif de séparation">
        <section>
            <?php 
                $mediatext = get_field('media_text');
                $instalink = get_field('insta_link');
                $fblink = get_field('facebook_link');
            
            ?>
            <div class="media">
                <img src="wp-content\themes\La-Fabrique-de-Gigi-theme\src\images\about_me\motifplante3.svg" alt="motif de plante">
                <div class="social-media">
                    <h3><?php echo $mediatext ?></h3>
                    <div class="media-logo">
                        <div class="insta-logo">
                            <img src="wp-content\themes\La-Fabrique-de-Gigi-theme\src\images\about_me\instalogo.svg" alt="logo instagram">
                            <a href="<?php echo($instalink['url'])?>"><?php echo($instalink['title'])?></a>
                        </div>
                        <div class="fb-logo">
                            <img src="wp-content\themes\La-Fabrique-de-Gigi-theme\src\images\about_me\fblogo.svg" alt="logo facebook">
                            <a href="<?php echo($fblink['url'])?>"><?php echo($fblink['title'])?></a>
                        </div>
                    </div>
                </div>
                <img src="wp-content\themes\La-Fabrique-de-Gigi-theme\src\images\about_me\motifplante4.svg" alt="motif de plante">
            </div>
        </section>
    </main>
    <?php get_footer(); ?>
</body>
</html>