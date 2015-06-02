<div id="one-mariage">
    <div class="slider-mariage">
        <?= render ($content['field_image']); ?>
    </div>
    <div class="content-page">
        <h2><?= $title; ?></h2>
        <p class="contenu-texte"><?= render ($content['field_text2']); ?></p>
    </div>

    <div class="melting-pot liens-mariage">
        <div class="title">
            <div class="underline"><h3>Quelques suggestions</h3></div>
            <p>Nos liens et contacts utiles pour organiser votre journée!</p>
        </div>
        <?php
        $block = block_load('views', 'liens_mariage-block');
        $block = _block_get_renderable_array(_block_render_blocks(array($block)));
        print drupal_render($block);
        ?>
    </div>
</div>
