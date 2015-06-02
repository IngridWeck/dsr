<div id="one-article">
    <div class=""">
        <div class="slider-mariage">
            <div class="mariage-entreprise-image"><?= $fields ['field_image']->content; ?>
            </div>
        </div>
    </div>
    <div  style="width:80%; margin-left: auto; margin-right: auto;">
        <div class="" style="display:inline-block; width:60%; text-align:justify; vertical-align:top; ">
            <h2><?= $title; ?></h2>
            <div class="contenu-texte">
                <div class="mariage-entreprise-image"><?= $fields ['field_texte']->content; ?></div>
            </div>
        </div>


        <div class="" style="display:inline-block; width:34%; margin-left:50px; color:#fff; margin-top: 20px;" >

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
                <img src="/<?= drupal_get_path('theme','front')?>/img/logo200-bleu.png" />
            </div>
        </div>
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