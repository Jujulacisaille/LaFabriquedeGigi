
<?php

/* Template name: Produit */
$flexible_contents = get_field('flex');

foreach ($flexible_contents as $content) {
  $template_name = $content['acf_fc_layout'];
  $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);

  if (file_exists($template_file)) {
    
    printf('<section class="layout_%s">', $template_name);
    include($template_file);
    printf('</section>');
  }

}
?>
