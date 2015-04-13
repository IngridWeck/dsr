<div class="front container">
  <div class="container-2">
    <!-- Navigation -->
    <?php

        include ("main-menu.php");
        include ("get-mail.php");
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
        <div class="front-quot">
        <?php
        $block = block_load('views', 'quotidien-block');
        $block = _block_get_renderable_array(_block_render_blocks(array($block)));
        print drupal_render($block);
        ?>
        </div>
        <div class="block-front-reserver">
          <div class="block-cadeau">
            <?php
            $block = block_load('views', 'front_cadeau-block');
            $block = _block_get_renderable_array(_block_render_blocks(array($block)));
            print drupal_render($block);
            ?>
          </div>
          <div class="block-form">
            <form action="get-mail.php" method="GET" class="front-form-fake">
              <h2>Réservez votre séjour !</h2>
              <label>Date du séjour</label>
              <input name="date" type="date" class="datepicker" placeholder="JJ/MM/AAAA"/>
              <label class="jusque">à</label>
              <input name="jusque" type="date" class="datepicker"/>
              <label>Gîte</label>
                <select name="gite">
                  <option value="gai_logis">Gai Logis (5 lits)</option>
                  <option value="les_capucins">Les Capucins (22 lits)</option>
                  <option value="la_conciergerie">La Conciergerie (6 lits)</option>
                </select> 
              <!--input type="button" value="Réserver" class="show_cb"-->
              <a href="#colorbox" class="show_cb">Réserver</a>
            </form>
            <div style="display: none;">
              <div id="colorbox">
              <!--webform (js: oncklick afficher colorbox et display information in input)-->
              <?php
                $block = block_load('views', 'webform-block');
                $block = _block_get_renderable_array(_block_render_blocks(array($block)));
                print drupal_render($block);
              ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="melting-pot">
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