<div class="comment p-5 mb-0">
     <h3 class="fw-semibold mb-3">Comment about this site</h3>
     <form action="/comment" method="post">
          <input type="hidden" name="_method" value="PUT">
          <textarea name="comment" class="commentfield field"
               placeholder="Please leave a review to our site..."><?= $user['comment'] ?? '' ?></textarea>
          <div class="d-flex justify-content-end">
               <button class="button button-accent-outline fw-bold" href="#">Save</button>
          </div>
     </form>
</div>