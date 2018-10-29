<?php

if (!is_auth()) {
    redirect_to(ROOT . '/login');
}

$id = isset($params[1]) ? $params[1] : null;

if (ctype_digit($id)) {
    $article = article_one($id);
    if ($article === false) {
        redirect_to(ROOT . '/error');
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $article_title = htmlspecialchars(trim($_POST['title']));
        $article_content = htmlspecialchars(trim($_POST['content']));

        if ($article_title == '' || $article_content == '') {
            $msg = 'All fields must be filled';
        } else {
            article_edit($id, $article_title, $article_content);
            redirect_to(ROOT . '/view/' . $id);
        }
    } else {
        $article_title = $article['title'];
        $article_content = $article['content'];
        $msg = '';
    }
} else {
    redirect_to(ROOT . '/error');
}

$title = 'Edit article';
$inner = template('edit', [
    'article' => $article,
    'article_title' => $article_title,
    'article_content' => $article_content,
    'msg' => $msg,
]);
