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

function article_add($title, $content, $status) {
    db_query("INSERT INTO article (title, content, status) VALUES (:title, :content, :status)", [
        'title' => $title,
        'content' => $content,
        'status' => $status
    ]);
    $db = db_connect();
    return $db->lastInsertId();
}

function article_edit($id, $title, $content, $status) {
    db_query("UPDATE article SET title=:title, content=:content, status=:status WHERE id=:id", [
        'id' => $id,
        'title' => $title,
        'content' => $content,
        'status' => $status
    ]);
    return true;
}

function article_delete($id) {
    db_query("DELETE FROM article WHERE id=:id", [
        'id' => $id
    ]);
    return true;
}
