<?php 
     require_once base_path("views/partials/title.partial.php");
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
                                   Login
                              </h1>
                         </div>
                         <div class="row">
                              <form action="/session" method="post">
                                   <div class="group-input">
                                        <span><?= file_get_contents('src/svg/profile_fill.svg'); ?></span>
                                        <input name="username" type="text" placeholder="Username" value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>" required>
                                        <div class="danger"><?= $errors['username'] ?? '' ?></div>
                                   </div>
                                   <div class="group-input">
                                        <span><?= file_get_contents('src/svg/shield-fill.svg'); ?></span>
                                        <input name="password" type="password" placeholder="Password" required>
                                        <div class="danger"><?= $errors['password'] ?? '' ?></div>
                                   </div>
                                   <button type="submit" name="submit" class="button-wide button-primary fw-semibold fs-5">
                                        Login
                                   </button>
                                   <p class="text-center">Don't have an account? <a class="fw-semibold" href="/registration">Register</a></p>
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