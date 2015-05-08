<!--block cadeau qui charge une colorbox e-commerce-->
<div class="front_booking" id="colorbox-booking">
    <a href="#colorbox1" class="show_cb1 front">
        <div class="img"><?= $fields ['field_cadeau']->content; ?></div>
        <div class="front-cadeau"><?= $fields ['field_phrase']->content; ?></div>
    </a>
    <div style="display: none;">
        <div id="colorbox1">
            <?php
            $block = block_load('rooms_booking_manager', 'rooms_availability_search');
            $block = _block_get_renderable_array(_block_render_blocks(array($block)));
            print drupal_render($block);
            ?>
        </div>
    </div>
</div>