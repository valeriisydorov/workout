<?php

$id = isset($params[1]) ? $params[1] : null;

if (ctype_digit($id)) {
    $article = article_one($id);
    if ($article === false) {
        redirect_to(ROOT . '/error');
    }
} else {
    redirect_to(ROOT . '/error');
}

$title = 'View article';
$inner = template('view', [
    'article' => $article,
]);
