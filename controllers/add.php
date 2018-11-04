<?php

if (!is_auth()) {
    redirect_to(ROOT . '/login');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $article_title = htmlspecialchars(trim($_POST['title']));
    $article_content = htmlspecialchars(trim($_POST['content']));
    $article_status = isset($_POST['status']) ? 1 : 0;

    if ($article_title == '' || $article_content == '') {
        $msg = 'All fields must be filled';
    } else {
        $id = article_add($article_title, $article_content, $article_status);
        redirect_to(ROOT . '/edit/' . $id);
    }
} else {
    $article_title = '';
    $article_content = '';
    $article_status = '';
    $msg = '';
}

$title = 'Add article';
$inner = template('add', [
    'article_title' => $article_title,
    'article_content' => $article_content,
    'article_status' => $article_status,
    'msg' => $msg,
]);

