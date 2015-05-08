<div class="front masterpage container" id="master-background">
  <div class="container-2">
    <?php
    include ("main-menu.php");
    ?>
    <!-- main content-->

    <div class="main-content">
      <?=render($page['content']); ?>
    </div>

    <!-- Page-footer -->
    <?php
      include ("footer.php");
    ?>
  </div>
</div>
