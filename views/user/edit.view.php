<?php 
     require_once base_path("views/partials/head.partial.php");
?>
<div class="container-fluid">
<div class="row">
     <div class="col-3">
          <?php
               require_once base_path("views/partials/nav.partial.php");
          ?>
     </div>
     <div class="col-9">
          <div class="container-fluid mt-5">
               <div class="row ps-3 pe-2">
                    <div class="col-6 profile-card card-height text-center pt-5 paddingx-100">
                         <?= file_get_contents('src/svg/profile-circle.svg') ?>
                         <form action="/user/edit" method="post" class="">

                         <input type="text" name="username" value="<?= $user['username'] ?>" class=" h1 mt-4 mb-5 fw-bold username-input"></h1>
                         <div class="row text-start mb-4">
                              <div class="col-3">
                                   <h3>Name</h3>
                              </div>
                              <div class="col">
                                   <input type="text" class="fw-semibold h3 user-input" name='full_name' value="<?= $user['full_name'] ?>">
                                        
                              </div>
                         </div>
                         <div class="row text-start mb-4">
                              <div class="col-3">
                                   <h3>Email</h3>
                              </div>
                              <div class="col">
                                   <input type="email" class="fw-semibold h3 user-input" name='email' value="<?= $user['email'] ?? '' ?>">
                              </div>
                         </div>
                         <div class="row text-start mb-4">
                              <div class="col-3">
                                   <h3>Birthday</h3>
                              </div>
                              <div class="col">
                                   <input type="email" class="fw-semibold h3 user-input" name='email' value="<?= $user['birthday'] ?? '' ?>">
                              </div>
                         </div>
                              <button type="submit" name="submit" class="button-wide button-background fw-semibold fs-5">
                                   Save
                              </button>
                         </form>
                    </div>
                    <div class="col-6 card-height">
                         <div class="about-me p-5 mb-5">
                              <h3 class="fw-semibold mb-3">About me</h3>
                              <p>
                                   <?= $user['about_me'] ?? 'Tell us more about yourself...' ?>
                              </p>
                              <form action="/edit" method="get" class="d-flex justify-content-end">
                                   <button class="button button-primary fw-bold" href="#">Edit</button>
                              </form>
                         </div>
                         <div class="comment p-5 mb-0">
                         <h3 class="fw-semibold mb-3">Comment about this site</h3>
                              <p>
                                   <?= $user['about_me'] ?? 'Tell us more about yourself...' ?>
                              </p>
                              <form action="/edit" method="get" class="d-flex justify-content-end"><button class="button button-accent-outline fw-bold" href="#">Edit</button></form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
</div>
<?php

     require_once base_path("views/partials/foot.partial.php");
?>