<div class="front container">
    <div class="container-2">
        <!-- Navigation -->
        <?php

        include ("main-menu.php");
        ?>
        <div class="diaporama">
            <img class=" " src="<?= drupal_get_path('theme', 'front') ?>/img/3L5A2058.jpg" width="100%"/>
            <img class=" " src="<?= drupal_get_path('theme', 'front') ?>/img/3L5A2014.jpg" width="100%"/>
            <img class=" " src="<?= drupal_get_path('theme', 'front') ?>/img/3L5A2107.jpg" width="100%"/>
            <img class=" " src="<?= drupal_get_path('theme', 'front') ?>/img/3L5A2122.jpg" width="100%"/>
            <img class=" " src="<?= drupal_get_path('theme', 'front') ?>/img/3L5A2147.jpg" width="100%"/>
            <img class=" " src="<?= drupal_get_path('theme', 'front') ?>/img/3L5A2165.jpg" width="100%"/>
            <img class=" " src="<?= drupal_get_path('theme', 'front') ?>/img/3L5A2196.jpg" width="100%"/>
            <img class=" " src="<?= drupal_get_path('theme', 'front') ?>/img/3L5A2242.jpg" width="100%"/>
        </div>
        <!-- main content-->
        <div class="front-main-content">

            <div class="front-sub-main-content">
                <div class="block-front-reserver">

                    <div class="block-form">
                        <form class="front-form-fake">
                        <h2>Réservez votre séjour !</h2>
                            <label>Date du séjour</label>
                            <input name="date"  type="text"  id="superDate" value="17.05.2016"/>
                            <label class="jusque">à</label>
                            <input name="date1" type="text" id="superDate1" value="30.05.2016" />
                            <label>Gîte</label>
                            <select id="superSelect" name="gite">
                                <option value="Le Gai Logis">Gai Logis (5 lits)</option>
                                <option value="Les Capucins">Les Capucins (22 lits)</option>
                                <option value="La Conciergerie">La Conciergerie (6 lits)</option>
                                <option value="la Sphair">La Sphair (2 pers.)</option>
                            </select>
                            <a href="#colorbox" class="show_cb" onclick="mailReserve()">Reserver</a>
                        </form>

                        <div style="display: none;">
                            <div id="colorbox">
                                <div class="explication">
                                    <p>La réservation n'est validée qu'après payement. Pour disposer des informations banquaires du domaine et consulter les disponibilités, merci de nous renvoyer ce formulaire de contact. N'hésitez pas à nous envoyer un message pour recevoir plus d'informations.</p>
                                </div>

                                <?php
                                $block = block_load('views', 'webform-block');
                                $block = _block_get_renderable_array(_block_render_blocks(array($block)));
                                print drupal_render($block);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="block-cadeau">
                        <?php
                        $block = block_load('views', 'front_cadeau-block');
                        $block = _block_get_renderable_array(_block_render_blocks(array($block)));
                        print drupal_render($block);
                        ?>
                    </div>
                    <div class="block-map">
                        <h2>Sur la route du Domaine</h2>
                        <p>carte et contact</p>
                        <img src="/<?= drupal_get_path('theme','front')?>/img/logo200-bleu.png" >
                    </div>
                </div>
            </div>
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

        <!-- Page-footer -->
        <?php
        include ("footer.php");
        ?>
    </div>
</div>