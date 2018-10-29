<?php

$articles = article_all();
$title = 'Home page';
$inner = template('index', [
    'articles' => $articles
]);