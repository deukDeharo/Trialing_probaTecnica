<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

require __DIR__ . '/../../vendor/autoload.php';

//Vistas
$app->get('/', function (Request $request, Response $response, $args) { 

    $renderer = new PhpRenderer(__DIR__ . '/../Templates/');
    return $renderer->render($response, "logIn.php", $args);
});

$app->get('/newUser', function (Request $request, Response $response, $args) { 

    $renderer = new PhpRenderer(__DIR__ . '/../Templates/');
    return $renderer->render($response, "newUser.php", $args);
});
$app->get('/allPosts', function (Request $request, Response $response, $args) { 

    $renderer = new PhpRenderer(__DIR__ . '/../Templates/');
    return $renderer->render($response, "allPosts.php", $args);
});

$app->get('/myPosts', function (Request $request, Response $response, $args) { 

    $renderer = new PhpRenderer(__DIR__ . '/../Templates/');
    return $renderer->render($response, "myPosts.php", $args);
});
$app->get('/newPost', function (Request $request, Response $response, $args) { 

    $renderer = new PhpRenderer(__DIR__ . '/../Templates/');
    return $renderer->render($response, "newPost.php", $args);
});

//API
//operaciones de usuario
$app->get('/users', 'App\Controllers\UserController:getAllusers');
$app->post('/user', 'App\Controllers\UserController:insertUser');
$app->delete('/user/{id}','App\Controllers\UserController:deleteUser');

//operaciones de Post
$app->get('/posts', 'App\Controllers\PostController:getAllPosts');
$app->get('/posts/user/{id}', 'App\Controllers\PostController:getUserPosts');
$app->post('/post','App\Controllers\PostController:insertPost');
$app->delete('/post/{id}','App\Controllers\PostController:deletePost');