<?php 

$router->get('/', 'controllers/home.php')->only('auth');

$router->get('/user/edit','controllers/user/edit.php')->only('auth');


$router->get('/session' , 'controllers/session/create.php')->only('guest');
$router->post('/session' , 'controllers/session/store.php')->only('guest');
$router->delete('/session' , 'controllers/session/destroy.php')->only('auth');
     
$router->get('/registration' , 'controllers/registration/create.php')->only('guest');
$router->post('/registration' , 'controllers/registration/store.php')->only('guest');

$router->get('/about', 'controllers/about.php');


