<div class="row">
    <div class="wrapper-container">
        <div class="row">
            <div class="col-xs-12">
                <?= render ($content['field_image']); ?>
            </div>
        </div>
    </div>

    <div class="content-page">
        <div class="contenu-node">
            <h2><?= $title; ?></h2>
            <p class="contenu-texte"><?= render ($content['field_texte']); ?></p>
        </div>


        <?php
        include('reserver.php');
        ?>
        <div class="clearfix"></div>
    </div>
    <div class="melting-pot">
        <div class="title">
            <div class="underline"><h3>Faits de Vie</h3></div>
            <p>Quelques news et pensées issues de la forge</p>
        </div>
        <?php
        $block = block_load('views', 'melting_pot2-block');
        $block = _block_get_renderable_array(_block_render_blocks(array($block)));
        print drupal_render($block);
        ?>
    </div>
</div>