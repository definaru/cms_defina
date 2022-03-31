<?php
    use app\defina\services\Router;

    Router::get('/', 'index', ['title' => 'Home', 'page' => 'index']);
    Router::get('/login', 'login', ['title' => 'Авторизация', 'page' => 'login']);
    Router::get('/forgot', 'forgot', ['title' => 'Восстановление аккаунта', 'page' => 'forgot']);
    Router::get('/register', 'register', ['title' => 'Регистрация', 'page' => 'register']);

    Router::enable();
?>