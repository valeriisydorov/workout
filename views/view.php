<h1><?= $article['title'] ?></h1>
<time><?= $article['date'] ?></time>
<p><?= $article['content'] ?></p>

<?php if (is_auth()): ?>
    <a href="<?= ROOT ?>/edit/<?= $article['id'] ?>">Изменить</a>
<?php endif; ?>
<a href="<?= ROOT ?>">На главную</a>