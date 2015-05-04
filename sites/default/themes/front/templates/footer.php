<footer class="page-footer">     
  <div class="bottom-menu">
  <h4><?= $site_name ?></h4>
  <?php
    $block = block_load('menu', 'menu-bottom-menu');
    $block = _block_get_renderable_array(_block_render_blocks(array($block)));
    print drupal_render($block);
  ?>
  </div>
  <div class="reseaux-sociaux">
      <h4>... is everywhere</h4>
    <?php
      $block = block_load('views', 'r_seau_soc-block');
      $block = _block_get_renderable_array(_block_render_blocks(array($block)));
      print drupal_render($block);
    ?>
  </div>
  <div class="rechercher">
  <?php
  $block = module_invoke('search', 'block_view', 'search');
  print render($block);
  ?>
  </div>
</footer>