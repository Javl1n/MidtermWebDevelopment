<?php

use Core\App;
use Core\Database;

$username = $_POST['username'];
$password = $_POST['password'];

$db = App::resolve(Database::class);

$errors = [];

// check if user exist
$usernameQuery = $db->query('SELECT * FROM user WHERE username = :username', [
     'username' => $username,
])->find();
if (!$usernameQuery) {
     $errors['username'] = 'User not found.';
} 
// check if password is correct
else {
     if (!password_verify($password, $usernameQuery['password'])) {
          $errors['password'] = 'Incorrect password';
     }
}

// error catching
if(!empty($errors)) {
     return view('session/create.view.php', [
          'errors'=> $errors,
          'title' => 'Register'
     ]);
}

login([
     'username' => $username
]);

header('location: /');
exit();

