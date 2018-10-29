<?php

include_once('db.php');

function article_all() {
    $query = db_query("SELECT * FROM article ORDER BY date DESC");
    return $query->fetchAll();
}

function article_one($id) {
    $query = db_query("SELECT * FROM article WHERE id=:id", [
        'id' => $id
    ]);
    return $query->fetch();
}

function article_add($title, $content) {
    db_query("INSERT INTO article (title, content) VALUES (:title, :content)", [
        'title' => $title,
        'content' => $content
    ]);
    $db = db_connect();
    return $db->lastInsertId();
}

function article_edit($id, $title, $content) {
    db_query("UPDATE article SET title=:title, content=:content WHERE id=:id", [
        'id' => $id,
        'title' => $title,
        'content' => $content
    ]);
    return true;
}

function article_delete($id) {
    db_query("DELETE FROM article WHERE id=:id", [
        'id' => $id
    ]);
    return true;
}