<div id="one-gite">
    <div class="slider-mariage"><?= render ($content['field_image']); ?></div>
    <div class="content-page">
        <div class="contenu-node">
            <h2><?= $title; ?></h2>
            <p><?= render ($content['field_nombre_de_lits']); ?></p>
            <p class="contenu-texte"><?= render ($content['body']); ?></p>
        </div>


        <?php
        include('reserver.php');
        ?>
</div>