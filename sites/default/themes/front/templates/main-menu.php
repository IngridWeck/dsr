
<div class="front-large-menu front-header">
<!--large-->
  <div  class="top-left left">
    <img class= "front-logo" src="<?= $logo ?>" alt="<?= $site_name ?>"/>
    <h1><?= $site_name ?></h1>
  </div>
  <div class="top-right right">
    <div class="language right" > 
      <?php
      $block = block_load('locale', 'language');
      $block = _block_get_renderable_array(_block_render_blocks(array($block)));
      print drupal_render($block);
      ?>
    </div>
    <div class="main-menu">
      <?php
      $block = block_load('superfish', '1');
      $block = _block_get_renderable_array(_block_render_blocks(array($block)));
      print drupal_render($block);
      ?>
    </div>
  </div> 
  <div class="clearfix"></div>
</div>