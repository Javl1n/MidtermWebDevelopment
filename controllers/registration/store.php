<?php

use Core\App;
use Core\Database;
use Core\Validator;

$fullName = $_POST['fullName'];
$username = $_POST['username'];
$password = $_POST['password'];

$db = App::resolve(Database::class);

$errors = [];
// check for unique username
     $usernameQuery = $db->query('SELECT username FROM user WHERE username = :username', [
          'username'=> $username,
     ])->find();
     if ($usernameQuery) {
          $errors['username'] = 'username already taken';
     }

//check if password is too short
     $passwordValidate = Validator::string($password, 7);
     if (!$passwordValidate) {
          $errors['password'] = 'password too short';
     }

// error catching
if (!empty($errors)) {
     return view('registration/create.view.php', [
          'errors'=> $errors,
          'title' => 'Register'
     ]);
}

$db->query('INSERT INTO user(full_name, username, password) VALUES (:fullName, :username, :password)', [
     'username' => $username,
     'password' => password_hash($password, PASSWORD_BCRYPT),
     'fullName' => $fullName,
]);

login([
     'username' => $username
]);

header('location: /');
exit();