<?php 
     require_once base_path("views/partials/head.partial.php");
?>
<div class="container-fluid mt-5">
     <div class="row ps-3 pe-2">
          <?php
               if(urlIs('/user/edit')) {
                    require base_path("views/user/edit.view.php");
               } else {
                    require base_path("views/user/index.view.php");
               }
          ?>
          <div class="col-6 card-height">
               <?php 
               if(urlIs("/aboutme/edit")) {
                    require_once base_path("views/user/aboutme/edit.view.php"); 
               } else {
                    require base_path("views/user/aboutme/index.view.php");
               }
               ?>
               <?php 
               if(urlIs("/comment/edit")) {
                    require_once base_path("views/user/comment/edit.view.php");
               } else {
                    require base_path("views/user/comment/index.view.php");
               }
               ?>
          </div>
     </div>
</div>
<?php
     require_once base_path("views/partials/foot.partial.php");
?>