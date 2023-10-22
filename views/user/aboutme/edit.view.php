<div class="about-me p-5 mb-5">
     <h3 class="fw-semibold mb-3">About me</h3>
     <form action="/aboutme" method="post">
          <input type="hidden" name="_method" value="PUT">
          <textarea name="aboutme" class="aboutfield field"
               placeholder="Tell me more about yourself..."><?= $user['about_me'] ?? '' ?></textarea>
          <div class="d-flex justify-content-end">
               <button class="button button-primary fw-bold" href="#">Save</button>
          </div>
     </form>
</div>