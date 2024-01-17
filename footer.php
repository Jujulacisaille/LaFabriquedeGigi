<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <footer>
    <?php 
      $mediatext = get_field('media_text','options');
      $logo = get_field('logo', 'options');
      $logotext = get_field('logo_text', 'options');
      $number = get_field('phone_number','options');
      $contacttext = get_field('contact_text','options');
      $legalmentionlink = get_field('legal_mentions_link','options');
      $faqlink = get_field('faq_link','options');

      ?>
        
        <div class="media">
            <p> <?php echo $mediatext ?></p> 
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/footer/pointillessuivezmoi.svg" alt="motif de séparation">
            <div class="logo-link">
                <a href="https://www.instagram.com/la_fabrique_de_gigi/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/footer/logoinsta.svg" alt="logo instagram"></a>
                <a href="https://www.facebook.com/profile.php?id=100063619991234&locale=fr_FR"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/footer/logofacebook.svg" alt="logo facebook"></a>
                <a href="https://www.etsy.com/shop/LaFabriquedeGigi"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/footer/logoetsy.svg" alt="logo etsy"></a>
            </div>
        </div>
        <div class="logo">
            <img src="<?php echo($logo['sizes']['thumbnail'])?>"
            alt="<?php echo($logo['alt']) ?>"/>
            <p><?php echo $logotext ?></p>
            <div class="other-pages">
                <a href="<?php echo($legalmentionlink['url'])?>"><?php echo ($legalmentionlink['title'])?></a>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/footer/rondfooter.svg" alt="motif rond">
                <a href="<?php echo($faqlink['url'])?>"><?php echo ($faqlink['title'])?></a>
            </div>
        </div>
        
        <div class="contact">
            <h3> <?php echo $contacttext?></h3>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/footer/pointillescontacts.svg" alt="motif de séparation">
            <p><?php echo $number ?></p>
            <p><?php echo esc_html( antispambot( get_field('email','options' ) ) ); ?></p>
        </div>
    
        
    </footer>
</body>
</html>