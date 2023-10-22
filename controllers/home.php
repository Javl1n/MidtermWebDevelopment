<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$user = $db->query("SELECT id, full_name, username, email, birthday, about_me, comment FROM user WHERE username = :username", [
     "username"=> $_SESSION['user']['username'],
])->find();

view('home.view.php', [
     'title'=> 'Home',
     'user'=> $user,
]);
?>