<?php
require_once base_path("views/partials/head.partial.php");
?>

<div class="container-fluid mt-5">
     <div class="card card-height bg-dark text-white p-4">
          <h1>Upload file</h1>
          <form data-bs-theme="dark" method="post" action="/file-manager/file" enctype="multipart/form-data">
               <div class="row">
                    <div class="col">
                         <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Title</label>
                              <input type="text" class="form-control bg-dark text-white" name="title"
                                   aria-describedby="title" required>
                         </div>
                    </div>
                    <div class="col">
                         <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">File</label>
                              <input class="form-control" type="file" name="file" required>
                         </div>
                    </div>
               </div>
               <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea name="description" id="" cols="30" rows="22" class="form-control" name="description"
                         required></textarea>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
          </form>
     </div>
</div>

<?php
require_once base_path("views/partials/foot.partial.php");
?>