<div class="col-6 profile-card card-height text-center pt-5 paddingx-100">
     <?= file_get_contents('src/svg/profile-circle.svg') ?>
     <h1 class="mt-4 mb-5 fw-bold"><?= strtoupper($user['username']) ?></h1>
     <div class="row text-start mb-4">
          <div class="col-3">
               <h3>Name</h3>
          </div>
          <div class="col">
               <h3 class="fw-semibold">
                    <?= $user['full_name'] ?>
               </h3>
          </div>
     </div>
     <div class="row text-start mb-4">
          <div class="col-3">
               <h3>Email</h3>
          </div>
          <div class="col">
               <h3 class="fw-semibold">
                    <?= $user['email'] ?? 'Not set' ?>
               </h3>
          </div>
     </div>
     <div class="row text-start mb-4">
          <div class="col-3">
               <h3>Birthday</h3>
          </div>
          <div class="col">
               <h3 class="fw-semibold">
                    <?= $user['birthday'] ?? 'Not set' ?>
               </h3>
          </div>
     </div>
     <form action="user/edit" method="get" class="d-flex justify-content-end">
          <?php if(urlIs('/')): ?>
               <button type="submit" class="button-wide button-background fw-semibold fs-5">
                    Edit
               </button>
          <?php endif; ?>
     </form>
</div>
