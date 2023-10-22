<?php
require_once base_path("views/partials/head.partial.php");
?>

<div class="container-fluid mt-5">
     <div class="card card-height bg-dark text-white p-4">
          <h1>Your Files</h1>
          <table class="table table-dark table-striped">
               <thead>
                    <tr>
                         <th scope="col">#</th>
                         <th scope="col">Title</th>
                         <th scope="col">Date</th>
                         <th scope="col">Option</th>
                    </tr>
               </thead>
               <?php if(!empty($files)) : ?>
               <?php foreach($files as $file): ?>
               <tbody>
                    <tr>
                         <th scope="row"><?= $file['id'] ?></th>
                         <td>Mark</td>
                         <td>Otto</td>
                         <td>@mdo</td>
                    </tr>
               </tbody>
               <?php endforeach; ?>
               <?php endif; ?>
          </table>
          <?php if(empty($files)) : ?>
          <div class="row m-auto text-center">
               <h1>No files</h1>
               <a href="/file-manager/file">Add Files</a>
          </div>
          <?php endif; ?>
     </div>
</div>

<?php
require_once base_path("views/partials/foot.partial.php");
?>