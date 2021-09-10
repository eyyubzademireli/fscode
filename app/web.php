<?php

$app->router->get('/', 'HomeController@home');
$app->router->post('/form', 'HomeController@pluginForm');
$app->router->post('/sendmessage', 'HomeController@sendMessage');