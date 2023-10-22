<div class="col-6 profile-card card-height text-center pt-5 paddingx-100">
     <?= file_get_contents('src/svg/profile-circle.svg') ?>
     <form action="/user/edit" method="post" class="">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="id" value="<?= $user['id'] ?>">
          <input type="text" name="username" value="<?= $user['username'] ?>"
               class=" h1 mt-4 mb-5 fw-bold username-input"></h1>
          <div class="row text-start mb-4">
               <div class="col-3">
                    <h3>Name</h3>
               </div>
               <div class="col">
                    <input type="text" class="fw-semibold h3 user-input" name='full_name'
                         value="<?= $user['full_name'] ?>">

               </div>
          </div>
          <div class="row text-start mb-4">
               <div class="col-3">
                    <h3>Email</h3>
               </div>
               <div class="col">
                    <input type="email" class="fw-semibold h3 user-input" name='email'
                         value="<?= $user['email'] ?? '' ?>">
               </div>
          </div>
          <div class="row text-start mb-4">
               <div class="col-3">
                    <h3>Birthday</h3>
               </div>
               <div class="col">
                    <input type="text" class="fw-semibold h3 user-input" name='birthday' placeholder="January 1, 2000"
                         value="<?= $user['birthday'] ?? '' ?>">
               </div>
          </div>
          <button class="button-wide button-background fw-semibold fs-5">
               Save
          </button>
     </form>
</div>