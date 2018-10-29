<?php

if (!is_auth()) {
    redirect_to(ROOT . '/login');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $article_title = htmlspecialchars(trim($_POST['title']));
    $article_content = htmlspecialchars(trim($_POST['content']));

    if ($article_title == '' || $article_content == '') {
        $msg = 'All fields must be filled';
    } else {
        $id = article_add($article_title, $article_content);
        redirect_to(ROOT . '/edit/' . $id);
    }
} else {
    $article_title = '';
    $article_content = '';
    $msg = '';
}

$title = 'Add article';
$inner = template('add', [
    'article_title' => $article_title,
    'article_content' => $article_content,
    'msg' => $msg,
]);

