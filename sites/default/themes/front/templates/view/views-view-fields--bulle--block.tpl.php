
<div class="bulle-sur-leau">
    <div class="description"><?= $fields ['unit_description_description']->content; ?></div>
    <div class="image"><?= $fields ['unit_description_image']->content; ?></div>
    <div class="reservation">
        <?php
        $block = block_load('rooms_booking_manager', 'rooms_availability_search');
        $block = _block_get_renderable_array(_block_render_blocks(array($block)));
        print drupal_render($block);
        ?>
    </div>
</div>