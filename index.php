<?php

define('ROOT', '/workout');

include_once('models/template.php');
include_once('models/article.php');
include_once('models/login.php');

$params = explode('/', $_GET['workout_uri']);
$end_param = count($params) - 1;
if ($params[$end_param] === '') {
    unset($params[$end_param]);
    $end_param--;
}

session_start();

$controller = isset($params[0]) ? $params[0] : 'index';

if (! (preg_match("/^[a-zA-Z0-9]+$/", $controller)
    && file_exists('controllers/' . $controller . '.php'))) {
    $controller = 'error';
}

include("controllers/$controller.php");

echo template('main', [
    'title' => $title,
    'content' => $inner
]);
