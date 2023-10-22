<?php
require_once base_path("views/partials/head.partial.php");
?>

<div class="container-fluid h-100 px-5">
     <div class="row">
          <h1 class="text-center py-5 fw-bold">
               About Us
          </h1>
     </div>
     <?php $i = 1; foreach($us as $me) :?>
     <div class="row py-5 mb-5">
          <?php if($i%2 === 0) :?>
          <div class="col-4">
               <img src="/src/images/<?= $me['image'] ?>.jpg" class="img-fluid rounded-5 w-100" alt="asdad">
          </div>
          <div class="col-8 m-auto ps-5">
               <h1 class="h2 fw-bold">
                    <?= $me['name'] ?>
               </h1>
               <p class="h3 h-75 pt-2">
                    <?= $me['description'] ?>
               </p>
          </div>
          <?php else:?>
          <div class="col-8 m-auto pe-5">
               <h1 class="h2 fw-bold">
                    <?= $me['name'] ?>
               </h1>
               <p class="h3 h-75 pt-2">
                    <?= $me['description'] ?>
               </p>
          </div>
          <div class="col-4">
               <img src="/src/images/<?= $me['image'] ?>.jpg" class="img-fluid rounded-5 w-100" alt="asdad">
          </div>
          <?php endif; $i++; ?>
     </div>
     <?php endforeach; ?>

</div>

<?php
require_once base_path("views/partials/foot.partial.php");
?>