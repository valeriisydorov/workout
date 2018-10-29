<?php

if (!is_auth()) {
    redirect_to(ROOT . '/login');
}

$id = isset($params[1]) ? $params[1] : null;

if (ctype_digit($id)) {
    $article = article_one($id);
    if ($article === false) {
        redirect_to(ROOT . '/error');
    } else {
        article_delete($id);
        redirect_to(ROOT);
    }
} else {
    redirect_to(ROOT . '/error');
}
