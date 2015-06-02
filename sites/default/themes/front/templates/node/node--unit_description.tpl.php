<div class="row">
    <div class="wrapper-container">
        <div class="row">
            <div class="col-xs-12" style="margin:50px 0px;">
                <?= render ($content['unit_description_image']); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <h2> <?= render ($content['field_phrase']); ?></h2>
                <p><?= render ($content['field_nombre_de_lits']); ?> personnes</p>
                <p class="contenu-texte"><?= render ($content['unit_description_description']); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 " style="margin-top:50px; padding:30px 0px; border-top: solid 1px #08997F">
                <?php
                $block = block_load('rooms_booking_manager', 'rooms_availability_search');
                $block = _block_get_renderable_array(_block_render_blocks(array($block)));
                print drupal_render($block);
                ?>
            </div>
        </div>
    </div>
</div>
