<?php 

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$files = $db->query("SELECT * FROM `file` WHERE user_id = :user_id", [
     "user_id"=> $_SESSION['user']['id'],
])->find();


view("php/manager/index.view.php", [
     "files"=> $files,
     "title" => "File Manager"
]);