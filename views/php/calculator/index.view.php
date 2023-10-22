<?php
require_once base_path("views/partials/head.partial.php");
?>

<div class="container-fluid mt-4 pt-3">
     <div class="row justify-content-center">
          <div class="col-12">
               <div class="calculator p-5">
                    <div class="container-fluid">
                         <div class="row mb-0">
                              <div class="col-5">
                                   <h1 class="h1 fw-semibold">
                                        Average Calculator
                                   </h1>
                              </div>
                              <div class="col-9">
                                   <h1 class="danger">
                                        <?= $errors['number'] ?? '' ?>
                                   </h1>
                              </div>

                         </div>
                         <div class="row">
                              <form action="/calculator/result" method="POST">
                                   <div class="row">
                                        <div class="col-6 mt-0">
                                             <?php for($i = 1; $i <= 3; $i++): ?>
                                             <div class="row my-5 ps-2">
                                                  <div class="col-2 m-auto ps-4">
                                                       <span class="calculator-number">
                                                            <?= file_get_contents("src/svg/$i-outline.svg"); ?>
                                                       </span>
                                                  </div>
                                                  <div class="col-10">
                                                       <input class="calculator-input" type="text" name="<?= $i ?>"
                                                            required>
                                                  </div>
                                             </div>
                                             <?php endfor; ?>
                                        </div>
                                        <div class="col-6 mt-0">
                                             <?php for($i = 4; $i <= 6; $i++): ?>
                                             <div class="row my-5 ps-2">
                                                  <div class="col-2 m-auto ps-4">
                                                       <span class="calculator-number">
                                                            <?= file_get_contents("src/svg/$i-outline.svg"); ?>
                                                       </span>
                                                  </div>
                                                  <div class="col-10">
                                                       <input class="calculator-input" type="text" name="<?= $i ?>"
                                                            required>
                                                  </div>
                                             </div>
                                             <?php endfor; ?>
                                        </div>
                                        <div class="row mt-0 p-0 justify-content-center">
                                             <button class="calculator-button">
                                                  ENTER
                                             </button>
                                        </div>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>

<?php
require_once base_path("views/partials/foot.partial.php");
?>