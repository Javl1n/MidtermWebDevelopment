<?php
require_once base_path("views/partials/head.partial.php");
?>

<div class="container-fluid mt-4 pt-3">
     <div class="row justify-content-center">
          <div class="col-12">
               <div class="calculator p-5">
                    <div class="container-fluid">
                         <div class="row mb-0 justify-content-between">
                              <div class="col-5">
                                   <h1 class="h1 fw-semibold">
                                        Average Calculator
                                   </h1>
                              </div>
                              <div class="col-4 mt-0 p-0">
                                   <form action="/php/calculator" class="d-flex justify-content-end" method="get">
                                        <button class=" mt-0 button button-accent fw-bold">
                                             Go back
                                        </button>
                                   </form>
                              </div>
                         </div>
                         <div class="row mb-0">
                              <h1 class="text-center fw-bold average-title">
                                   Average:
                              </h1>
                              <p class="text-center average-result fw-bold mt-0 pt-0">
                                   <?= $average ?? '' ?>
                              </p>
                         </div>
                         <div class="row">
                              <h2 class="text-center">
                                   Sum: <?= $sum ?? '' ?>
                              </h2>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>

<?php
require_once base_path("views/partials/foot.partial.php");
?>