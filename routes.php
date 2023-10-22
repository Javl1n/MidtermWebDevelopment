<?php 

$router->get('/session' , 'controllers/session/create.php')->only('guest');
$router->post('/session' , 'controllers/session/store.php')->only('guest');
$router->delete('/session' , 'controllers/session/destroy.php')->only('auth');
     
$router->get('/registration' , 'controllers/registration/create.php')->only('guest');
$router->post('/registration' , 'controllers/registration/store.php')->only('guest');

$router->get('/', 'controllers/home.php')->only('auth');
$router->get('/user/edit','controllers/user/edit.php')->only('auth');
$router->put('/user/edit','controllers/user/store.php')->only('auth');
$router->get('/aboutme/edit','controllers/user/aboutme/edit.php')->only('auth');
$router->put('/aboutme','controllers/user/aboutme/store.php')->only('auth');
$router->get('/comment/edit','controllers/user/comment/edit.php')->only('auth');

$router->get('/aboutus', 'controllers/aboutus.php')->only('auth');

$router->get('/php/calculator','controllers/php/calculator/index.php')->only('auth');
$router->post('/calculator/result','controllers/php/calculator/result.php')->only('auth');

$router->get('/php/file-manager','controllers/php/manager/index.php')->only('auth');
$router->get('/file-manager/file','controllers/php/manager/create.php')->only('auth');
$router->post('/file-manager/file','controllers/php/manager/store.php')->only('auth');

// $router->get('','')->only('auth');