<div class="front masterpage" id="master-background">
  <div class="container-2" id="container">
    <?php
    include ("main-menu.php");
    ?>
    <!-- main content-->
      <div class="super-content-page" style="background-color:#fff">
          <div class="wrapper-container">
              <div id="master-page">
                      <?=render($page['content']); ?>
                  </div>
              </div>
          </div>
      </div>

    <!-- Page-footer -->
    <?php
      include ("footer.php");
    ?>
  </div>
</div>
