
<!-- vue page quotidien -->
 <div class="main-content">
	<div class="quotidien-block" >
	<?php
	    $block = block_load('views', 'quotidien-block_1');
	    $block = _block_get_renderable_array(_block_render_blocks(array($block)));
	    print drupal_render($block);
	?>
	</div>
	<div class="sub-main-content">
		<div class= "super-contenu-vue">
			<?php if (!empty($title)): ?>
			  <h3><?php print $title; ?></h3>
			<?php endif; ?>
			<?php foreach ($rows as $id => $row): ?>
		  	<div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
		    	<?php print $row; ?>
		  	</div>
			<?php endforeach; ?>
		</div>
		<div class="block-right">
			<div class="block-front-reserver">
	          	<div class="block-cadeau">
	            <?php
	            $block = block_load('views', 'front_cadeau-block');
	            $block = _block_get_renderable_array(_block_render_blocks(array($block)));
	            print drupal_render($block);
	            ?>
	          	</div>
	        <div class="block-form">
	            <form action="" method="" class="front-form-fake">
	              <h2>Réservez votre séjour !</h2>
	              <label>Date du séjour</label>
	              <input name="date" type="date" class="datepicker" placeholder="JJ/MM/AAAA"/>
	              <label class="jusque">à</label>
	              <input name="jusque" type="date" class="datepicker"/>
	              <label>Gîte</label>
	                <select>
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
