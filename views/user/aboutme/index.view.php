<div class="about-me p-5 mb-5">
     <h3 class="fw-semibold mb-3">About me</h3>
     <p class="aboutfield field">
          <?= $user['about_me'] ?? 'Tell us more about yourself...' ?>
     </p>
     <form action="/aboutme/edit" method="get" class="d-flex justify-content-end">
          <?php if(urlIs('/')) : ?>
          <button class="button button-primary fw-bold" href="#">Edit</button>
          <?php endif; ?>
     </form>
</div>