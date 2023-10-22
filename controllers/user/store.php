<?php

use Core\App;
use Core\Database;

$user['id'] = (int)$_POST['id'];
$user['username'] = $_POST['username'];
$user['fullName'] = $_POST['full_name'];
$user['email'] = $_POST['email'];
$user['birthday'] = $_POST['birthday'];

$db = App::resolve(Database::class);
$errors = [];



// validate if username is unique or is same with the user if not unique
$userQuery = $db->query("SELECT * FROM user WHERE username = :username", [
     "username" => $user['username']
])->find();

if ($userQuery) {
     if($userQuery["id"] !== $user['id']) {
          $errors['username'] = 'username already taken';
     }
}

// full name needs no validation


// email is already covered by html

// validate birthday: if in correct format (January 1, 2000)
$months = [
     "January",
     "Febuary",
     "March",
     "April",
     "May",
     "June",
     "July",
     "August",
     "September",
     "October",
     "November",
     "December",
];
$daysInMonth = [
     "January" => [
          "days" => 31,
     ],
     "Febuary" => [
          "days" => 28,
     ],
     "March" => [
          "days" => 31,
     ],
     "April" => [
          "days" => 30,
     ],
     "May" => [
          "days" => 31,
     ],
     "June" => [
          "days" => 30,
     ],
     "July" => [
          "days" => 31,
     ],
     "August" => [
          "days" => 31,
     ],
     "September" => [
          "days" => 30,
     ],
     "October" => [
          "days" => 31,
     ],
     "November" => [
          "days" => 30,
     ],
     "December" => [
          "days" => 31,
     ],
];
if(!empty($user['birthday'])) {
     // split the string into three
     $birthday = explode(" ", $user['birthday']);
     // check first part for a month, compare with an array
          //check if month is upper
          $birthday['month'] = $birthday[0];
          if(!preg_match('~^\p{Lu}~u',$birthday['month'])) {
               $errors['birthday']['month'] = 'Month must be formatted properly';
          } else if (!in_array($birthday['month'], $months)) {
               $errors['birthday']['month'] = 'Invalid Month';
          }
     // check that the date must not be greater than month limit
          $birthday['day'] = (int)rtrim($birthday[1],',');
          if(!($daysInMonth[$birthday['month']]) > ($birthday['day'])){
               $errors['birthday']['day'] = 'Invalid Day';
          }
     // divide the year by 10000, if greater than 0 then it is invalid
          $birthday['year'] = (int)$birthday[2]; 
          if(round($birthday['year']/10000, 0) > 0.0 ) {
               $errors['birthday']['year'] = 'Invalid Year';
          }
}

if(!empty($errors)) {
     $user = $db->query("SELECT id, full_name, username, email, birthday, about_me, comment FROM user WHERE username = :username", [
          "username"=> $_SESSION['user']['username'],
     ])->find();
     return view('/home.view.php', [
          'user'=> $user,
     ]);
}

$db->query('UPDATE user SET full_name = :fullname, username = :username, birthday = :birthday, email = :email WHERE id = :id', [
     'username'=> $user['username'],
     'fullname'=> $user['fullName'],
     'birthday'=> $user['birthday'],
     'email'=> $user['email'],
     'id'=> $user['id'],
]);

login([
     'username' => $user['username']
]);

header('location: /');
exit();