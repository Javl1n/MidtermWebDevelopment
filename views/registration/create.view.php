<?php 
     require_once base_path("views/partials/head.partial.php");
?>

<div id="session">
     <div class="container screen-card">
          <div class="row height-100">
               <div class="col-7 feature align-items-center">
                    <?= file_get_contents('src/svg/bda.svg'); ?>
               </div>
               <div class="col-5 paddingx-60 align-items-center">
                    <div class="session">
                         <div class="header">
                              <?= file_get_contents('src/svg/profile_fill.svg'); ?>
                              <h1 class="fw-bold text-center">
                                   Register
                              </h1>
                         </div>
                         <div class="row">
                              <form action="/registration" method="post">
                                   <div class="group-input">
                                        <span><?= file_get_contents('src/svg/one-outline.svg'); ?></span>
                                        <input name="fullName" type="text" placeholder="Full Name" value="<?= isset($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : '' ?>" required>
                                        <div class="danger"><?= $errors['fullName'] ?? '' ?></div>
                                   </div>
                                   <div class="group-input">
                                        <span><?= file_get_contents('src/svg/two-outline.svg'); ?></span>
                                        <input name="username" type="text" placeholder="Username" value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>" required>
                                        <div class="danger"><?= $errors['username'] ?? '' ?></div>
                                   </div>
                                   <div class="group-input">
                                        <span><?= file_get_contents('src/svg/three-outline.svg'); ?></span>
                                        <input name="password" type="password" placeholder="Password" required>
                                        <div class="danger"><?= $errors['password'] ?? '' ?></div>
                                   </div>
                                   <button type="submit" name="submit" class="button-wide button-primary fw-semibold fs-5">
                                        Register
                                   </button>
                                   <p class="text-center">Already have an account? <a class="fw-semibold" href="/session">Login</a></p>
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