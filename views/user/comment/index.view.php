<div class="comment p-5 mb-0">
<h3 class="fw-semibold mb-3">Comment about this site</h3>
     <p class= "commentfield field" >
          <?= $user['about_me'] ?? 'Please leave a review to our site..' ?>
     </p>
     <form action="/comment/edit" method="get" class="d-flex justify-content-end">
          <?php if(urlIs('/')) : ?>
          <button class="button button-accent-outline fw-bold" href="#">Edit</button>
          <?php endif; ?>
     </form>
</div>